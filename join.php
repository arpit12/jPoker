<?php

	include_once 'class.user.php';
	$user = new user(pg_escape_string($_POST['uid']),pg_escape_string($_POST['uname']),pg_escape_string($_POST['password']));
	header( "Location: /poker/poker.php?user=".pg_escape_string($_POST['uname']) ) ;
?>
