<?php

	include_once('config.php');

	$name = $_POST['name'];
	$cnic = $_POST['cnic'];
	$fathername = $_POST['fathername'];
	$phoneno = $_POST['phoneno'];
	$gender = $_POST['gender'];
	$class = $_POST['class'];

	$query = "INSERT INTO teachers (name,cnic,fathername,phone,gender,class) VALUES ('".$name."','".$cnic."','".$fathername."','".$phoneno."','".$gender."','".$class."')";

	if ($conn->query($query) === TRUE) {
    	header('location:teacher_tables.php');
	} else {
    	echo "Error: " . $query . "<br>" . $conn->error;
	}

	$conn->close();
?>
