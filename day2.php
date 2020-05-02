<?php
    // write a function that checks if a given input string is a palindrome i.e the input string matches its reverse.
    function palindrome($input) {
        return $input === strrev($input) ?  true : false;
    }

    echo palindrome("madam");
?>