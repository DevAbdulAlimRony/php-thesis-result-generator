<?php
	session_start();
	if(isset($_POST['logout'])){
	if(isset($_SESSION['id']))
	{
	session_unset();
	header("Location:../../a.php");
	}
	}
	?>