<?php
class ArrayTest extends PHPUnit_Framework_TestCase
{
    public function testNewArrayIsEmpty()
    {
        $subject = array();

        $this->assertEquals(0, sizeof($subject));
    }

    public function testArrayContainsAnElement()
    {
        $subject = array();
        $subject[] = 'Element';

        $this->assertEquals(1, sizeof($subject));
    }
}
?>