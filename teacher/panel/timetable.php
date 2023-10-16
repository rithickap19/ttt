<?php
require 'dbcon.php';
if(!empty($_SESSION["id"])){
    $id=$_SESSION['id'];
    $result=mysqli_query($conn, "SELECT * FROM treg WHERE stid=$id ");
    $row=mysqli_fetch_assoc($result);
}
else
echo "No";
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
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
        <h1> Enter Your Time Table </h1>
        <form action="ttstore.php" method="post">
          <input type="text" name="sid" value="<?php echo $row['stid'];?>">
    <div class="container text-center">
  <div class="row row-cols-6">
    <div class="col">   Day/Period</div>
    <div class="col">1</div>
    <div class="col">2</div>
    <div class="col">3</div>
    <div class="col">4</div>
    <div class="col">5</div>

    <div class="col">Monday</div>
    <div class="col"><input type="text" name="m1"></div>
    <div class="col"><input type="text" name="m2"></div>
    <div class="col"><input type="text" name="m3"></div>
    <div class="col"><input type="text" name="m4"></div>
    <div class="col"><input type="text" name="m5"></div>

    <div class="col">Tuesday</div>
    <div class="col"><input type="text" name="t1"></div>
    <div class="col"><input type="text" name="t2"></div>
    <div class="col"><input type="text" name="t3"></div>
    <div class="col"><input type="text" name="t4"></div>
    <div class="col"><input type="text" name="t5"></div>
    
    <div class="col">Wednesday</div>
    <div class="col"><input type="text" name="w1"></div>
    <div class="col"><input type="text" name="w2"></div>
    <div class="col"><input type="text" name="w3"></div>
    <div class="col"><input type="text" name="w4"></div>
    <div class="col"><input type="text" name="w5"></div>

    <div class="col">Thursday</div>
    <div class="col"><input type="text" name="th1"></div>
    <div class="col"><input type="text" name="th2"></div>
    <div class="col"><input type="text" name="th3"></div>
    <div class="col"><input type="text" name="th4"></div>
    <div class="col"><input type="text" name="th5"></div>
    
    <div class="col">Friday</div>
    <div class="col"><input type="text" name="f1"></div>
    <div class="col"><input type="text" name="f2"></div>
    <div class="col"><input type="text" name="f3"></div>
    <div class="col"><input type="text" name="f4"></div>
    <div class="col"><input type="text" name="f5"></div>
    
    
    
    

  </div>
</div>
<button type="submit" name="ttsubmit" class="btn btn-secondary btn-lg">Submit</button>
    <!-- End Example Code -->
</from>
  </body>
</html>