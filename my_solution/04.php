<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
 -->
 <?php
   function sum_digits($num){
      $sum = 0;
      for ($i = 0; $i < strlen($num); $i++){
         $sum += $num[$i];
      }
      return $sum;
   }
   $num = "77345993";
   print_r("The sum of digits is: ");
   echo sum_digits($num);
?>