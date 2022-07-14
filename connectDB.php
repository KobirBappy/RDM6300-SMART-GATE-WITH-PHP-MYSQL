<?php
/* Database connection settings */
	$servername = "localhost";
    $username = "rdm6300rfiduseranddata";		//put your phpmyadmin username.(default is "root")
    $password = "01727507239";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "rdm6300rfiduseranddata";
    
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
?>