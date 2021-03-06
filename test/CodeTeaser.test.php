<?php
namespace Trzczy\Model\Domain;

class CodeTeaserTest extends \PHPUnit_Framework_TestCase
{
    private $subjectObject;

    public function inputParameters()
    {
        $data = [];
        include 'data.php';
        include 'data2.php';
        include 'data3.php';
        include 'data4.php';
        return $data;
    }

    /**
     * @dataProvider inputParameters
     */

    public function testIsTeaserStringEqualToAssertedValue($length, $content, $expected)
    {
        $result = $this->subjectObject->build($length, $content);
        $this->assertEquals($expected, $result);
    }

    public function setUp()
    {
        $this->subjectObject = new CodeTeaser();
    }
}