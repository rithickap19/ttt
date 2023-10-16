<?php
session_start();
$conn= mysqli_connect("localhost","root","","ttt");

if(!$conn){
    die('Connection failed'. mysqli_connect);
}
?>