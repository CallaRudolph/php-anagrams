<?php
    require_once "src/AnagramSpotter.php";

    class AnagramSpotterTest extends PHPUnit_Framework_TestCase
    {
        function test_checkForAnagrams_characters()
        {
            //Arrange
            $test_AnagramSpotter = new AnagramSpotter;
            $input_word = "th3t#";

            //Act
            $result = $test_AnagramSpotter->checkForAnagrams($input_word);

            //Assert
            $this->assertEquals("Please do not enter numbers or special characters", $result);
        }

        function test_checkForAnagrams_lowerCase()
        {
            //Arrange
            $test_AnagramSpotter = new AnagramSpotter;
            $input_word = "Pail";

            //Act
            $result = $test_AnagramSpotter->checkForAnagrams($input_word);

            //Assert
            $this->assertEquals("pail", $result);
        }
    }
?>
