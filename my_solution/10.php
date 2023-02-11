<!-- 
    Write a program that takes an array of numbers as input and outputs the median of the numbers.
 -->
<?php
$array = [4, 7, 8, 12, 14, 17];
$length = count($array);
$half2 = $length / 2;
$half1 = $half2 - 1;
$half1 = $array[$half1];
$half2 = $array[$half2];
$median = ($half1 + $half2) / 2;
echo "The median of the array is: ". $median;
?>