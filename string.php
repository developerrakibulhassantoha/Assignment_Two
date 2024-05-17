<?php

$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($str) {

    $str = strtolower($str);

    preg_match_all('/[aeiou]/', $str, $matches);

    return count($matches[0]);
}

function reverseString($str) {

    return strrev($str);
}

foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    $reverseStrings = reverseString($string);
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String:$reverseStrings <br>";
}
