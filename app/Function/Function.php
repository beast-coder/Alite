<?php

function s($str, $die = true) {
    echo $str . '<br/>';
    $die ? die() : "";
}

function p($arr, $die = true) {
    echo '<pre>';
    print_r($arr);
    $die ? die() : "";
}

function ifExist(&$var = "") {
    return empty(trim($var)) ? false : trim($var);
}
