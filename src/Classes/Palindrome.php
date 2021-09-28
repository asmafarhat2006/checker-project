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
        
        $str = str_replace(' ', '', $str);
        //remove special characters
        $str = preg_replace('/[^A-Za-z0-9\-]/', '', $str);
         //change case to lower
        $str = strtolower($str);

        $i = 0;
        //                                
        while ($str[$i] == $str[strlen($str) - ($i + 1)]) {
            $i++;

            if ($i > strlen($str) / 2) {
                return true;
            }
        }
        return false;
    }
}