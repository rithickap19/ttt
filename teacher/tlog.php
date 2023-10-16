<?php
require('panel/dbcon.php');
if(isset($_POST["sub"])){
    
    $username=$_POST['sid'];
    $pd=$_POST['password'];
    $result=mysqli_query($conn,"SELECT * FROM treg WHERE stid=$username");
    $row=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
        if($pd == $row["stpassword"]){
            $_SESSION["login"]=true;
            $_SESSION["id"]=$row["stid"];
            header("Location:panel/teacher.php");

        }
    }
}
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Teacher</title>
      <link rel="stylesheet" href="tlog.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="center">
         <input type="checkbox" id="show">
         <label for="show" class="show-btn">Hii Faculty</label>
         <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <div class="text">
               Login Form
            </div>
            <form class="" action="" method="post">
               <div class="data">
                  <label>Staff ID</label>
                  <input type="text" required name="sid">
               </div>
               <div class="data">
                  <label>Password</label>
                  <input type="password" required name="password">
               </div>
               <div class="forgot-pass">
                  <a href="#">Forgot Password?</a>
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit" name="sub">login</button>
               </div>
               <div class="signup-link">
                  Not a member? <a href="teacher_reg.html">Signup now</a>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>