<?php
namespace Mvc\Model\Domain;

class CodeTeaser
{
    public $body;

    function __construct($body)
    {
        $this->body = $body;
    }

    function build($targetLength = 50)
    {
        $this->body = $this->cleanArticle($this->body);
        $this->body = $this->replaceBracketsByParenthesis($this->body);
        $strip = $this->stripTagsBetweenCode($this->body);
        if (mb_strlen($strip) > $targetLength) {
            $n = 0;
            $newStripExcerptLength = 0;
            $actualLength = 0;
            $cutText = '';
            while (
                ($actualLength < $targetLength)
                AND
                ($newStripExcerptLength < $targetLength + 1)
            ) {
                $testedCutText = mb_substr($this->body, 0, ++$n);
                $testedPartlyStripedExcerpt = $this->stripTagsBetweenCode($testedCutText);
                //check the last char of $testedPartlyStripedExcerpt is a word char
                $switch = '';
                if (preg_match('/\w[^\w]\z/u', $testedPartlyStripedExcerpt, $resultArr)) {
                    $switch = $resultArr[0];
                }
                $oldStripExcerptLength = $newStripExcerptLength;
                $newStripExcerptLength = mb_strlen($testedPartlyStripedExcerpt);
                if (
                    $switch
                    AND
                    ($newStripExcerptLength - $oldStripExcerptLength)
                ) {
                    $m = $n - 1;
                    $cutText = mb_substr($this->body, 0, $m);
                    $actualLength = $oldStripExcerptLength;
                }
            }
            $r = '/<code lang[^\w]+[^<>]*>(.*?)(?:<\/code>|$)/su';
            $cutText = preg_replace_callback(
                $r,
                function ($c) {
                    return str_replace($c[1], htmlspecialchars($c[1]), $c[0]);
                },
                $cutText);
            if (!empty($cutText)) {
                $cutText = $this->htmlRegenerate($cutText);
            }
        } else {
            $cutText = $this->body;
        }
        return htmlspecialchars_decode($cutText);
    }

    function cleanArticle($text)
    {
        $text = preg_replace('/[\cK\f\r\x85]+/us', '', $text);
//        $text = preg_replace('/[\v]+/us', '', $text);
        $text = preg_replace('/\h+/us', ' ', $text);
        return $text;
    }

    private function replaceBracketsByParenthesis($betweenCode)
    {
        return preg_replace_callback('/\[(\/?code[ ]?[^\]]*)\]/su', function ($matches) {
            return '<' . $matches[1] . '>';
        },
            $betweenCode
        );
    }

    function addSpaceBetweenTags($text)
    {
        foreach (['p', 'code', 'blockquote'] as $tag) {
            $text = preg_replace_callback('/(<\/' . $tag . '>)(\S)/',
                function ($matches) {
                    return ($matches[1] . ' ' . $matches[2]);
                }
                , $text);
        }
        return $text;
    }

    function stripTagsBetweenCode($text)
    {
        $r = '/((^|<\/code>).*?(<code[^>]*?>|$))/us';
        $text = preg_replace_callback($r, function ($a) {
            $betweenCode = $a[0];

            /*
             *            $betweenCode = mb_ereg_replace('/<[^<>]*?>/s', '', $betweenCode);
             */


            $betweenCode = $this->addSpaceBetweenTags($betweenCode);



            $betweenCode = strip_tags($betweenCode);

            //Debug info
            ?><?= "***** DEBUG **** " . __LINE__ . " **\n" . str_replace($_SERVER['DOCUMENT_ROOT'], '', __FILE__) . "\n"?><?php
            //May repeat
            var_dump($betweenCode);
            echo "\n";
            //may repeat end
            echo "***/DEBUG ***";
            echo "\n\n";
            ?><?php
            //Debug info end


            return $betweenCode;
        }, $text);

        return $text;
    }

    function htmlRegenerate($html)
    {
        $dom = new \DOMDocument();
        $dom->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', "UTF-8"), LIBXML_HTML_NODEFDTD);
        $dots = $dom->createTextNode("...");
        $dom->documentElement->lastChild->lastChild->appendChild($dots);
        $innerHTML = "";
        foreach ($dom->getElementsByTagName('body')->item(0)->childNodes as $child) {
            $innerHTML .= preg_replace('/\n+$/us', ' ', $dom->saveHTML($child));
        }
        return $innerHTML;
    }
}