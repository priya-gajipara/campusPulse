<?php
session_start();
require '../config/db.php';
ob_start();
$sql="SELECT * FROM users where role_id=1";
$res=mysqli_query($conn,$sql);

if(isset($_POST['submit']))
{
    
    $date=$_POST['date'];
    $data=$_POST['status'];
     foreach($data as $stud_id=>$status)
     {
        $sql="INSERT INTO attendance values('','$stud_id','$status','$date')";
        $res=mysqli_query($conn,$sql);
     }
}
if($res)
{
    header('location:attendence.php');
}

?>