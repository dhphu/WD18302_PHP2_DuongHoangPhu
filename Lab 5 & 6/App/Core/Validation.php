<?php

namespace App\Core;

class Validation {

    public static function email($value){
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function required($value){
        return empty($value);
    }

    public static function minLength($value , $minLength){
        $length = mb_strlen($value, 'UTF-8');
        return $length >= $minLength;
    }

    public static function maxLength($value, $maxLength){
        $length = mb_strlen($value);
        return $length <= $maxLength;
    }
}