<?php
namespace Mvc\Model\Domain;

class CodeTeaserTest extends \PHPUnit_Framework_TestCase
{
    private $subjectObject;

    public function inputParameters() {
        $data = [];
        include 'data.php';
        include 'data2.php';
        include 'data3.php';
        return $data;
    }

    function setUp()
    {
        $this->subjectObject = new CodeTeaser();
    }

    /**
     * @dataProvider inputParameters
     */

    public function testIsTeaserStringEqualToAssertedValue($length, $content, $expected)
    {
        $result = $this->subjectObject->build($length, $content);
        $this->assertEquals($expected, $result);
    }
}