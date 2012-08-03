<?php
class ArrayTest extends PHPUnit_Framework_TestCase
{
    public function testNewArrayIsEmpty()
    {
        $subject = array();

        $this->assertThat(sizeof($subject), $this->equalTo(0));
    }

    public function testArrayContainsAnElement()
    {
        $subject = array();
        $subject[] = 'Element';

        $this->assertThat(sizeof($subject), $this->equalTo(1));
    }
}
?>