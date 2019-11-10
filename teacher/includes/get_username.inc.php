<?php

    require 'connect.inc.php';

    echo '
     <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                             <img src="images/icon/avat.png" alt="profile photo" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">';

    $user = $_SESSION['userUid'];
    echo $user;

    echo '</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avat.png" alt="profile photo" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">';
    $userLevel = $_SESSION['userLevel'];
    echo $userLevel;
                                        echo '</a>
                                                    </h5>
                                                    <span class="email">';
    $email = $_SESSION['emailUsers'];
    echo $email;
                                               echo '</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="../index.php?logout=true">
                                                    <i class="zmdi zmdi-power"></i>';
                                               echo 'Logout';
                                               if(isset($_GET['logout'])) {
                                                   header("Location: index.php");
                                               }
                                               echo'</a>
                                            </div>
                                        </div>
                                    </div>
    ';