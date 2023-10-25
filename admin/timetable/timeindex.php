<?php
    session_start();
    require '../dbcon.php';
    if(isset($_POST['delete_teacher']))
{
    $teacher_id = mysqli_real_escape_string($con, $_POST['delete_teacher']);

    $query = "DELETE FROM teacher WHERE id='$teacher_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "teacher Deleted Successfully";
        header("Location: timeindex.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "teacher Not Deleted";
        header("Location: timeindex.php");
        exit(0);
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Teacher CRUD</title>
</head>
<body>
  
    <div class="container mt-4">

        

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Teachers TimeTable
                        <a href="timetable.php" class="btn btn-primary float-end">Add </a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Teacher Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Department</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM teacher";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $teacher)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $teacher['id']; ?></td>
                                                <td><?= $teacher['name']; ?></td>
                                                <td><?= $teacher['email']; ?></td>
                                                <td><?= $teacher['phone']; ?></td>
                                                <td><?= $teacher['dept']; ?></td>
                                                <td>
                                                <!-- <a href="timetable.php?id=<?= $teacher['sid']; ?>" class="btn btn-success btn-sm">Add</a> -->
                                                    <a href="ttview.php?id=<?= $teacher['sid']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="ttedit.php?id=<?= $teacher['sid']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    
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
