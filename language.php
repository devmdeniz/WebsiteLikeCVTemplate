<?php

session_start();

$language = strip_tags($_GET['language']);



	if($language == "tr" || $language == "en") {

		$_SESSION["language"] = $language;

		header("Location:index.php");

	}else {

		header("Location:index.php");

	}

	

?>