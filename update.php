<?php
include('config/db.php');

$id=$_GET['id'];
$sql="SELECT * FROM users where id=$id";
$res=mysqli_query($conn,$sql);
$user=mysqli_fetch_assoc($res);

if(isset($_POST['update']))
{
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $email= $_POST['email'];
    $phone_no=$_POST['phone_no'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $year_of_study=$_POST['year_of_study'];


$sql="UPDATE `users` SET `f_name`='$fname',`l_name`='$lname',`m_name`='$mname',`email`='$email',`phone_no`='$phone_no',`gender`='$gender',`address`='$address',`year_of_study`='$year_of_study' where id='$id'";

$res=mysqli_query($conn,$sql);

if($res)
{
    // echo "updated successfully";
    header('location:user.php');
}
else{
    echo "error";
}
}
?>


<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">
    <!-- Counter - Alerts -->
    <span class="badge badge-danger badge-counter">3+</span>
    </a>
    <div class="jumbotron">
        <h1 class="text-center"> UPDATE FORM</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 offset-md-3 col-sm-12">

                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
                            <form action="" method="post"></form>
                            First Name:<input type="text" name="fname" value=<?php echo $user['f_name']?>><br><br>

                            Last Name:<input type="text" name="lname" value=<?php echo $user['l_name']?>><br><br>

                            Middle Name:<br><input type="text" name="mname"
                            value=<?php echo $user['m_name']?>><br><br>

                            E-mail: <input type="text" name="email" value=<?php echo $user['email']?>><br><br>


                            Phone Number: <input type="text" name="phone_no"
                                value=<?php echo $user['phone_no']?>><br><br>

                            Gender: <input type="radio" name="gender" value="male"
                                <?php echo  $user['gender']=="male" ? "checked" : "" ?>>Male
                            <input type="radio" name="gender" value="female"
                                <?php echo  $user['gender']=="female" ? "checked" : ""?>>Female<br><br>

                            Address: <br><input type="text" name="address"
                            value=<?php echo $user['address']?>><br><br>

                            Year Of Study: <br><input type="text" name="year_of_study"
                            value=<?php echo $user['year_of_study']?>><br><br>

                            <input type="submit" value="update" name="update" class="btn btn-dark btn-block">

                            </form>

                        </div>
                    </div>
                </div>
                </body>

                </html>

                <?php
$content=ob_get_clean();
include_once __DIR__.'/layout/app_layout2.php';

?>