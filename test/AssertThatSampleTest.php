<?php
//http://www.phpunit.de/manual/3.7/ja/writing-tests-for-phpunit.html#writing-tests-for-phpunit.assertions.assertThat
class AssertThatSampleTest extends PHPUnit_Framework_TestCase
{
   public function testAssertThatSamples() {
        $this->assertThat(1+1, $this->equalTo(2));

        $this->assertThat(1+1, $this->greaterThan(1));
        $this->assertThat(1+1, $this->greaterThanOrEqual(2));
        $this->assertThat(1+1, $this->greaterThanOrEqual(1));

        $this->assertThat(1+1, $this->lessThan(3));
        $this->assertThat(1+1, $this->lessThanOrEqual(3));
        $this->assertThat(1+1, $this->lessThanOrEqual(2));

        $this->assertThat("abcde", $this->stringContains("bcd"));
        $this->assertThat("abcde", $this->stringStartsWith("abc"));
        $this->assertThat("abcde",   $this->stringEndsWith("cde"));
        $this->assertThat("hoge@example.com",   $this->matchesRegularExpression("/example\.com$/"));



        $this->assertThat(10, $this->logicalNot(
                                $this->equalTo(11)));
        $this->assertThat(10,
                $this->logicalAnd(
                    $this->greaterThan(9),
                    $this->lessThan(11)));
        $this->assertThat(10,
                $this->logicalOr(
                    $this->equalTo(10),
                    $this->equalTo(11)));

    }
}
?>