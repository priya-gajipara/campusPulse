<?php
require '../config/db.php';
if(isset($_GET['id']))
{
    $id=$_GET['id'];

    $sql="DELETE FROM `department` WHERE id=$id";
    $res=mysqli_query($conn,$sql);

        if($res)
        {
            header('location:department.php');
        }
        else
        {
            echo "error";
        }
}
?>