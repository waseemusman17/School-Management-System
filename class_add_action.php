<?php

	include_once('config.php');

	$classname = $_POST['classname'];

	$query = "INSERT INTO classes (cname) VALUES ('".$classname."')";

	if ($conn->query($query) === TRUE) {
    	//header('location:students_tables.php');
			header('location:class_tables.php');
	} else {
    	echo "Error: " . $query . "<br>" . $conn->error;
	}

	$conn->close();
?>
