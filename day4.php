<?php
    function cstring($input) {
        return strtoupper($input) . ', ' . strtolower($input);
    }

    echo cstring('HasTaLaVisTa');