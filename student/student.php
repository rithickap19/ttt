<?php
require 'connection.php';
if(!empty($_SESSION["id"])){
    $id=$_SESSION['id'];
    $result=mysqli_query($conn,"SELECT * FROM students WHERE rollno =$id ");
    $row=mysqli_fetch_assoc($result);
    $msg = "<div class='alert alert-success'>Booking Successfull</div>";
}
else
echo "No";
if (isset($_SESSION['success_message'])) {
  echo '<div class="message" style="color: green;">' . $_SESSION['success_message'] . '</div>';
  // Clear the success message from the session after 3 seconds
  echo '<script>
          setTimeout(function() {
              document.querySelector(".message").style.display = "none";
          }, 3000);
        </script>';
  unset($_SESSION['success_message']);
}


?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Student Panel</title>
    <!-- <style>
        .message {
            display: none;
        }
    </style> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
  </head>
  
  <style>
        body{
  
  font-family: 'Open Sans', sans-serif;
  background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
}
</style>

  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    <form class="" action="" method="">
      
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="search.php">Search</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="supdate.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
          <span class="navbar-text">
          <h3> Hii ! <?php echo $row['name']; ?></h3>

          </span>
        </div>
      </div>
    </nav>
    
</form>
  </body>
</html>