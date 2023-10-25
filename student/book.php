<?php
require 'connection.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Student Panel</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0 bd-example-row">

    <!-- Example Code -->
    <style>
        body{
 
            height: 100vh;
  width: 100%;
  background: linear-gradient(-10deg, #9f01ea 10%,  #56d8e4  90%);
  
}
      
      </style>
        <h1> </h1>

        
        <form class="" action="" method="post">
       
        <?php
$sid=$_GET['id'];
$_SESSION["tid"]=$sid;
$sql="SELECT * FROM timetable WHERE staffid= $sid ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>

<div id="tb">
    <div class="container text-center">
  <div class="row row-cols-6">
    <div class="col">   Day/Period</div>
    <div class="col">1</div>
    <div class="col">2</div>
    <div class="col">3</div>
    <div class="col">4</div>
    <div class="col">5</div>
    <!-- <a href='book.php?date=".$date."' class='btn btn-success btn-xs'>Book</a>";  -->

    <div class="col">Monday</div>
<div class="col">
    <?php 
    if($row['mp1'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Monday-1  | 9:30-10:20\')">Book</button>';
    } else {
        echo $row['mp1'];
    }
    ?>
</div>
<div class="col">
    <?php 
    if($row['mp2'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Monday-2 | 10:20-11:10\')">Book</button>';
    } else {
        echo $row['mp2'];
    }
    ?>
</div>
<div class="col">
    <?php 
    if($row['mp3'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Monday-3  | 11:10-12:00\')">Book</button>';
    } else {
        echo $row['mp3'];
    }
    ?>
</div>
<div class="col">
    <?php 
    if($row['mp4'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Monday-4 |  12:30-1:20\')">Book</button>';
    } else {
        echo $row['mp4'];
    }
    ?>
</div>
<div class="col">
    <?php 
    if($row['mp5'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Monday-5  | 1:20-2.10\')">Book</button>';
    } else {
        echo $row['mp5'];
    }
    ?>
</div>
    <div class="col">Tuesday</div>
<div class="col">
    <?php 
    if($row['tp1'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Tuesday-1  | 9:30-10:20\')">Book</button>';
    } else {
        echo $row['tp1'];
    }
    ?>
</div>
<div class="col">
    <?php 
    if($row['tp2'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Tuesday-2 | 10:20-11:10\')">Book</button>';
    } else {
        echo $row['tp2'];
    }
    ?>
</div>
<div class="col">
    <?php 
    if($row['tp3'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Tuesday - 3 | Time : 11.10-12.00\')">Book</button>';
    } else {
        echo $row['tp3'];
    }
    ?>
</div>
<div class="col">
    <?php 
    if($row['tp4'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Tuesday-4  | 12:30-1:20\')">Book</button>';
    } else {
        echo $row['tp4'];
    }
    ?>
</div>
<div class="col">
    <?php 
    if($row['tp5'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Tuesday-5  | 1:20-2.10\')">Book</button>';
    } else {
        echo $row['tp5'];
    }
    ?>
</div>

<script>
    function redirectToNextPage(columnName) {
        // Redirect to the next page with the column name as a parameter
        window.location.href = "booki.php?column=" + columnName;
    }
</script>


    
<div class="col">Wednesday</div>
<div class="col">
    <?php 
    if($row['wp1'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Wednesday-1  | 9:30-10:20\')">Book</button>';
    } else {
        echo $row['wp1'];
    }
    ?>
</div>
<div class="col">
    <?php 
    if($row['wp2'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Wednesday-2 | 10:20-11:10\')">Book</button>';
    } else {
        echo $row['wp2'];
    }
    ?>
</div>
<div class="col">
    <?php 
    if($row['wp3'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Wednesday-3  | 11:10-12:00\')">Book</button>';
    } else {
        echo $row['wp3'];
    }
    ?>
</div>
<div class="col">
    <?php 
    if($row['wp4'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Wednesday-4 |  12:30-1:20\')">Book</button>';
    } else {
        echo $row['wp4'];
    }
    ?>
</div>
<div class="col">
    <?php 
    if($row['wp5'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Wednesday-5  | 1:20-2.10\')">Book</button>';
    } else {
        echo $row['wp5'];
    }
    ?>
</div>


    

    <div class="col">Thursday</div>
<div class="col">
    <?php 
    if($row['thp1'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Thursday-1  | 9:30-10:20\')">Book</button>';
    } else {
        echo $row['thp1'];
    }
    ?>
</div>
<div class="col">
    <?php 
    if($row['thp2'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Thursday-2 | 10:20-11:10\')">Book</button>';
    } else {
        echo $row['thp2'];
    }
    ?>
</div>
<div class="col">
    <?php 
    if($row['thp3'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Thursday-3  | 11:10-12:00\')">Book</button>';
    } else {
        echo $row['thp3'];
    }
    ?>
</div>
<div class="col">
    <?php 
    if($row['thp4'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Thursday-4  | 12:30-1:20\')">Book</button>';
    } else {
        echo $row['thp4'];
    }
    ?>
</div>
<div class="col">
    <?php 
    if($row['thp5'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Thursday-5  | 1:20-2.10\')">Book</button>';
    } else {
        echo $row['thp5'];
    }
    ?>
</div>

<div class="col">Friday</div>
<div class="col">
    <?php 
    if($row['fp1'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Friday-1  | 9:30-10:20\')">Book</button>';
    } else {
        echo $row['fp1'];
    }
    ?>
</div>
<div class="col">
    <?php 
    if($row['fp2'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Friday-2 | 10:20-11:10\')">Book</button>';
    } else {
        echo $row['fp2'];
    }
    ?>
</div>
<div class="col">
    <?php 
    if($row['fp3'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Friday-3  | 11:10-12:00\')">Book</button>';
    } else {
        echo $row['fp3'];
    }
    ?>
</div>
<div class="col">
    <?php 
    if($row['fp4'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Friday-4 | 12:30-1:20\')">Book</button>';
    } else {
        echo $row['fp4'];
    }
    ?>
</div>
<div class="col">
    <?php 
    if($row['fp5'] == 0) {
        echo '<button type="button" onclick="redirectToNextPage(\'Friday-5  | 1:20-2.10\')">Book</button>';
    } else {
        echo $row['fp5'];
    }
    ?>
</div>

    
    
    
</div> 

  </div>
</div>
</from>
<br>

  <style>
    #bts {
background-color: #4CAF50; /* Green */
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
}
    </style>
    <a href="close.php" id="bts"><-Back</a>
  
  
</h1>
  </body>
</html>