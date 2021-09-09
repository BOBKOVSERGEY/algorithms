<?php

function search ($arr, $x) {
    foreach ($arr as $v) {
        if ($v == $x) {
            return $v;
        }
    }
    return false;
}


