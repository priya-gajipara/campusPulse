<?php
session_start();
require '../config/db.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $id1 = $_POST['id1'];

    $qry = "Update classes set id=$id, name='$name' where id=$id1;";

    if (mysqli_query($con, $qry)) {
        header("location:classes.php");
    }
}