<?php
require 'connection.php';
if(!empty($_SESSION["id"])){
    $id=$_SESSION['id'];
   
}
else
echo "No";

    if(isset($_POST['tsubmit'])){
    
        $email=mysqli_real_escape_string($conn,$_POST['email']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
 $dept=mysqli_real_escape_string($conn,$_POST['dept']);



$query = "UPDATE students 
    SET email=?,phone=?,class=?,password=?
    WHERE rollno=$id";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("sisi", $email,$phone,$dept,$password);
  header("Location:student.php");
  $stmt->execute();
 


  
}

?>
