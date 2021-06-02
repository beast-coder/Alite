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

function remove_special_char($string, $replace_with = '-') {
    return trim(preg_replace('/-{1,}/', $replace_with, preg_replace('/[^A-Za-z0-9\-_]/', $replace_with, $string)), $replace_with);
}

function fileNameSanitize($name) {
    $pathInfo = pathinfo($name);
    $fileName = preg_replace('/[^a-zA-Z0-9_]/', '', $pathInfo['filename']);
    $fileName = substr($fileName, 0, 20);
    $fileName = $fileName . '_' . date('YmdHis') . '.' . $pathInfo['extension'];
    return $fileName;
}

function compressImage($source, $destination, $quality = 80) {
    // Get image info 
    $imgInfo = getimagesize($source);
    $mime = $imgInfo['mime'];

    // Create a new image from file 
    switch ($mime) {
        case 'image/jpeg':
        case 'image/jpg':
        case 'image/pjpeg':
            $image = imagecreatefromjpeg($source);
            break;
        case 'image/png':
            $image = imagecreatefrompng($source);
            break;
        case 'image/gif':
            $image = imagecreatefromgif($source);
            break;
        default:
            $image = imagecreatefromjpeg($source);
    }

    if ($mime == 'image/png') {
        imagepng($image, $destination, round($quality / 10));
    } else if ($mime == 'image/jpg' || $mime == 'image/jpeg' || $mime == 'image/pjpeg') {
        imagejpeg($image, $destination, $quality);
    } else {
        return false;
    }

    // Return compressed image 
    return $destination;
}
