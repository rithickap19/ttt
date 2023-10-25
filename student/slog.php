<?php

require 'connection.php';
if(isset($_POST["sub"])) {
    
    $rollno=$_POST['rollno'];
    $pd=$_POST['password'];
    $result=mysqli_query($conn,"SELECT * FROM students WHERE rollno=$rollno");
    $row=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
        if($pd == $row["password"]){
            $_SESSION["login"]=true;
            $_SESSION["id"]=$row["rollno"];
            header("Location:student.php");

        }
    }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Student</title>
      <link rel="stylesheet" href="slog.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .button-container {
            position: fixed;
            left: 0;
            top: 0;
            margin: 20px;
        }
        .button-container button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="button-container">
    <button><i class="fas fa-star"></i></button>
</div>
   </head>
   <body>
   <style>
        .button-container {
            position: fixed;
            left: 0;
            top: 0;
            margin: 20px;
        }
    </style>

<body>

<div class="button-container">
    <button><-Back</button>
</div>
      <div class="center">
         <input type="checkbox" id="show">
         <label for="show" class="show-btn">Hii Student</label>
         <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <div class="text">
               Login Form
            </div>
            <form class="" action="" method="post">
               <div class="data">
                  <label>Roll No</label>
                  <input type="text" required name="rollno">
               </div>
               <div class="data">
                  <label>Password</label>
                  <input type="password" required name="password">
               </div>
               <!-- <div class="forgot-pass">
                  <a href="#">Forgot Password?</a>
               </div> -->
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit" name='sub'>Login</button>
               </div>
               <!-- <div class="signup-link">
                  Not a member? <a href="student_reg.html">Signup now</a>
               </div> -->
            </form>
         </div>
      </div>
   </body>
</html>