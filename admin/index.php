<?php
$title= 'Index';
include '../config/db.php';


ob_start();
?>
<div class="col-md-12">
    <div class="row">
        <!-- TOTAL USER -->
    <div class="col-md-6">
            <div class="card text-white bg-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-light text-uppercase mb-1">
                            Total User
                                <?php
                                    $sql = "SELECT * FROM users";
                                    $result = mysqli_query($conn,$sql);

                                    if($total=mysqli_num_rows($result))
                                    {
                                     echo'<h5 class=" mb-0 font-weight-bold text-gray-800">'.$total.'</h5>';

                                    }
                                   else
                                    {
                                         echo'<h5 class=" mb-0 font-weight-bold text-gray-800">no data</h5>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TOTAL ADMIN -->
        <div class="col-md-6">
            <div class="card text-white bg-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                Total Admin
                                <?php
                                $sql = "SELECT * FROM users where role_id=1";
                                $que=mysqli_query($conn,$sql);
                                if($tot=mysqli_num_rows($que))
                                {
                                    echo'<h5 class="h5 mb-0 font-weight-bold text-gray-800">'.$tot.'</h5>';
                                }
                                else
                                {
                                    echo'<h5 class="h5 mb-0 font-weight-bold text-gray-800">no data</h5>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TOTAL TEACHERS -->
        <div class="col-md-6">
            <div class="card text-white bg-dark shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Total Teachers
                                <?php
                                $sql = "SELECT * FROM users where role_id=2";
                                $que=mysqli_query($conn,$sql);
                                if($tot=mysqli_num_rows($que))
                                {
                                    echo'<h5 class="h5 mb-0 font-weight-bold text-gray-800">'.$tot.'</h5>';
                                }
                                else
                                {
                                    echo'<h5 class="h5 mb-0 font-weight-bold text-gray-800">no data</h5>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TOTAL STUDENTS -->
        <div class="col-md-6">
            <div class="card text-white bg-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                            Total Students
                                <?php
                                    $sql = "SELECT * FROM users where role_id=3";
                                    $que=mysqli_query($conn,$sql);
                                    if($tot=mysqli_num_rows($que))
                                    {
                                    echo'<h5 class="h5 mb-0 font-weight-bold text-gray-800">'.$tot.'</h5>';
                                    }
                                    else
                                    {
                                    echo'<h5 class="h5 mb-0 font-weight-bold text-gray-800">no data</h5>';   
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /.container-fluid -->

</div>

<?php

$content = ob_get_clean();
include_once __DIR__ . '/../layout/app_layout2.php';
?>