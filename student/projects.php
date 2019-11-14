
<?php
require 'head.php';
require 'includes/connect.inc.php';
session_start();


?>
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER MOBILE-->

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
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Zarządzanie</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="#">Frekwencja</a>
                            </li>
                            <li>
                                <a href="#">Oceny</a>
                            </li>
                            <li>
                                <a href="#">Projekty</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Uczniowie</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="student_add.php">Dodaj ucznia</a>
                            </li>
                            <li>
                                <a href="student_manage.php">Zarządzaj uczniami</a>
                            </li>
                            <li>
                                <a href="student_classes.php">Klasy</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-calendar-alt"></i>Twój plan lekcji</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-map-marker-alt"></i>O aplikacji</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

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
                            <div class="noti-wrap">

                                <div class="noti__item js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <span class="quantity">3</span>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a email notification</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c2 img-cir img-40">
                                                <i class="zmdi zmdi-account-box"></i>
                                            </div>
                                            <div class="content">
                                                <p>Your account has been blocked</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c3 img-cir img-40">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a new file</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__footer">
                                            <a href="#">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                    <h1>Dostępne projekty:</h1>
                    <div class="table-data__tool">
                            <div class="table-data__tool-left">
                            </div>
                            <div class="table-data__tool-right">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <a href="project_add.php"><i class="zmdi zmdi-plus"></i>Dodaj Projekt</a></button>   //zmienić kolor

                            </div>
                        </div>
                    <?php
                        $quest = "select * from projekty";
                        $query = mysqli_query($conn, $quest);
                    ?>
                       
                       <table style="text-align: left"class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Nazwa projektu</th>
                                                <th>Max uczestników</th>
                                                <th>Nauczyciel prowadzący</th>
                                                <th>Akcje</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                                <?php
                                                    while($row = mysqli_fetch_array($query)){
                                                        echo '<tr><td>'.$row['nazwa_projektu'].'</td>';
                                                        echo '<td>'.$row['max_uczestnikow'].'</td>';
                                                        echo '<td>'.$row['nazwa_nauczyciela'].'</td>';
                                                        echo '<td>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Usuń" data-original-title="Edit">
                                                            <i class="fa fa-minus-square"></i>
                                                        </button>
                                                        </td></tr>';
                                                    }
                                                ?>
                                           
                                        </tbody>
                                    </table>


                    <hr>
                    <h1>Uczniowie do zatwierdzenia</h1>
                    <?php
                        $select = "Select projekty.nazwa_nauczyciela, projekty.nazwa_projektu as nazwa,projekty_uczestnicy.id_uczestnika,users.uidUsers as username from projekty INNER JOIN projekty_uczestnicy,users WHERE projekty.id_projektu=projekty_uczestnicy.id_projektu AND projekty_uczestnicy.id_uczestnika=users.idUsers AND projekty_uczestnicy.status LIKE 'not checked'";            
                        $query = mysqli_query($conn, $select);
                    ?>
                       <table style="text-align: left"class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Nazwa projektu</th>
                                                <th>Nazwa użytkownika</th>
                                                <th>Nauczyciel prowadzący</th>
                                                <th>Akcje</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                                while($row = mysqli_fetch_array($query)){
                                                    echo '<tr><td>'.$row['nazwa'].'</td>';
                                                    echo '<td>'.$row['username'].'</td>';
                                                    echo '<td>'.$row['nazwa_nauczyciela'].'</td>';
                                                    echo '<td>
                                                    <form method="POST" action="includes/accept_user.inc.php">
                                                        <button type="submit"class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                        <i value="'.$row['id_uczestnika'].'"name="accept_btn">-</i>
                                                        </button>
                                                    </form>
                                                    <form method="POST" action="includes/accept_user.inc.php">
                                                        <button type="submit"class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                        <i class="">+</i>
                                                        </button>
                                                    </form>                                                    </td></tr>';
                                                }
    
                                            ?>  
                                        </tbody>
                                    </table>


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
    require 'footer_pages.php';
?>