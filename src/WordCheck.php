<?php

    class RepeatCounter
    {

        private $input_string;
        private $input_count;

        function __composer($input_string, $input_count)
        {
            $this->input_string = $input_string;
            $this->input_count = $input_count;
        }

        function getString()
        {
            return $this->input_string;
        }

        function setString($input_string)
        {
            $this->input_string = (string)$input_string;
        }

        function getword()
        {
            return $this->input_count;
        }

        function setWord($input_count)
        {
            $this->input_count = (string)$input_count;
        }


        function countRepeats ($input_string, $input_count)
        {

        $count = 0;
        $phrase_arr = explode(' ', $input_string);
        $phrase_arr_lower = array_map('strtolower', $phrase_arr);
        $input_count_lower = strtolower($input_count);

            foreach($phrase_arr_lower as $word)
            {
                if($word == $input_count_lower)
                {
                    $count ++;
                }
            }
            return $count;
        }
    }
?>
