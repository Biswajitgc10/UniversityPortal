<?php
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];
 	$subject = $_POST['subject'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into form(fname,email,comment,subject) values(?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $fname,$email,$comment,$subject);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>