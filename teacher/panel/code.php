<?php

require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($conn, $_POST['delete_student']);

    $query = "DELETE FROM booking WHERE id='$student_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
       
        header("Location: appointments.php");
        exit(0);
    }
}
?>