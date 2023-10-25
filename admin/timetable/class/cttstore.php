<?php
require '../../dbcon.php';

if(isset($_POST['ttsubmit'])){
    $id=$_POST['sid'];
    $m1=mysqli_real_escape_string($con,$_POST['m1']);
    $m2=mysqli_real_escape_string($con,$_POST['m2']);
    $m3=mysqli_real_escape_string($con,$_POST['m3']);
    $m4=mysqli_real_escape_string($con,$_POST['m4']);
    $m5=mysqli_real_escape_string($con,$_POST['m5']);

    $t1=mysqli_real_escape_string($con,$_POST['t1']);
    $t2=mysqli_real_escape_string($con,$_POST['t2']);
    $t3=mysqli_real_escape_string($con,$_POST['t3']);
    $t4=mysqli_real_escape_string($con,$_POST['t4']);
    $t5=mysqli_real_escape_string($con,$_POST['t5']);

    $w1=mysqli_real_escape_string($con,$_POST['w1']);
    $w2=mysqli_real_escape_string($con,$_POST['w2']);
    $w3=mysqli_real_escape_string($con,$_POST['w3']);
    $w4=mysqli_real_escape_string($con,$_POST['w4']);
    $w5=mysqli_real_escape_string($con,$_POST['w5']);

    $th1=mysqli_real_escape_string($con,$_POST['th1']);
    $th2=mysqli_real_escape_string($con,$_POST['th2']);
    $th3=mysqli_real_escape_string($con,$_POST['th3']);
    $th4=mysqli_real_escape_string($con,$_POST['th4']);
    $th5=mysqli_real_escape_string($con,$_POST['th5']);

    $f1=mysqli_real_escape_string($con,$_POST['f1']);
    $f2=mysqli_real_escape_string($con,$_POST['f2']);
    $f3=mysqli_real_escape_string($con,$_POST['f3']);
    $f4=mysqli_real_escape_string($con,$_POST['f4']);
    $f5=mysqli_real_escape_string($con,$_POST['f5']);
    $sid=mysqli_real_escape_string($con,$_POST['sid']);
    $cname=mysqli_real_escape_string($con,$_POST['cname']);




    $stmt=$con->prepare("INSERT INTO ctimetable (cname,classid,mp1,mp2,mp3,mp4,mp5,tp1,tp2,tp3,tp4,tp5,wp1,wp2,wp3,wp4,wp5,thp1,thp2,thp3,thp4,thp5,fp1,fp2,fp3,fp4,fp5) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt   ->bind_param("sisssssssssssssssssssssssss",$cname,$id,$m1,$m2,$m3,$m4,$m5,$t1,$t2,$t3,$t4,$t5,$w1,$w2,$w3,$w4,$w5,$th1,$th2,$th3,$th4,$th5,$f1,$f2,$f3,$f4,$f5);
    $stmt   ->execute();

header("location: classindex.php");
$stmt->close();

$con->close();

}

?>



