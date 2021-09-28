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
    
        //define "alphabet"
        $alphabet = range( 'a', 'z' );
     
        //split lowercased string into array
        $sentence = str_split($string);
     
        //check that there are no letters present in alphabet not in sentence
        return empty( array_diff( $alphabet, $sentence ) );
    }


}