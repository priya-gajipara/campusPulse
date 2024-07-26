<?php
// include('show.php');

require 'config/db.php';

// if(!isset($_SESSION['id']))
// {
//     header('location:page.php');
//     exit;
// }


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
    

$sql="INSERT INTO users(`ID`, `f_name`,`m_name`, `l_name`, `email`, `password`,`role_id`,`dob`, `gender`,`address`, `phone_no`,`year_of_study`)
       VALUES ('$id','$fname','$mname','$lname','$email','$pass','$role_id','$dob','$gender','$address','$phone_no','$year_of_study')";
//  echo $sql;
 if($conn->query($sql)===TRUE)
 {
 //  echo"added to the database";
    header('location:user.php');
 }
 else{
    echo "something went wrong";
 }

 


// echo "ID : $id<br>";
// echo "First Name : $fname<br>";
// echo "Last Name : $lname<br>";
// echo "Email-ID : $email<br>";
// echo "Password : $pass<br>";
// echo "Gender : $gender<br>";
// echo "Phone Number: $phone_no<br>"; 
?>