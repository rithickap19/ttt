<?php
$fname=$_POST['fname'];
$sname=$_POST['sname'];
$phone=$_POST['phone'];
$rollno=$_POST['rollno'];
$staffpwd=$_POST['stupwd'];
$dob=$_POST['dob'];
$dept=$_POST['dept'];

$conn=new mysqli('localhost','root','','ttt') ; 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if($conn->connect_error)
{
    die('Connection failed:' .$conn->connect_error);
}
else{

    $stmt=$conn->prepare("insert into sreg(fname,sname,phone,rollno,stupwd,dept,dob) values(?,?,?,?,?,?,?)");
    $stmt   ->bind_param("ssiissi",$fname,$sname,$phone,$rollno,$staffpwd,$dept,$dob);
    $stmt   ->execute();
    header("location: student.html");
    $stmt->close();
    $conn->close();
}
 ?>