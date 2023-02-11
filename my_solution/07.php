<!-- 
    Write a program that takes an array of strings as input and outputs the longest string in the array.
 -->
<?php
function lngst_str_finder($array) {
$lngst_string = "";
  foreach ($array as $string) {
    if (strlen($string) > strlen($lngst_string)) {
      $lngst_string = $string;
    }
  }
  return $lngst_string;
}
$array = array("Good afternoon", "po", "ma'am","Kristin","sana","po","pwede","open-notes","sa quiz","hehe");
echo lngst_str_finder($array);
?>