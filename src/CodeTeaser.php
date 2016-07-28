<?php
/**
 * This file contains a class with methods of the package.
 *
 * @package    CodeTeaser
 * @license    https://opensource.org/licenses/MIT  The MIT License (MIT)
 * @author     trzczy <trzczy@gmail.com>
 */

namespace Mvc\Model\Domain;

/**
 * The class for teasers
 *
 * The class is for making a teaser of blog article. Article must consist of paragraphs, blocquote, special code
 * elements and no plain text. The special code elements may not contain encoded text.
 *
 * @package    CodeTeaser
 * @author     trzczy <trzczy@gmail.com>
 */
class CodeTeaser
{
    /**
     * Finds and returns user by ID or username
     *
     * @param int $targetLength max teaser length
     * @content string $content An article body to get the teaser of
     * @return string Returns trimmed article with the text inside code tags not encoded.
     */
    function build($targetLength = 50, $content)
    {
        $content = $this->replaceBracketsByParenthesis($content);
        $n = 3;
        $wordN = 0;
        $lengths = [0, 0];
        $countedLength = mb_strlen($this->prepareCodeForCharCounting(mb_substr($content, 0, $n)));
        array_push($lengths, $countedLength);
        array_shift($lengths);

        while (
            $countedLength <= $targetLength
            and
            mb_strlen($content) >= $n
        ) {
            array_push($lengths, $countedLength);
            array_shift($lengths);

            $lengthChange = $lengths[1] - $lengths[0];

            $resultArr1 = [];
            $resultArr7 = [];

            $oneCharLongerTestedCutText = mb_substr($content, 0, $n + 1);
            $sevenCharLongerTestedCutText = mb_substr($content, 0, $n + 7);

            preg_match('/\w[^\w]\z/u', $oneCharLongerTestedCutText, $resultArr1);
            preg_match('/\<\/code\>\z/u', $sevenCharLongerTestedCutText, $resultArr7);
            if (
                !empty($resultArr7)
                AND
                $resultArr7[0]
            ) {
                $n = $n + 7;
            } elseif (
                !empty($resultArr1)
                AND
                $resultArr1[0]
                AND
                $lengthChange
            ) {
                $wordN = $n;
            }
            $n++;
            $countedLength = mb_strlen($this->prepareCodeForCharCounting($oneCharLongerTestedCutText));// 2
        }
        $r = '/<code(?:(?:\W[^<>]*?>)|>)(.*?)(?:<\/code>|$)/su';//!
        $cutText = preg_replace_callback(
            $r,
            function ($c) {
                return str_replace($c[1], htmlspecialchars($c[1]), $c[0]);
            },
            mb_substr($content, 0, $wordN)
        );
        if (!empty($cutText)) {
            $cutText = $this->encodeAmpersandEverywhereButCodeSnippets($cutText);
            $cutText = $this->htmlRegenerate($cutText);
            $cutText = $this->afterHtmlRegenerating($cutText); //????
        }

        return htmlspecialchars_decode($cutText);
    }


    /**
     * Converts a string with brackets code tags to the string with html code tags
     *
     * @param string $string Text that may contain bracket code tags.
     * @return string Returns converted string
     */
    function replaceBracketsByParenthesis($string)
    {
        return preg_replace_callback('/\[(\/?code[ ]?[^\]]*)\]/su', function ($matches) {
            return '<' . $matches[1] . '>';
        },
            $string
        );
    }

    /**
     * Normalizes a string for char counting
     *
     * @param string $string Text that may contain some invisible chars and chars between main tags.
     * @return string Returns normalized string
     */
    function prepareCodeForCharCounting($string)
    {
        $r = '/(?:^|<\/code>).*?(?:<code(?:(?:\W[^<>]*?>)|>)|$)/us';
        $string = preg_replace_callback(
            $r,
            function ($a) {
                /** @var string $stringExceptCodeSnippets A string divided by code snippets */
                $stringExceptCodeSnippets = $a[0];
                $stringExceptCodeSnippets = $this->cleanArticle($stringExceptCodeSnippets);
                $stringExceptCodeSnippets = $this->clearBetweenMainTags($stringExceptCodeSnippets);
                $stringExceptCodeSnippets = strip_tags($stringExceptCodeSnippets);
                return $stringExceptCodeSnippets;
            }, $string
        );
        $string = preg_replace('/\W$/u', '', $string);
        return $string;
    }

    /**
     * Removes double spaces and some invisible chars
     *
     * @param string $string Text that may contain some invisible chars that can influence the result of counting chars.
     * @return string Returns clean string
     */
    function cleanArticle($string)
    {
        $string = preg_replace('/\v+/us', '', $string);
        $string = preg_replace('/\h+/us', ' ', $string);
        return $string;
    }

    /**
     * Removes any chars between main tags.
     *
     * @param string $string Text that may contain some chars between main tags.
     * @return string Returns the string without any chars between main tags.
     */
    function clearBetweenMainTags($string)
    {
        foreach (['p', 'code', 'blockquote'] as $tag) {
            $string = preg_replace_callback(
                '/(<\/' . $tag . '>)[^<]*/u',
                function ($matches) {
                    return $matches[1];
                }
                , $string);
        }
        return $string;
    }

    /**
     * Removes any chars between main tags.
     *
     * @param string $string Text that may contain some chars between main tags.
     * @return string Returns the string without any chars between main tags.
     */
    function encodeAmpersandEverywhereButCodeSnippets($string)
    {
        $r = '/(?:^|<\/code>).*?(?:<code(?:(?:\W[^<>]*?>)|>)|$)/us';
        $string = preg_replace_callback(
            $r,
            function ($a) {
                $stringExceptCodeSnippets = $a[0];
                $stringExceptCodeSnippets = str_replace('&', '&amp;', $stringExceptCodeSnippets);
                return $stringExceptCodeSnippets;
            }, $string
        );
        return $string;
    }

    /**
     * Closes open tags and adds three dots.
     *
     * @param string $html Text that may contain some html tags open.
     * @return string Returns the string without open tags and with three dots added to the last word of the text
     */
    function htmlRegenerate($html)
    {
        $dom = new \DOMDocument();
        $dom->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', "UTF-8"), LIBXML_HTML_NODEFDTD);
        $dots = $dom->createTextNode("...");
        $this->lastParent($dom)->appendChild($dots);
        $innerHTML = "";
        foreach ($dom->getElementsByTagName('body')->item(0)->childNodes as $child) {
            $innerHTML .= $dom->saveHTML($child);
        }
        return $innerHTML;
    }

    /**
     * Finds the last parent element in DOM
     *
     * @param object $dom DOMDocument object
     * @return object Returns DOMElement of the last parent element of the given DOM
     */
    function lastParent($dom)
    {
        $child = $dom->documentElement;
        while ($child->lastChild) {
            $child = $child->lastChild;
        }
        return $child->parentNode;
    }

    /**
     * Normalizes a string to the inline pseudo-html code without spaces between main tags.
     *
     * @param string $string Text that may contain white spaces between main tags.
     * @return string Returns normalized string
     */
    function afterHtmlRegenerating($string)
    {
        $r = '/(?:^|<\/code>).*?(?:<code(?:(?:\W[^<>]*?>)|>)|$)/us';
        $string = preg_replace_callback(
            $r,
            function ($a) {
                $stringExceptCodeSnippets = $a[0];
                $stringExceptCodeSnippets = $this->cleanArticle($stringExceptCodeSnippets);
                $stringExceptCodeSnippets = $this->clearBetweenMainTags($stringExceptCodeSnippets);
                return $stringExceptCodeSnippets;
            }, $string
        );
        return $string;
    }
}
