<?php
session_start();
require_once '../vendor/autoload.php';
require '../config/db.php';
ob_start();
if (isset($_POST['submit'])) {
    $department_id = $_POST['department_id	'];   
    $name = $_POST['name'];   
    $qry = "INSERT INTO classes values('','$department_id','$name','$status');";
    if (mysqli_query($conn, $qry)) {
        header('location:classes.php?id=$department_id');
    }
}

$content = ob_get_clean();
include __DIR__ . 'layout/app_layout2.php'
?>