<?php

	include_once 'class.user.php';
	$a = pg_escape_string($_POST['uid']);
	$b = pg_escape_string($_POST['uname']);
	$c = pg_escape_string($_POST['password']);
	echo $a.$b.$c;
	$newUser = new user($a,$b,$c);
	header( "Location: /poker/index.php?user=".$newUser->getUsername());
?>
