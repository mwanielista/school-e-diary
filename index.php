<?php
    require "header.php";
?>
        <div id="black">
            <div class="masthead">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                        <div class="col-12 text-center">
                        <h1 class="font-weight-light">Witryna dla rodziców i uczniów</h1>
                            <p class="lead">Wszyscy rodzice i uczniowie otrzymują bezpłatny dostęp do e-dziennika</p>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
        <section class="break">
            <h2>Want's more? Check my other projects</h2>

        </section>
        <section class="login">
            <div class="login-dark">
            <form method="post">
                <h2>Zaloguj się</h2>
                <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email/username"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a href="#" class="forgot">Forgot your email or password?</a>
            </form>
        </div>
           

        </section>

        <!-- Page Content -->
        <section class="py-5">
        <div class="container">
            <h2 class="font-weight-light">E-Diary dla rodziców
            By budować dobre relacje i owocną współpracę</h2>
                Korzystanie z dziennika elektronicznego UONET+ umożliwia rodzicom:
                <ul>
                    <li>szybką i wygodną komunikację ze szkołą,</li>
                    <li>łatwy wgląd w bieżące dane dotyczące dziecka,</li>
                    <li>aktywne wspieranie dzieci w codziennej edukacji,</li>
                    <li>przygotowanie się do rozmowy z nauczycielami.</li>
                </ul>
        </div>
        </section>


       <!--login box -->
        <div id="loginBox" class="modal">
            <h5 class="modal-close">&#10005;</h5>
            <div class="modal-content center">
                <h4>Login</h4>
                <br>
                <form action="includes/login.inc.php" method="POST">
                    <div class="input-field">
                        <i class="material-icons prefix">person</i>
                        <input type="text" name="mailuid" id="name">
                        <label for="name">Username</label>
                    </div>
                    <br>
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <input type="password" name="pwd" id="pass">
                        <label for="pass">Password</label>
                    </div><br>
                    <button type="submit" name="login-submit" class="btn btn-large">Login</button>
                </form>
            </div>
        </div>

        <!--logout box -->
        <div id="lgout" class="modal">
            <h5 class="modal-close">&#10005;</h5>
            <?php
                if(isset($_SESSION['userId'])) {
                        echo '
                        <div class="modal-content center">
                            <h4>Na pewno chcesz się wylogować?</h4>
                            <br>
                            <form action="includes/logout.inc.php" method="POST">   
                                <button type="submit" name="logout-submit" class="btn btn-large">logout</button>
                            </form>
                        </div>
                        ';
                    } else{
                        echo '
                        <div class="modal-content center">
                            <h4>Nie jesteś zalogowany, nie możesz się wylogować</h4>
                            <br>
                        </div>
                        ';
                    }
             ?>
        </div>
        <script>
            $(document).ready(function(){
            $('.modal').modal();
        });
        </script>

<?php
    require "footer.php";
?>