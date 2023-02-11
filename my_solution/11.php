<!-- 
    Write a program that takes an array of numbers as input and outputs the average of the numbers.
-->
<?php
$array = array(2, 4, 5 , 6, 2, 5);
$average = array_sum($array) / count($array);
echo "The average of the array is: ". $average;
?>