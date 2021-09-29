<?php
namespace App\Classes;
define("NO_OF_CHARS", 26);
/**
 * An anagram is a type of word play, the result of rearranging the letters of a word or phrase to produce a
 * new word or phrase, using all the original letters exactly once.
 * reads the same backward or forward.
 
 */
class Anagram {
    
    
    public function isAnagram($str1,$str2){

        if(empty($str1) || empty($str2) ){return false;}


        $str1 = $this->sanitizeString($str1);
        $str2 = $this->sanitizeString($str2);
        // Create two int arrays behaving like a hashset to store num of occurences of each char in string 
        $count1 = array_fill( 0, NO_OF_CHARS, null);
        $count2 = array_fill( 0, NO_OF_CHARS, null);

	    $lengthOfFirstString = strlen($str1);
        $lengthOfSecondString = strlen($str2);
        /* If both strings are of different length.cant be anagrams */
            if($lengthOfFirstString != $lengthOfSecondString){
                return false;
            }
        // For each character in input strings, increment count
        // in the corresponding count array

        for ($i = 0; $i < $lengthOfFirstString && $i < $lengthOfSecondString; $i++) {
 
            $count1[ord($str1[$i]) - ord('a')]++;
            $count2[ord($str2[$i]) - ord('a')]++;
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