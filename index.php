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
            <h2>e-diary.com</h2>

        </section>
        <section class="login">
            <div class="login-dark" id="login-sect">
            <form method="post" action="includes/login.inc.php">
                <h2>Zaloguj się</h2>
                <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                <div class="form-group"><input class="form-control" type="text" name="mailuid" placeholder="Email/username"></div>
                <div class="form-group"><input class="form-control" type="password" name="pwd" placeholder="Password"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" name="login-submit" type="submit">Log In</button></div>
            </form>
        </div>
           

        </section>

        <!-- Page Content -->
        <section class="page-content">
            <div style="clear: both" class="container about-product">
                <h2 class="font-weight-light">E-Diary dla rodziców
                By budować dobre relacje i owocną współpracę</h2>
                  <!--   Korzystanie z dziennika elektronicznego UONET+ umożliwia rodzicom:
                    <ul>
                        <li>szybką i wygodną komunikację ze szkołą,</li>
                        <li>łatwy wgląd w bieżące dane dotyczące dziecka,</li>
                        <li>aktywne wspieranie dzieci w codziennej edukacji,</li>
                        <li>przygotowanie się do rozmowy z nauczycielami.</li>
                    </ul>
               <img alt="img"class="students-image"src="img/student2.png"/></p> -->


               <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pellentesque felis vitae quam commodo porta. 
                   Aenean maximus, sapien vitae euismod cursus, turpis nunc tincidunt massa, eget scelerisque lectus mauris eu mauris. 
                    Nullam volutpat lacus vestibulum tellus sollicitudin, id lacinia turpis laoreet.
                    <img alt="img"class="students-image"src="img/student2.png"/></p> -->

                    <p><img src="img/student2.png" alt="students">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, 
                    nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. 
                    Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet.
                     Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus 
                     interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. 
                     In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis.
                    </p>
            </div>
        </section>

        

<?php
    require "footer.php";
?>