
<?php
require 'head.php';
require 'includes/connect.inc.php';
session_start();


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
                    <h1>Dodaj ucznia:</h1>
                    <div class="card">
                        <div class="card-header">Aby dodać ucznia poprawnie wypełnij wszystkie pola</div>
                            <div class="card-body card-block">
                                <form  method="post">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">Imię i nazwisko</div>
                                            <input type="text" id="username3" name="username" class="form-control">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">Klasa</div>
                                            <select name="class" class="form-control">
                                                <?php
                                                    $classes = "select * from classes";
                                                    $query = mysqli_query($conn,$classes);

                                                    while($row = mysqli_fetch_array($query)){
                                                        echo '<option value="'.$row['name'].'">'. $row['name'].'</option>';
                                                    }

                                                ?>
                                            </select>
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">Email</div>
                                            <input type="email" id="email3" name="email" class="form-control">
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">Hasło</div>
                                            <input type="password" id="password3" name="password" class="form-control">
                                            <div class="input-group-addon">
                                                <i class="fa fa-asterisk"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions form-group">
                                        <button type="submit" name="submit" class="btn btn-primary btn-sm">Dodaj</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php
                        if(isset($_POST['submit'])) {
                            $name = $_POST['username'];
                            $pwd = $_POST['password'];
                            $mail = $_POST['email'];
                            $class = $_POST['class'];

                            if(empty($name) || empty($pwd) || empty($mail)){
                                echo "Nie wypełniłeś wszystkich pól";
                            } else {
                                $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

                                $quest = "insert into users values(null, '$name', '$mail', '$hashedPwd', 'student', '$class') ";
                                $query = mysqli_query($conn, $quest);
                                if(!$query) {
                                    echo "Error";
                                }else {
                                   echo "Pomyślnie dodano użytkownika $name , $mail";
                                }
                            }

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
    require 'footer_pages.php';
?>