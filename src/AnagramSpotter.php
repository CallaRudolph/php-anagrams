<?php
    class AnagramSpotter
    {
        function checkForAnagrams($input_word)
        {
            $lowercase = strtolower($input_word);
            $string = $lowercase;

            if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $lowercase) || (ctype_digit($lowercase)))
              {
                $lowercase = "Please do not enter numbers or special characters";
              }
              return $lowercase;
        }
    }
?>
