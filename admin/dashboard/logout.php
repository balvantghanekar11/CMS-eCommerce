<?php
	include_once("../config/config.php");
	unset($_SESSION["adminID"]);
	session_destroy();
	header("location: ../Index.php");
?>