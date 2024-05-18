<?php

$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($str) {
    $str = strtolower($str);
    $vowels = "aeiou";

    $count = 0;

    for ($i = 0; $i < strlen($str); $i++) {

        if (strpos($vowels, $str[$i]) !== false) {
            $count++;
        }
    }
    return $count;
}

foreach ($strings as $string) {

    $vowelCount = countVowels($string);

    $reversedString = strrev($string);
 
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}

?>
