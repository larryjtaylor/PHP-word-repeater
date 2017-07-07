<?php

    class Counter
    {
        function countWords ($input_string, $input_count)
        {

        $count = 0;
        $phrase_arr = explode(' ', $input_string);

            foreach($phrase_arr as $word)
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
