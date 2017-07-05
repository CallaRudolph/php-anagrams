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
              }
              return $string;
        }
    }
?>
