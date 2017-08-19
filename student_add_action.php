
<?php
	include_once('config.php');

	$name = $_POST['name'];
	$rollno = $_POST['rollno'];
	$fathername = $_POST['fathername'];
	$phoneno = $_POST['phoneno'];
	$gender = $_POST['gender'];
	$class_id = $_POST['class_id'];

	$query = "INSERT INTO students (name,rollno,fathername,phone,gender,class_id) VALUES ('".$name."','".$rollno."','".$fathername."','".$phoneno."','".$gender."','".$class_id."')";

	if ($conn->query($query) === TRUE) {
    	header('location:students_tables.php');
	} else {
    	echo "Error: " . $query . "<br>" . $conn->error;
	}

	$conn->close();
?>
