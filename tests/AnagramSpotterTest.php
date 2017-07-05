<?php
    require_once "src/AnagramSpotter.php";

    class AnagramSpotterTest extends PHPUnit_Framework_TestCase
    {
        function test_checkForAnagrams_characters()
        {
            //Arrange
            $test_AnagramSpotter = new AnagramSpotter;
            $input_word = "th3t#";
            $input_check_word = "p@il3e";

            //Act
            $result = $test_AnagramSpotter->checkForAnagrams($input_word, $input_check_word);

            //Assert
            $this->assertEquals("Please do not enter numbers or special characters", $result);
        }

        function test_checkForAnagrams_lowerCaseAll()
        {
            //Arrange
            $test_AnagramSpotter = new AnagramSpotter;
            $input_word = "Pail";
            $input_check_word = "cArrot";

            //Act
            $result = $test_AnagramSpotter->checkForAnagrams($input_word, $input_check_word);

            //Assert
            $this->assertEquals(["pail", "carrot"], $result);
        }

        function test_checkForAnagrams_oneMatch()
        {
            //Arrange
            $test_AnagramSpotter = new AnagramSpotter;
            $input_word = "Bread";
            $input_check_word = "bearD";

            //Act
            $result = $test_AnagramSpotter->checkForAnagrams($input_word, $input_check_word);

            //Assert
            $this->assertEquals("Anagram Spotted!", $result);
        }
    }
?>
