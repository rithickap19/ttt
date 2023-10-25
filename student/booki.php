

 <?php
 require 'connection.php';

if(!empty($_SESSION["id"])){
    $id=$_SESSION['id'];
    
}
else echo "No";
if (isset($_GET['column'])) {
    $columnName = $_GET['column'];
    
} else {
    $columnName = "Column Not Specified";
}


if(isset($_GET['date'])){
    $date = $_GET['date'];
}
$sid= $_SESSION['id'];
$tid=$_SESSION["tid"];
echo $sid;
echo $tid;

if(isset($_POST['submit'])){
    $period = $_POST['period'];
   
    $reason = $_POST['reason'];
    $mysqli = new mysqli('localhost', 'root', '', 'ttt');
    $stmt = $mysqli->prepare("INSERT INTO booking (sid,reason,period,tid) VALUES (?,?,?,?)");
    $stmt->bind_param('issi', $sid,$reason,$period,$tid);
    $stmt->execute();
    $_SESSION['success_message'] = 'Booking has been successfully completed!';
    header("Location:student.php");
    $stmt->close();
    $mysqli->close();
}

?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
  </head>

  <body>
    <div class="container">
        
        <h1 class="text-center">Book for<?php echo date('l'); ?></h1><hr>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
               <?php echo isset($msg)?$msg:''; ?>
               <form action="" method="post" autocomplete="off">
               
                <form action="" method="post" autocomplete="off">
                <div class="form-group">
                <label form="">Period</label>
                <input type="text"  value='<?php echo $columnName?>' class="form-control"  name="period">
                </div>
                   
                    <div class="form-group">
                        <label for="">Reason</label>
                        <input type="text" class="form-control" name="reason">
                    </div>
                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>

</html>
