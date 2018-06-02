<?php

session_start();

if (strlen($_POST['password']) > 0) {
	// any password at all logs you in.
	$_SESSION['user'] = $_POST['email'];

	header('Location: ex10-account.php');
} else {
	header('Location: ex10.php?message=Login%20Failed');

}