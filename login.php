<?php
ob_start();
session_start();
require 'config/db.php';
$email = $_POST['email'];
$password = $_POST['pass'];
$fname=$_POST['fname'];




$qry = "SELECT * from users where email='$email';";
$result = mysqli_query($conn, $qry);
$total = mysqli_num_rows($result);

if ($total == 1) {
    $row = mysqli_fetch_array($result);
    $hashpass = $row['password'];
    $_SESSION['fname']=$row['f_name'];
    $verify = password_verify($password, $hashpass);

    if ($verify) {

        // echo "<script>console.log('successfull')</script>";
        $_SESSION['email']=$email;
        header('location:index.php');
    } else {
        // echo "<script>console.log('unsuccessfull')</script>";
        $_SESSION["error"] = "Invalid password";
        header('location:page.php');

    }

}
 else {
    // echo "<script>console.log('unsuccessfull')</script>";
    $_SESSION["error"] = "Invalid email";
    header('location:page.php');
}
?>
