<?php
require '../vendor/autoload.php';
require '../config/db.php';
$title='';

ob_start();

?>

<div class="col-md-10">
    <div class="row">
            <div class="card">
                <div class="card-header">user</div>
                <div class="card-body">
                    <form action="form.php" method="POST">

                        ID:<br><input type="text" name="id"><br><br>

                        First Name:<br><input type="text" name="fname"><br><br>
                        
                        Middle Name:<br><input type="text" name="mname"><br><br>
                        
                        Last Name:<br><input type="text" name="lname"><br><br>

                        Email-Id: <input type="email" class="form-control" placholder="name@gmail.com" name="email"><br>

                        Password:<br><input type="text" class="from-control" name="pass">
                        <div class="form-text"> password must contain 5 digits</div><br>
                                              
                        Role_ID: <br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role_id" id="student" value="1">
                        <label class="form-check-label" for="student">
                            Student
                        </label>
                    </div>
                       
                        date of birth: <br><input type="text" name="dob"><br><br>

                        Gender: <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female<br><br>

                        Address: <br><input type="text" name="address"><br><br>

                        Phone Number: <br><input type="text" name="phone_no"><br><br>
                        
                        Year Of Study: <br><input type="text" name="year_of_study"><br><br>

                        Agree to Term of Services:
                        <input type="checkbox" name="agree" required><br><br>
                        <input type="submit" value="submit" class="btn btn-primary btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</body>

</html>
<?php
$content=ob_get_clean();
include_once __DIR__.'/../layout/app_layout2.php';

?>