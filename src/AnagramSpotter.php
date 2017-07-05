<?php
    class AnagramSpotter
    {
        function checkForAnagrams($input_word, $input_check_array)
        {
            $answer = [""];
            // $array_of_words = implode(" ", $input_check_array);
            $input_word_lower = strtolower($input_word);
            // $array_input_word = str_split($input_word_lower);

            if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $input_word_lower) || (ctype_digit($input_word_lower)))
              {
                  $answer = "Please do not enter numbers or special characters";
              } else {
                  foreach ($input_check_array as $word) {
                      $word_lower_case = strtolower($word);
                      // $word_split = str_split($word_lower_case);

                      $answer = [$input_word_lower . ", " . $word_lower_case];
                      

                      // sort($array_input_word);
                      // sort($word_split);
                      //
                      // if ($array_input_word == $word_split)
                      // {
                      //     $answer = ["Anagram Spotted!"];
                      // } else {
                      //       $answer = ["No anagram found"];
                      // }
                  }
              }
            return $answer;
        }
    }
?>
