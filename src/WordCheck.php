<?php

    class RepeatCounter
    {

        function countRepeats ($input_string, $input_word)
        {

        $count = 0;
        $phrase_arr = explode(' ', $input_string);
        $phrase_arr_lower = array_map('strtolower', $phrase_arr);
        $word_lower = strtolower($input_word);

            foreach($phrase_arr_lower as $item)
            {
                if($item == $word_lower)
                {
                    $count ++;
                }
            }
            return $count;
        }
    }
?>
