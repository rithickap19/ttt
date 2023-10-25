<?php
session_start();
$db= mysqli_connect("localhost","root","","ttt");

if(!$db){
    die('Connection failed'. mysqli_connect);
}
?>