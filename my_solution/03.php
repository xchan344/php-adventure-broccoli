<!-- 
    Write a program that takes a string as input and outputs the frequency of each character in the string.
-->
<?php
$string = "never gonna give you up
never gonna let you down
never gonna run around and desert you"
;
foreach (count_chars($string, 1) as $i => $val) {
   echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.<br>";
}
?>