<?php

include_once('connection.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$sid = test_input($_POST["sid"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM slogin");
	$stmt->execute();
	$users = $stmt->fetchAll();
	
	foreach($users as $user) {
		
		if(($user['sid'] == $roll) && 
			($user['password'] == $password)) {
				header("location: student.html");
		}
		else {
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
			echo "</script>";
			die();
		}
	}
}

?>
