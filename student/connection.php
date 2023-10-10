<?php
$conn=new mysqli('localhost','root','','ttt') ; 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if($conn->connect_error)
{
    die('Connection failed:' .$conn->connect_error);
}
?>