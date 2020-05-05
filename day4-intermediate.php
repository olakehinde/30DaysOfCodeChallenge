<?php
    function optimus($input) {
        function is_prime($num) {
            for ($x=2; $x < $num ; $x++) { 
                if ($num % $x == 0) {
                    return false;
                } 
            }
            return true;
        }

        // initialize array where the prime numbers will be outputted
        $output = [];
        // loop through the numbers btw 1 and the input integer and check which one is a prime number
        for ($i=2; $i <= $input ; $i++) { 
            // if is a prime number, push value into an array
            if (is_prime($i) === true) {
                array_push($output, $i);
            }
        }
        return $output;
    }

    print_r(optimus(11));