<?php
	session_start();

	$darkmode = $_GET["darkmode"];

	if ($darkmode) {
	$_SESSION["darkmode"] = true;

	} else { 
		$_SESSION["darkmode"] = false;
	}
	header("Location:index.php
?>