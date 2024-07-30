<?php
ob_start();
session_start();
require 'config/db.php';
$email = $_POST['email'];
$password = $_POST['pass'];

$qry = "SELECT * from users where email='$email';";
$result = mysqli_query($conn, $qry);
$total = mysqli_num_rows($result);

if ($total == 1) {
    $row = mysqli_fetch_array($result);
    $hashpass = $row['password'];
    $_SESSION['fname']=$row['f_name'];
    $_SESSION['role_id']=$row['role_id'];
    $_SESSION['id']=$row['ID'];
    $verify = password_verify($password, $hashpass);

    if($verify)
   { 
    if ($_SESSION['role_id'] == 1) {
        header('location:student/index.php');
    }
    if ($_SESSION['role_id'] == 2) {
        header('location:teacher/index.php');
    }
    if ($_SESSION['role_id'] == 3) {
        header('location:admin/index.php');
    }

    } else {
        echo '<script>console.log("successfull")</script>';
        $_SESSION["error"] = "Invalid password";
        header('location:login_page.php');

    }

}
 else {
    $_SESSION["error"] = "Invalid email";
    header('location:login_page.php');
}
?>
