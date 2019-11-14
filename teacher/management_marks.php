<?php
session_start();
require 'head.php';
require 'includes/connect.inc.php'
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
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Zarządzanie</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="management_frequency.php">Frekwencja</a>
                            </li>
                            <li>
                                <a href="management_marks.php">Oceny</a>
                            </li>
                            <li>
                                <a href="management_projects.php">Projekty</a>
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
                        <div class="table-data__tool">
                            <h1>Oceny:</h1>
                            <div class="table-data__tool-left">
                            </div>
                            <div class="table-data__tool-right">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <a href="mark_add.php"><i class="zmdi zmdi-plus"></i>Dodaj ocenę</a></button>

                            </div>
                        </div>
                        <?php

                            $quest = "select * from classes";
                            $query = mysqli_query($conn, $quest);
                            echo'<form class="select" method="POST">';
                            echo '<h4>Wybierz klasę</h4>';
                            echo '<select name="select_class">';
                            while($row = mysqli_fetch_array($query)){
                                echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                            }
                            echo "</select>";
                            echo'<input type="submit" class="au-btn" name="sbm_class">';
                            echo '</form>';
                            $klasa = null;
                            if(isset($_POST['sbm_class'])){
                                $class = $_POST['select_class'];
                                $quest_users = "select * from users where class like '$class'";
                                $query = mysqli_query($conn, $quest_users);
                                echo'<form class="select" method="POST">';
                                echo '<h4>Wybierz ucznia</h4>';
                                echo '<select name="select_user">';
                                while($row = mysqli_fetch_array($query)){
                                    echo '<option value="'.$row['idUsers'].'">'.$row['uidUsers'].'</option>';
                                }
                                echo "</select>";

                                echo '<h4>Wybierz przedmiot:</h4>';
                                echo '<select name="select_subject">';
                                $quest_subject = "select * from przedmioty";
                                $query2 = mysqli_query($conn, $quest_subject);
                                while($row2 = mysqli_fetch_array($query2)){
                                    echo '<option value="'.$row2['name'].'">'.$row2['name'].'</option>';
                                }
                                echo "</select>";
                                echo'<input type="submit" class="au-btn" name="show_marks">';
                                echo '</form>';
                            }

                            if(isset($_POST['show_marks'])){
                                echo '<style>.select{visibility: hidden}</style>';
                                $user = $_POST['select_user'];
                                $select_username = "select * from users where idUsers like $user";
                                $query_username = mysqli_query($conn, $select_username);
                                while($row = mysqli_fetch_array($query_username)){
                                    $username = $row['uidUsers'];
                                }
                                $subject = $_POST['select_subject'];
                                echo '<h4>Wybrano użytkownika <b> '.$username . '</b> i przedmiot <b>'. $klasa.'</b></h4>';
                                $select_marks = "select * from oceny where uczen = $user and przedmiot = '$subject'";
                                $query_marks = mysqli_query($conn, $select_marks);
                                if(!$query_marks){
                                    echo"nie masz ocen";
                                }

                                echo '<div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>';

                                while($row = mysqli_fetch_array($query_marks)){
                                    echo ' <tr>
                                                <td>'.$row['ocena'].'</td>
                                                <td class="text-right">'.$row['przedmiot'].'</td>
                                           </tr>';
                                }
                                echo '</tbody></table></div></div></div>';
                            }
                        ?>
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