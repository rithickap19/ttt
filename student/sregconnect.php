<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "ttt";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if(isset($_POST['tsubmit'])){
    
$name=mysqli_real_escape_string($conn,$_POST['name']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$sid=mysqli_real_escape_string($conn,$_POST['sid']);
$dob=mysqli_real_escape_string($conn,$_POST['dob']);
$dept=mysqli_real_escape_string($conn,$_POST['dept']);



    $stmt=$conn->prepare("insert into sreg(name,phone,rollno,stupwd,dept,dob) values(?,?,?,?,?,?)");
    $stmt   ->bind_param("siissi",$name,$phone,$sid,$password,$dept,$dob);
    $stmt   ->execute();
    header("location:slog.html");
    $stmt->close();
    $conn->close();
}

?>
