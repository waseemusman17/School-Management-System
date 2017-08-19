<?php

	include_once('config.php');

	$name = $_POST['name'];
	$rollno = $_POST['rollno'];
	$fathername = $_POST['fathername'];
	$phoneno = $_POST['phoneno'];
	$gender = $_POST['gender'];
	$class_id = $_POST['class_id'];
	$student_id = $_POST['student_id'];

	$query = "UPDATE students SET name = '".$name."', rollno = '".$rollno."', fathername ='".$fathername."', phone = '".$phoneno."', gender = '".$gender."', class_id = '".$class_id."' WHERE student_id=".$student_id."";

	if ($conn->query($query) === TRUE) {
    	header('location:students_tables.php');
	} else {
    	echo "Error: " . $query . "<br>" . $conn->error;
	}

	$conn->close();
?>
