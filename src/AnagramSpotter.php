<?php
    class AnagramSpotter
    {
        function checkForAnagrams($input_word)
        {
            $string = $input_word;

            if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $string) || (ctype_digit($string)))
              {
                $string = "Please do not enter numbers or special characters";
              }
              return $string;
        }
    }
?>
