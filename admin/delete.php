<?php
require '../config/db.php';


if(isset($_GET['id']))
{
    $id=$_GET['id'];

    $sql="DELETE FROM `users` WHERE id=$id";
    $res=mysqli_query($conn,$sql);

        if($res)
        {
            // echo "deleted successfully";
            header('location:user.php');
        }
        else
        {
            echo "error";
        }
}
?>