<?php
    require_once "src/WordCheck.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function testCountRepeatsOneLetter()
        {
            // Arrange
            $test_counter = new RepeatCounter;
            $input_string = "I am what I am.";
            $input_count = "i";

            // Act
            $result = $test_counter->countRepeats($input_string, $input_count);
            // Assert
            $this->assertEquals(2, $result);
        }

        function testCountRepeatsMultiLetter()
        {
            // Arrange
            $test_counter = new RepeatCounter;
            $input_string = "People are people and people people places.";
            $input_count = "people";

            // Act
            $result = $test_counter->countRepeats($input_string, $input_count);
            // Assert
            $this->assertEquals(4, $result);
        }

        function testCountRepeatsNumbers()
        {
            // Arrange
            $test_counter = new RepeatCounter;
            $input_string = "10 out of 10 chimps agree: Jane Goodall is a hack.";
            $input_count = "10";

            // Act
            $result = $test_counter->countRepeats($input_string, $input_count);
            // Assert
            $this->assertEquals(2, $result);
        }

        function testCountRepeatsMultiSentence()
        {
            // Arrange
            $test_counter = new RepeatCounter;
            $input_string = "People are people and people people places. People are not not people though.";
            $input_count = "people";

            // Act
            $result = $test_counter->countRepeats($input_string, $input_count);
            // Assert
            $this->assertEquals(6, $result);
        }
    }
?>
