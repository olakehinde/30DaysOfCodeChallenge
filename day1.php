<?php
//  write a function that takes in an integer as a parameter and returns the number of possible divisors of the number including 1 but excluding itself.
function divisor($x) {
    $count = 0;
    for ($i=1; $i < $x; $i++) { 
        if (($x % $i) == 0) {
            $count++;
        }
    }
    return $count;
}

echo divisor(10);
?>