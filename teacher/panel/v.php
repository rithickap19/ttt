<?php
require 'dbcon.php';
if(!empty($_SESSION["id"])){
    $id=$_SESSION['id'];
    $result=mysqli_query($conn, "SELECT * FROM teacher WHERE sid=$id ");
    $row=mysqli_fetch_assoc($result);
}
if(isset($_POST['tsubmit'])){
    
// $name=mysqli_real_escape_string($conn,$_POST['name']);
 $phone=mysqli_real_escape_string($conn,$_POST['phone']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$sid=mysqli_real_escape_string($conn,$_POST['sid']);
$dob=mysqli_real_escape_string($conn,$_POST['email']);
$dept=mysqli_real_escape_string($conn,$_POST['dept']);



    // $stmt=$conn->prepare("UPDATE into teacher(name,email,phone,sid,dept,password) values(?,?,?,?,?,?)");
    // $stmt   ->bind_param("sisisi",$name,$dob,$phone,$sid,$dept,$password);
    // $stmt   ->execute();
    

    $query = "UPDATE teacher 
    SET email=?,phone=?,dept=?,password=?
    WHERE sid=$id";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("sisi", $dob,$phone,$dept,$password);
  $stmt->execute();

    
    
    
 
    
    
    
    
    
    
    
    echo "alert:Done";
    header("location:teacher.php");
    echo "alert:Done";
    $stmt->close();
    $conn->close();
}

?>
