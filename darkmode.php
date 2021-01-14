<?php

session_start();

	$darkmode = strip_tags($_GET['darkmode']);


	if($darkmode == "false") {
		$_SESSION["darkmode"] = "false";
		header("Location:index.php");
	} else if($darkmode == "true"){
		$_SESSION["darkmode"] = "true";
		header("Location:index.php");
	}

/*
	if($darkmode == "true" || $darkmode == "false") {

		$_SESSION["darkmode"] = $darkmode;

		header("Location:index.php");

	}else {

		header("Location:index.php");

	}
*/
	

?>