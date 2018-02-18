<?php

if(!isset($_SESSION['admin']))
{
	header("location: cms.php");
	die();
}

?>

