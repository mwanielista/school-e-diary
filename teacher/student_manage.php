
    <?php
        require 'head.php';
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
                        <h1>Uczniowie:</h1>
                        <!-- DATA TABLE -->
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                            </div>
                            <div class="table-data__tool-right">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <a href="student_add.php"><i class="zmdi zmdi-plus"></i>Dodaj ucznia</button></a>   //zmienić kolor

                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                <tr>
                                    <th>
                                        <label class="au-checkbox">
                                            <input type="checkbox">
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </th>
                                    <th>nazwa</th>
                                    <th>email</th>
                                    <th>class</th>

                                    <th>status</th>
                                    <th></th>

                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                require 'includes/connect.inc.php';
                                $quest = "select * from users where userLevel like 'student'";
                                $query = mysqli_query($conn, $quest);
                                while ($row = mysqli_fetch_array($query)) {
                                  echo '
                                      <tr class="tr-shadow">
                                        <td>
                                            <label class="au-checkbox">
                                                <input type="checkbox" value="'.
                                      $row['idUsers'].
                                      '">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </td>
                                        <td>'.
                                      $row['uidUsers'].
                                      '</td>
                                        <td>
                                            <span class="block-email">'.
                                      $row['emailUsers'].
                                      '</span>
                                        </td>
                                        <td class="desc">'.
                                      $row['class'].
                                      '</td>
                                        
                                        <td>
                                            <span class="status--process">'.
                                      $row['userLevel'].
                                      '</span>
                                        </td>
                                       
                                        <td>
                                            <div class="table-data-feature">
                                            <form method="POST">
                                                <button value="'.$row['idUsers'].'"class="item" name="delete_btn" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                            </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
                                  ';
                                }

                                if(isset($_POST['delete_btn'])){
                                    $value = $_POST['delete_btn'];
                                    $delete_quest = "delete from users where idUsers like '$value'";
                                    $query = mysqli_query($conn, $delete_quest);
                                    if($query){
                                        echo"udało się ";
                                    } else {
                                        echo "kicha";
                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE -->

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

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

    </body>

    </html>
    <!-- end document-->

    </body>
</html>