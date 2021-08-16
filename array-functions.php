<?php

$names = array(
  'Mike' => 'Frog',
  'Chris' => 'Teacher',
  'Hampton' => 'Teacher'
);

function print_info($value, $key) {
  echo "$key is a $value.<br>";
}
  
array_walk($names, 'print_info');
  
?>