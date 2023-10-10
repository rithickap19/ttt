<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$sid=$_POST['sid'];
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

    $stmt=$conn->prepare("insert into treg(name,sid,dept,phone,password,dob) values(?,?,?,?,?,?)");
    $stmt   ->bind_param("sisisi",$name,$sid,$dept,$phone,$password,$dob);
    $stmt   ->execute();
    header("location: teacher.html");
    $stmt->close();
    $conn->close();
}
 
?>
