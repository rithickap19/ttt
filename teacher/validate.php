<?php


$conn=new mysqli('localhost','root','','ttt') ; 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = $_POST['sname'];
$password = $_POST['tname'];

// SQL query to check if the user exists in the database
$sql = "SELECT * FROM treg WHERE staff_id='$username' AND staffpwd='$password'";
$result = $conn->query($sql);

// Check if the query returned a row
if ($result->num_rows > 0) {
    // User authenticated successfully
    header("location: teacher.html");
} else {
    // Invalid credentials
    header("location: tlog.html");
}

// Close database connection
$conn->close();
?>