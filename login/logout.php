<?php
	session_start();
	session_destroy();
	header('Location: http://localhost/login/index.php');
	exit();
?>