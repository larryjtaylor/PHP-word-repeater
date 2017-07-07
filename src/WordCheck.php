<?php

    class Counter
    {
        function countWords ($input_string, $input_count)
        {

        $count = 0;
        $phrase_arr = explode(' ', $input_string);
        $phrase_arr_lower = array_map('strtolower', $phrase_arr);

            foreach($phrase_arr_lower as $word)
            {
                if($word == $input_count)
                {
                    $count ++;
                }
            }
            return $count;
        }
    }
?>
