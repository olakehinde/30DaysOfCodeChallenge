<?php
    function persistence($input) {
        // define a function to multiply
        function multiply($num) {
            return array_reduce($num, function($a, $b) {
                return $a *= $b;
            }, 1);
        }
        // initialize count
        $count = 0;
      
        while (strlen($input) > 1) {
            // convert and split input to an array
            $input = str_split($input);
            $input = multiply($input);
            $count++;
        }
        return $count;
    }

    echo persistence(43386);