<?php
    class AnagramSpotter
    {
        function checkForAnagrams($input_word, $input_check_word)
        {
            $input_word_lower = strtolower($input_word);
            $input_check_word_lower = strtolower($input_check_word);
            $string = [$input_word_lower, $input_check_word_lower];

            if (preg_grep('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $string) || (ctype_digit($string)))
              {
                  $string = "Please do not enter numbers or special characters";
              } else {
                  $array_input_word = str_split($input_word_lower);
                  $array_input_check_word = str_split($input_check_word_lower);

                  sort($array_input_word);
                  sort($array_input_check_word);
                  if ($array_input_word == $array_input_check_word)
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
