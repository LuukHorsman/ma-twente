<?php

$array = [];
$count = 0;
foreach($_POST as $key => $value) {

	$array[$count] = htmlentities($value);

	$count++;
}


foreach($array as $row) {
	echo $row . '<br>';
}