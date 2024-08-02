<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="index.php">
                    <div class="sb-nav-link-icon"></div>
                    Dashboard
                </a>
                <?php if($_SESSION['role_id']>1)
                {?>
                <a class="nav-link" href="user.php">
                    <div class="sb-nav-link-icon"></div>
                    User
                </a>
                <?php
            }?>
                <?php if($_SESSION['role_id']==1)
                {?>
                <a class="nav-link" href="personal_info.php">
                    <div class="sb-nav-link-icon"></div>
                    Personal Info
                </a>
                <?php
            }?>
               
                <?php if($_SESSION['role_id']==1)
                {?>
                <a class="nav-link" href="attendence_view.php">
                    <div class="sb-nav-link-icon"></div>
                    View Attendence
                </a>
                <?php
            }?>
            <?php if($_SESSION['role_id']==1)
                {?>
                <a class="nav-link" href="submit_assign.php">
                    <div class="sb-nav-link-icon"></div>
                     Submit Assignment
                </a>
                <?php
            }?>

                <?php if($_SESSION['role_id']==2)
                {?>
                <a class="nav-link" href="attendence.php">
                    <div class="sb-nav-link-icon"></div>
                    Attendence
                </a>
                <?php
            }?>
                <?php if($_SESSION['role_id']==2)
                {?>
                <a class="nav-link" href="assignment.php">
                    <div class="sb-nav-link-icon"></div>
                    Assignment
                </a>
                <?php
            }?>

            <?php if($_SESSION['role_id']==2)
            {?>
            <a class="nav-link" href="grade_assignment.php">
                <div class="sb-nav-link-icon"></div>
                Assignment Grade
            </a>
            <?php
        }?>
            <?php if($_SESSION['role_id']==3)
            {?>
            <a class="nav-link" href="department.php">
                <div class="sb-nav-link-icon"></div>
                Department
            </a>
            <?php
        }?>
            <?php if($_SESSION['role_id']==3)
            {?>
            <a class="nav-link" href="classes.php">
                <div class="sb-nav-link-icon"></div>
                Class
            </a>
            <?php
        }?>
                <a class="nav-link" href="../login_page.php">
                    <div class="sb-nav-link-icon"></div>
                    Log-In
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?php 
                     if(isset($_SESSION['fname']))
                     {
                        echo $_SESSION['fname'];
                     }
                     if($_SESSION['role_id']==1)
                     {
                        echo "(student)";
                     }
                     if($_SESSION['role_id']==2)
                     {
                        echo "(teacher)";
                     }
                     if($_SESSION['role_id']==3)
                     {
                        echo "(admin)";
                     }
                    ?>
        </div>

    </nav>
</div>