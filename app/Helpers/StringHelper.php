<?php

namespace App\Helpers;

class StringHelper
{
    public static function shortenText($text, $maxLength = 20, $ellipsis = '...')
    {
        if (strlen($text) > $maxLength) {
            $shortenedText = substr($text, 0, $maxLength - strlen($ellipsis)) . $ellipsis;
        } else {
            $shortenedText = $text;
        }

        return $shortenedText;
    }
}
