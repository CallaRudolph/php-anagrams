<?php
    class AnagramSpotter
    {
        function checkForAnagrams($input_word)
        {
            $lowercase = strtolower($input_word);
            $string = $lowercase;

            if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $string) || (ctype_digit($string)))
              {
                $string = "Please do not enter numbers or special characters";
              }
              return $string;
        }
    }
?>
