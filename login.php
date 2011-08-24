<?php

	include_once 'class.user.php';
	$uname = pg_escape_string($_POST['uname']);
	$upass = pg_escape_string($_POST['password']);
	echo login($uname,$upass);
//	header( "Location: /poker/poker.php");
?>
