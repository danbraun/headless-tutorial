<?php

$_SESSION = array();
session_destroy();

	header('Location: ex10.php?message=You%20are%20logged%20out');
