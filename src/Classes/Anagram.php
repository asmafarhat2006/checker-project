<?php
namespace App\Classes;
define("NO_OF_CHARS", 256);
class Anagram {
    
    
    public function isAnagram($str1,$str2){
        $str1 = $this->sanitizeString($str1);
        $str2 = $this->sanitizeString($str2);
        // Create 2 count arrays and initialize all values as 0
        $count1 = array_fill( 0, NO_OF_CHARS, null);
        $count2 = array_fill( 0, NO_OF_CHARS, null);

	    // For each character in input strings, increment count
        // in the corresponding count array
        for ($i = 0; $i < strlen($str1) && $i < strlen($str2); $i++) {
 
            $count1[ord($str1[$i])]++;
            $count2[ord($str2[$i])]++;
        }

	// If both strings are of different length. Removing
	// this condition will make the program fail for strings
        if(strlen($str1) != strlen($str2)){
            return false;
        }
	// Compare count arrays
	    for ($j = 0; $j < NO_OF_CHARS; $j++){
            if ($count1[$j] != $count2[$j])
			    return false;

        }
		    
	    return true;
    }
    /**
     *
     * @param string $str1
     * @param string $str2
     * @return boolean
     */
    public function isAnagramSlowVersion( $str1, $str2 ) {
        if (strlen($str1) != strlen($str1)) {
            // if not same length then definitely not
            return false;
        }
        return $this->sortString($this->sanitizeString($str1)) === $this->sortString($this->sanitizeString($str2));
    }
    
    /**
     * Removes all spaces and transorms letters to lowercase.
     * @param string $str
     * @return string
     */
    private function sanitizeString( $str ) {
        return strtolower(str_replace(' ', '', $str));
    }

    /**
     * Sort characters and return them.
     * @param string $str
     * @return string
     */
    private function sortString( $str ) {
        $chars = str_split($str);
        sort($chars);
        return implode('', $chars);
    }
}