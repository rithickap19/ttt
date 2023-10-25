<?php
    session_start();
    require '../../dbcon.php';
  
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Class Timetable</title>
</head>
<body>
  
    <div class="container mt-4">

        

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Class Timetable 
                        <a href="ctimetable.php" class="btn btn-primary float-end">Add </a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Cid</th>
                                    <th>Class</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM ctimetable";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $teacher)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $teacher['id']; ?></td>
                                                <td><?= $teacher['classid']; ?></td>
                                                <td><?= $teacher['cname']; ?></td>
                                                
                                                                                              <td>
                                                <!-- <a href="ctimetable.php?id=<?= $teacher['classid']; ?>" class="btn btn-success btn-sm">New</a> -->
                                                    <a href="cttview.php?id=<?= $teacher['classid']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="cttedit.php?id=<?= $teacher['classid']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
