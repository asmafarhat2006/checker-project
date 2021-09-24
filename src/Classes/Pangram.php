<?php
namespace App\Classes;

class Pangram {
    /**
     *
     * @param string $string
    
     * @return boolean
     */
    public function isPangram( $string ) {
        $string = preg_replace('/[^a-z]+/', '', strtolower($string));
        $string = count_chars($string, 3);
        return (strlen($string) == 26);
    }


}