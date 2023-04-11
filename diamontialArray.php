<?php
// function for kadane's algorithm
function subarry($Array, $n) {
  $a = 0;
  $b = 0;
  for($i=0; $i<$n; $i++) {
    $b = $b + $Array[$i];
    
    if ($b < 0)
      $b = 0; 
    
    if($a < $b)
      $a = $b; 
  }
  return $a;
}

// test the code
$MyArray = array(-2, 1, -3, 4, -1, 2, 1, -5, 4);
$n = sizeof($MyArray);
echo "Maximum SubArray is: ".subarry($MyArray, $n);
?>