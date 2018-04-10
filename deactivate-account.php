<?php


session_start();

<<<<<<< HEAD
if(empty($_SESSION['id_company'])) {
=======
if(empty($_SESSION['id_user'])) {
>>>>>>> 39fb0d711f2b404afafe1a4a325e5362539bb248
  header("Location: ../index.php");
  exit();
}

require_once("../db.php");

if(isset($_POST)) {
	
<<<<<<< HEAD
	$sql = "UPDATE company SET active='3' WHERE id_company='$_SESSION[id_company]'";
=======
	$sql = "UPDATE users SET active='2' WHERE id_user='$_SESSION[id_user]'";
>>>>>>> 39fb0d711f2b404afafe1a4a325e5362539bb248

	if($conn->query($sql) == TRUE) {
		header("Location: ../logout.php");
		exit();
	} else {
		echo $conn->error;
	}
} else {
	header("Location: settings.php");
	exit();
}