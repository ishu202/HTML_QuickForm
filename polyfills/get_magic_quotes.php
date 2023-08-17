<?php

if (!function_exists('get_magic_quotes_gpc')) {
    function get_magic_quotes_gpc(): false
    { return false; }
}

if (!function_exists('get_magic_quotes_runtime')) {
    function get_magic_quotes_runtime(): false
    { return false; }
}