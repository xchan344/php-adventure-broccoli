<!-- 
    Write a program that takes a string as input and outputs the string with all vowels removed.
 -->
<?php
$string = "Never gonna give you up
Never gonna let you down
Never gonna run around and desert you
Never gonna make you cry
Never gonna say goodbye
Never gonna tell a lie and hurt you";
$rmv_vowel = array("a" => "","e"=>"","i"=>"","o"=>"","u"=>"");
echo strtr($string, $rmv_vowel);
?>