<?php
$title= 'index';
include('config/db.php');


ob_start();
?>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <div class="card text-white bg-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
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

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-md-6">
            <div class="card text-white bg-success  mb-3 h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                Status
                                <?php
                                $sql = "SELECT status FROM users where status=1";
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
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- Earnings (Monthly) Card Example -->
        <div class="col-md-6">
            <div class="card text-white bg-dark shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Tasks
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-light-800">50%
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-md-6">
            <div class="card text-white bg-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
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
include_once __DIR__ . '/layout/app_layout2.php';
?>