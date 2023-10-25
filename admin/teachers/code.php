<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_teacher']))
{
    $teacher_id = mysqli_real_escape_string($con, $_POST['delete_teacher']);

    $query = "DELETE FROM teachers WHERE id='$teacher_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "teacher Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "teacher Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_teacher']))
{
    $teacher_id = mysqli_real_escape_string($con, $_POST['teacher_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "UPDATE teachers SET name='$name', email='$email', phone='$phone', course='$course' WHERE id='$teacher_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "teacher Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "teacher Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_teacher']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $rollno = mysqli_real_escape_string($con, $_POST['roll']);
    $class = mysqli_real_escape_string($con, $_POST['class']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    

    $query = "INSERT INTO `teacher`(`id`, `name`, `email`, `phone`, `sid`, `dept`, `password`) VALUES ('','$name','$email','$phone','$$rollno','$class','$password')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "teacher Created Successfully";
        header("Location: teacher-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "teacher Not Created";
        header("Location: teacher-create.php");
        exit(0);
    }
}

?>