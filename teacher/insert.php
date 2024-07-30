<?php
require 'config/db.php';

    $id = $_POST['id'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $email= $_POST['email'];
   $pass = password_hash($_POST['pass'],  
   PASSWORD_DEFAULT); 
   $role_id=$_POST['role_id'];
   $dob=$_POST['dob'];
   $gender=$_POST['gender'];
   $address=$_POST['address'];
   $phone_no=$_POST['phone_no'];
   $year_of_study=$_POST['year_of_study'];
    

$sql="INSERT INTO users
       VALUES ('','$fname','$mname','$lname','$email','$pass','$role_id','$dob','$gender','$address','$phone_no','$year_of_study')";

 if($conn->query($sql)===TRUE)
 {
    header('location:admin/user.php');
 }
 else{
    echo "something went wrong";
 }
 
?>