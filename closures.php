<?php

$name = 'Barry';

$greet = function() use($name) {
 
	echo "Hello there, $name!";
  
};

$greet();

?>