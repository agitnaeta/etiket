<?php 
	$mysqli=new mysqli("localhost","root","","db_ticket");
	if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
	}