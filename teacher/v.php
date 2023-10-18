<?php
require 'panel/dbcon.php';
if(isset($_POST['tsubmit'])){
    
$name=mysqli_real_escape_string($conn,$_POST['name']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$sid=mysqli_real_escape_string($conn,$_POST['sid']);
$dob=mysqli_real_escape_string($conn,$_POST['dob']);
$dept=mysqli_real_escape_string($conn,$_POST['dept']);



    $stmt=$conn->prepare("insert into treg(name,stid,dept,phone,stpassword,dob) values(?,?,?,?,?,?)");
    $stmt   ->bind_param("sisisi",$name,$sid,$dept,$phone,$password,$dob);
    $stmt   ->execute();
    echo "alert:Done";
    header("location:tlog.php");
    echo "alert:Done";
    $stmt->close();
    $conn->close();
}

?>
