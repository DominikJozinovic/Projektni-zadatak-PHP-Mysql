<?php

    define('__APP__', TRUE);

	session_start();
	
	
	unset($_POST);
	unset($_SESSION['users']);

	$_SESSION['users']['valid'] = 'false';
    	
	header("Location: index.php?menu=1");
	exit;