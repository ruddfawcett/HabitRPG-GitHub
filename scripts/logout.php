<?php
	require ('session.php');
	session_destroy();
	echo "<script type='text/javascript'>window.location.href='http://ruddfawcett.com/habitrpg-github'</script>";
?>