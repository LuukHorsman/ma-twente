<?php
if(isset($_SESSION) && !empty($_SESSION)) {
	
} else {
	header('location: /');
}