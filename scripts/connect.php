<?php
	$hostname = "HabitRPGGitHub.db.10270192.hostedresource.com";
	$username = "HabitRPGGitHub";
	$password = "HabitRPG1!";
	$dbname = "HabitRPGGitHub";

	$db= new PDO("mysql:host=".$hostname.";dbname=".$dbname.";charset=utf8", $username, $password);
?>