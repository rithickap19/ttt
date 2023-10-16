<?php
$sid=$_POST['id'];
$mp1=$_POST['mp1'];
$mp2=$_POST['mp2'];
$mp3=$_POST['mp3'];
$mp4=$_POST['mp4'];
$mp5=$_POST['mp5'];
$mp6=$_POST['mp6'];
$tp1=$_POST['tp1'];
$tp2=$_POST['tp2'];
$tp3=$_POST['tp3'];
$tp4=$_POST['tp4'];
$tp5=$_POST['tp5'];
$tp6=$_POST['tp6'];
$wp1=$_POST['wp1'];
$wp2=$_POST['wp2'];
$wp3=$_POST['wp3'];
$wp4=$_POST['wp4'];
$wp5=$_POST['wp5'];
$wp6=$_POST['wp6'];
$thp1=$_POST['thp1'];
$thp2=$_POST['thp2'];
$thp3=$_POST['thp3'];
$thp4=$_POST['thp4'];
$thp5=$_POST['thp5'];
$thp6=$_POST['thp6'];
$fp1=$_POST['fp1'];
$fp2=$_POST['fp2'];
$fp3=$_POST['fp3'];
$fp4=$_POST['fp4'];
$fp5=$_POST['fp5'];
$fp6=$_POST['fp6'];



$conn=new mysqli('localhost','root','','ttt') ; 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
// SQL query to check user credentials
$stmt=$conn->prepare("insert into timetable(staffid,mp1,mp2,mp3,mp4,mp5,mp6,tp1,tp2,tp3,tp4,tp5,tp6,wp1,wp2,wp3,wp4,wp5,wp6,thp1,thp2,thp3,thp4,thp5,thp6,fp1,fp2,fp3,fp4,fp5,fp6) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt   ->bind_param("issssssssssssssssssssssssssssss",$sid,$mp1,$mp2,$mp3,$mp4,$mp5,$mp6,$tp1,$tp2,$tp3,$tp4,$tp5,$tp6,$wp1,$wp2,$wp3,$wp4,$wp5,$wp6,$thp1,$thp2,$thp3,$thp4,$thp5,$thp6,$fp1,$fp2,$fp3,$fp4,$fp5,$fp6);
$stmt   ->execute();
header("location: teacher.html");
$stmt->close();
$conn->close();
}   
?>