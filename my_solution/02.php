<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
-->
<?php
function Palindrome($MyString) {
  $a = 0;
  $b = strlen($MyString) - 1;
  $flag = 0;
  while($b > $a){
    if ($MyString[$a] != $MyString[$b]){
      $flag = 1;
      break;
    }
    $a++;
    $b--;
  }

  if ($flag == 0){
    echo $MyString." is a Palindrome.\n";
  } else {
    echo $MyString." is not a Palindrome.\n";
  }
}

Palindrome("'racecar'");
echo "<br>";
Palindrome("'christian'");
echo "<br>";
Palindrome("'rotator'");
?>