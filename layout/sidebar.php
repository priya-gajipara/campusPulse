

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
                    Personal
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

            <?php if($_SESSION['role_id']==2)
                {?>
                <a class="nav-link" href="attendence.php">
                    <div class="sb-nav-link-icon"></div>
                    Attendence
                </a>
                <?php
            }?>

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >Pages</a>
                <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../login_page.php">Login</a></li>
                    <li><a class="dropdown-item" href="../register.php">Register</a></li>
                </ul>
            </li>
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
