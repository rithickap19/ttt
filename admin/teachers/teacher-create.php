<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Teacher Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Teacher Add 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Teacher Name</label>
                                <input type="text" require name="name"  class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Teacher Email</label>
                                <input type="email"  require name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Teacher Phone</label>
                                <input type="text" require name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Staff ID</label>
                                <input type="text" require name="sid" class="form-control">
                            </div>
                            
                            <div class="mb-3">
                                <label>Class</label>
                                <input type="text" require name="class" class="form-control">
                            </div>
                                                                                  
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="text" require name="password" class="form-control">
                            </div>
                            
                            <div class="mb-3">
                                <button type="submit" name="save_teacher" class="btn btn-primary">Save teacher</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>