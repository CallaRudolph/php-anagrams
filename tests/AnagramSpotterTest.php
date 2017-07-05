<?php
    require_once "src/AnagramSpotter.php";

    class AnagramSpotterTest extends PHPUnit_Framework_TestCase
    {
        function test_checkForAnagrams_characters()
        {
            //Arrange
            $test_AnagramSpotter = new AnagramSpotter;
            $input_word = "th3t#";
            $input_check_array = ["p@il3e", "l33tz"];

            //Act
            $result = $test_AnagramSpotter->checkForAnagrams($input_word, $input_check_array);

            //Assert
            $this->assertEquals("Please do not enter numbers or special characters", $result);
        }

        // function test_checkForAnagrams_lowerCaseAll()
        // {
        //     //Arrange
        //     $test_AnagramSpotter = new AnagramSpotter;
        //     $input_word = "Rat";
        //     $input_check_array = ["taR"];
        //
        //     //Act
        //     $result = $test_AnagramSpotter->checkForAnagrams($input_word, $input_check_array);
        //
        //     //Assert
        //     $this->assertEquals("Anagram Spotted!", $result);
        // }
        //
        // function test_checkForAnagrams_oneMatch()
        // {
        //     //Arrange
        //     $test_AnagramSpotter = new AnagramSpotter;
        //     $input_word = "rat";
        //     $input_check_array = ["tar"];
        //
        //     //Act
        //     $result = $test_AnagramSpotter->checkForAnagrams($input_word, $input_check_array);
        //
        //     //Assert
        //     $this->assertEquals("Anagram Spotted!", $result);
        // }
        //
        // function test_checkForAnagrams_multipleMatch()
        // {
        //     //Arrange
        //     $test_AnagramSpotter = new AnagramSpotter;
        //     $input_word = "rat";
        //     $input_check_array = ["tar", "art"];
        //
        //     //Act
        //     $result = $test_AnagramSpotter->checkForAnagrams($input_word, $input_check_array);
        //
        //     //Assert
        //     $this->assertEquals("Anagram Spotted!", $result);
        // }
        //
        // function test_checkForAnagrams_returnMatch()
        // {
        //     //Arrange
        //     $test_AnagramSpotter = new AnagramSpotter;
        //     $input_word = "rat";
        //     $input_check_word = ["tar", "art"];
        //
        //     //Act
        //     $result = $test_AnagramSpotter->checkForAnagrams($input_word, $input_check_aray);
        //
        //     //Assert
        //     $this->assertEquals("Anagram Spotted: [tar, art]", $result);
        // }
    }
?>
