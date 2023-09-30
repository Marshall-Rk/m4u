<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(0);
ob_start();

require('db.php');

function encode_url($unsafe_url_parameter) {
    $safe_url_parameter = urlencode($unsafe_url_parameter);
    $safe_url_parameter = str_replace('+', '-', $safe_url_parameter);
    return $safe_url_parameter;
}

function decode_url($string) {
$string = str_replace('-', '+', $string);
$string = urldecode($string);
return $string;
}
