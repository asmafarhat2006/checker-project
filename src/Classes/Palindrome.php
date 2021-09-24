<?php

namespace  App\Classes;;

/**
 * A palindrome is a word, phrase, number, or other sequence of characters which
 * reads the same backward or forward.
 
 */
class Palindrome {
    /**
     * Check if a string is palindrome
     * @param string $str
     * @return bool
     */
    public function check( $str ) {
        $sanitizedString = \str_replace(' ', '', $str);
        return $sanitizedString == strrev($sanitizedString);
    }
}