<?php
require 'dbcon.php';
if(isset($_POST['tsubmit'])){
    
$name=mysqli_real_escape_string($con,$_POST['name']);
$phone=mysqli_real_escape_string($con,$_POST['phone']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$sid=mysqli_real_escape_string($con,$_POST['sid']);
$dob=mysqli_real_escape_string($con,$_POST['dob']);
$dept=mysqli_real_escape_string($con,$_POST['dept']);



    $stmt=$con->prepare("insert into treg(name,stid,dept,phone,stpassword,dob) values(?,?,?,?,?,?)");
    $stmt   ->bind_param("sisisi",$name,$sid,$dept,$phone,$password,$dob);
    $stmt   ->execute();
    header("location: panel/teacher.php");
    $stmt->close();
    $con->close();
}

?>
