<?php
    class AnagramSpotter
    {
        function checkForAnagrams($input_word, $input_check_word, $input_check_word2)
        {
            $input_word_lower = strtolower($input_word);
            $input_check_word_lower = strtolower($input_check_word);
            $input_check_word_lower2 = strtolower($input_check_word2);
            $string = [$input_word_lower, $input_check_word_lower, $input_check_word_lower2];

            if (preg_grep('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $string) || (ctype_digit($string)))
              {
                  $string = "Please do not enter numbers or special characters";
              } else {
                  $array_input_word = str_split($input_word_lower);
                  $array_input_check_word = str_split($input_check_word_lower);
                  $array_input_check_word2 = str_split($input_check_word_lower2);

                  sort($array_input_word);
                  sort($array_input_check_word);
                  sort($array_input_check_word2);

                  if (($array_input_word == $array_input_check_word) || ($array_input_word == $array_input_check_word2))
                  {
                      $string = "Anagram Spotted!";
                  } else {
                        $string = "No anagram found";
                  }
              }
            return $string;
        }
    }
?>
