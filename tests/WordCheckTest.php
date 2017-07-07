<?php
    require_once "src/WordCheck.php";

    class CounterTest extends PHPUnit_Framework_TestCase
    {
        function testCountWordsOneLetter()
        {
            // Arrange
            $test_counter = new Counter;
            $input_string = "I am what I am.";
            $input_count = "I";

            // Act
            $result = $test_counter->countWords($input_string, $input_count);
            // Assert
            $this->assertEquals([$input_count=>2], $result);
        }
    }
?>
