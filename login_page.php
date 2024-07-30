<?php
$title= 'index';
include('config/db.php');


ob_start();
?>


<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card-header bg-primary">
                                <h3 class="text-center  font-weight-light my-4">Login</h3>
                            </div>
                            <div class="card-body ">
                                <form action="login_verify.php" method="POST">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" type="email" name="email"
                                            placeholder="name@example.com" />
                                        <label for="inputEmail">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="password" type="password" name="pass"
                                            placeholder="Password" />
                                        <label for="inputPassword">Password</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" id="inputRememberPassword" type="checkbox"
                                            value="" />
                                        <label class="form-check-label" for="inputRememberPassword">Remember
                                            Password</label>
                                    </div>



                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                                        <h6> <?php
                                         if(isset($_SESSION['error'])){echo $_SESSION['error'];}
                                        ?></h6>
                                    </div>


                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="password.php">Forgot Password?</a>
                                        <input type="submit" class="btn btn-primary " value="log-in" name="login">
                                    </div>


                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                            </div>

                           
                        </div>
                    </div>
                </div>
        </div>
        </main>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>




<?php

$content = ob_get_clean();
// Include layout
include_once __DIR__ . '/layout/guest_layout.php';
?>