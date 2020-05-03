<?php
    function santa($siblings, $sweets) {
        return $sweets % $siblings == 0 ? 'give away' : 'eat them yourself';
    }

    echo santa(3,9);