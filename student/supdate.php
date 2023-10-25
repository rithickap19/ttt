<?php
require 'connection.php';
if(!empty($_SESSION["id"])){
    $id=$_SESSION['id'];
    $result=mysqli_query($conn,"SELECT * FROM students WHERE rollno =$id ");
    $row=mysqli_fetch_assoc($result);
}
else
echo "No";
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Update Profile </title>
    <link rel="stylesheet" href="sreg.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">My Profile</div>
    <div class="content">
      <form action="sregconnect.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" disabled required name="name" value="<?php echo $row['name'];?>" >
          </div>
          <div class="input-box">
            <span class="details">Roll No</span>
            <input type="text" placeholder="Enter your username" disabled required  name="sid" value="<?php echo $row['rollno'];?>">
          </div>
          <div class="input-box">
            <span class="details">Class</span>
            <input type="text" placeholder="Enter your email" required  name="dept" value="<?php echo $row['class'];?>">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" required name="phone" value="<?php echo $row['phone'];?>">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" required name="password" value="<?php echo $row['password'];?>">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required name="email" value="<?php echo $row['email'];?>">
          </div>
         
        </div>
        <div class="button">
          <input type="submit" value="Update" name="tsubmit">
        </div>
      </form>
    </div>
  </div>

</body>
</html>