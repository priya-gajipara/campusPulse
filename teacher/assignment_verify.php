<?php
session_start();
ob_start();
require '../vendor/autoload.php';
require '../config/db.php';
if (!isset($_SESSION['id']) || $_SESSION['role_id'] != 2) {
    header('location: ../login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $teacher_id = $_SESSION['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $due_date = $_POST['due_date'];
    $max_marks = $_POST['max_marks'];

    $qry = "INSERT INTO assignment (user_id, title, description, due_date, max_marks) VALUES ('$teacher_id', '$title', '$description', '$due_date', '$max_marks')";
    mysqli_query($conn, $qry);
    header('location:assignment.php');
}



?>