<?php

	// Begin the session
	session_start();

	// To avoid case conflicts, make the input uppercase and check against the session value
	if(strtoupper($_GET['captcha']) == $_SESSION['captcha_id']) {
		echo 'true';
	} else {
		echo 'false';
	}
	
?>