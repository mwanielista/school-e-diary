<?php
    session_start();
    require 'head.php';
?>

<div class="page-wrapper">
    
    

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
<!--                <img src="images/icon/logo.png" alt="Cool Admin" />-->
                <h1>e-diary</h1>
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                    <li>
                        <a href="marks.php">
                            <i class="fas fa-calendar-alt"></i>Oceny</a>
                    </li>
                    <li>
                        <a href="projects.php">
                            <i class="fas fa-map-marker-alt"></i>Projekty</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
         <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">

                        </form>
                        <div class="header-button">
                            <div class="account-wrap">
                               <!-- USER ACCOUNT NAME-->
                                <?php
                                    require 'includes/get_username.inc.php';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">

                <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <?php
                                                        $id = $_SESSION['userId'];
                                                        $select ="Select oceny.przedmiot, oceny.ocena,oceny.uczen, users.uidUsers from oceny INNER JOIN users WHERE oceny.uczen=$id AND oceny.uczen=users.idUsers";
                                                        $query = mysqli_query($conn, $select);

                                                        while($row = mysqli_fetch_array($query)){
                                                            echo '<tr><td>'.$row['przedmiot'].'</td><td>'.$row['ocena'].'</td></tr>';
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                    
                   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2019 wanielista.eu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>

</div>

<?php
    require 'footer_pages.php'
?>