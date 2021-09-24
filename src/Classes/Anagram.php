<?php
namespace App\Classes;

class Anagram {
    /**
     *
     * @param string $str1
     * @param string $str2
     * @return boolean
     */
    public function isAnagram( $str1, $str2 ) {
        return $this->sortString($this->sanitizeString($str1)) === $this->sortString($this->sanitizeString($str2));
    }

    /**
     * Removes all spaces and transorms letters to lowercase.
     * @param string $str
     * @return string
     */
    private function sanitizeString( $str ) {
        return \strtolower(\str_replace(' ', '', $str));
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