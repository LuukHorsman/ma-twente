<?php
$string = 'INSERT INTO medewerker (';

foreach($_POST as $key => $value) {
	if($key != 'subbutton') {
		$string .= $key . ', ';
	}
}
$string = rtrim($string, ', ');
$string .= ') VALUES (';

foreach($_POST as $key => $value) {
	if($key != 'subbutton') {
		$string .= "'" .  $value . "'" . ', ';
	}
}

$string = rtrim($string, ', ');
$string .= ')';

echo $string;