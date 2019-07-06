<?php

if (!function_exists('mb_str_pad')) {
    function mb_str_pad($input, $pad_length, $pad_string=' ', $pad_type=STR_PAD_RIGHT,$encoding='UTF-8'){
        $mb_diff = strlen($input)-mb_strlen($input, $encoding);
        return str_pad($input,$pad_length+$mb_diff,$pad_string,$pad_type);
    }
}