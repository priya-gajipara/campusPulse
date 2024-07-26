<?php
require 'vendor/autoload.php';
include('config/db.php');

if(isset($_GET['id']) && isset($_GET['status']))

{
$id=$_GET['id'];
$status=$_GET['status'];   
$sql="UPDATE users set status=$status where id=$id";

$res=mysqli_query($conn,$sql);

if($res)
{
    header('location:user.php');
}
else{
    echo "error";
}

}
?>