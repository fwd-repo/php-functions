<?php

$phrase = "We only hit what we aim for";

$len = strlen($phrase);

//echo $len;

//echo substr($phrase, 0, 5);

$start = strpos($phrase, 'hit');
echo substr($phrase, $start);

?>