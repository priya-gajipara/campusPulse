<?php
session_start();
require_once '../vendor/autoload.php';
require '../config/db.php';
ob_start();
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $qry = "INSERT INTO department values($id,'$name');";
    if (mysqli_query($conn, $qry)) {
        header('location:department.php');
    }
}

$content = ob_get_clean();
include __DIR__ . 'layout/app_layout2.php'
?>