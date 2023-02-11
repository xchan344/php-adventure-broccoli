<!-- 
    Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
-->
<?php
    $vowels = ['a','e','i','o','u','A','E','I','O','U'];
    $letter = "A";
    if (in_array(strtolower($letter), $vowels))
        echo "'".$letter."' is a Vowel";
     else 
        echo "'".$letter."' is a Consonant";
?>