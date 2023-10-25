<?php
require '../dbcon.php';

    $id=$_GET['id'];
    $result=mysqli_query($con, "SELECT * FROM timetable WHERE staffid=$id ");
    $row=mysqli_fetch_assoc($result);



?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>TimeTable Update</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0 bd-example-row">

    <!-- Example Code -->
    <style>
        body{
 
            height: 100vh;
  width: 100%;
  background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
}
        </style>
        <h1>  Time Table of <?php echo $row['staffid']; ?> </h1>

        
        <form action="ttupdate.php" method="post">
        <!-- <input type="text" name="sid" value=" <?php echo $row['staffid']; ?>"> -->
    <div class="container text-center">
  <div class="row row-cols-6">
    <div class="col">   Day/Period</div>
    <div class="col">1</div>
    <div class="col">2</div>
    <div class="col">3</div>
    <div class="col">4</div>
    <div class="col">5</div>

    <div class="col">Monday</div>
    <div class="col"><?php echo $row['mp1'];?></div>
    <div class="col"><?php echo $row['mp2'];?></div>
    <div class="col"><?php echo $row['mp3'];?></div>
    <div class="col"><?php echo $row['mp4'];?></div>
    <div class="col"><?php echo $row['mp5'];?></div>

    <div class="col">Tuesday</div>
     <div class="col"><?php echo $row['tp1'];?></div>
    <div class="col"><?php echo $row['tp2'];?></div>
    <div class="col"><?php echo $row['tp3'];?></div>
    <div class="col"><?php echo $row['tp4'];?></div>
    <div class="col"><?php echo $row['tp5'];?></div>

    
    <div class="col">Wednesday</div>
    <div class="col"><?php echo $row['wp1'];?></div>
    <div class="col"><?php echo $row['wp2'];?></div>
    <div class="col"><?php echo $row['wp3'];?></div>
    <div class="col"><?php echo $row['wp4'];?></div>
    <div class="col"><?php echo $row['wp5'];?></div>


    <div class="col">Thursday</div>
    <div class="col"><?php echo $row['thp1'];?></div>
    <div class="col"><?php echo $row['thp2'];?></div>
    <div class="col"><?php echo $row['thp3'];?></div>
    <div class="col"><?php echo $row['thp4'];?></div>
    <div class="col"><?php echo $row['thp5'];?></div>

    
    <div class="col">Friday</div>
    <div class="col"><?php echo $row['fp1'];?></div>
    <div class="col"><?php echo $row['fp2'];?></div>
    <div class="col"><?php echo $row['fp3'];?></div>
    <div class="col"><?php echo $row['fp4'];?></div>
    <div class="col"><?php echo $row['fp5'];?></div>
    

    
    
    
        
  </div>
</div>

    <!-- End Example Code -->
</from>
  </body>
</html>