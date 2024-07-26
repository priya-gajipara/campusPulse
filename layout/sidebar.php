

<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                <a class="nav-link" href="index.php">
                    <div class="sb-nav-link-icon"></div>
                    Dashboard
                </a>
                <a class="nav-link" href="user.php">
                    <div class="sb-nav-link-icon"></div>
                    User
                </a>
                <a class="nav-link" href="trial2.php">
                    <div class="sb-nav-link-icon"></div>
                    Form
                </a>

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >Pages</a>
                <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="page.php">Login</a></li>
                    <li><a class="dropdown-item" href="register.php">Register</a></li>
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
                    ?>
                </div>
                
    </nav>
</div>
