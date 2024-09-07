<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!--========== BOX ICONS ==========-->

    <link rel="stylesheet" href="view/assets/css/boxicons.min.css">

    <!--========== Bootstrap ==========-->

    <link rel="stylesheet" href="view/assets/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />


    <!--========== CSS ==========-->

    <link rel="stylesheet" href="view/assets/css/main.css">

    <!--========== Icons title ==========-->

    <link rel="icon" href="view/assets/img/icons8-film-reel-50.png">

    <title>Movietime</title>




</head>




<?php


?>

<body>
    <!--========== HEADER ==========-->
    <header class="header">
        <div class="header__container">


            <div class="header__login">
                <input onclick="document.getElementById('id02').style.display='block'" class="header_btn" type="button" value="Register" />
                <input onclick="document.getElementById('id01').style.display='block'" class="header_btn" name="login" type="button" value="Login" />
            </div>
            <!-- Login form -->
            <div id="id01" class="modal">

                <form class="modal-content animate" action="?action=auth" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <h1>Sign In</h1>
                    </div>

                    <div class="container">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" style=" color : whitesmoke; " name="uname" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" style=" color : whitesmoke; " name="psw" required>

                        <button class="blr" type="submit" name="login">Login</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                        <span class="psw"><a href="#"> Forgot password?</a></span>
                    </div>

                    <h5>Don't have an account? <a href=""> Sign up here!</a> </h5>

                </form>

            </div>

            <!-- Resister form -->
            <div id="id02" class="modal">

                <form class="modal-content animate" action="?action=addUser" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <h1>Create account</h1>
                    </div>

                    <div class="container">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" style=" color : whitesmoke; " name="uname" required>

                        <label for="psw"><b>Email</b></label>
                        <input type="email" style=" color : whitesmoke; " name="email" required>

                        <label for="psw"><b>Password </b></label>
                        <input type="password" style=" color : whitesmoke; " placeholder="at least 8 charcters" name="psw" required>

                        <label for="psw"><b>Password Confirm</b></label>
                        <input type="password" style=" color : whitesmoke; " name="psw1" required>



                        <button class="blr" type="submit" name="regist">Sign Up</button>

                    </div>



                </form>
            </div>




            <a href="index.php" class="header__logo">Movie<span class="col">time</span> </a>



            <div class="header__toggle">
                <i class="fa-solid fa-bars" id="header-toggle"></i>

            </div>
        </div>
    </header>
    <!--========== NAV ==========-->
    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="#" onclick="document.getElementById('id01').style.display='block'" class="nav__link nav__logo">
                    <i class='fa-solid fa-compact-disc nav__icon'></i>
                    <span class="nav__logo-name">Movie<span class="col">time</span></span>
                </a>

                <div class="nav__list">
                    <div class="nav__items">
                        <h3 class="nav__subtitle">Découvrir</h3>


                        <div class="nav__dropdown">
                            <a href="#" onclick="document.getElementById('id01').style.display='block'" class="nav__link">
                                <i class='bx bx-camera-movie nav__icon'></i>
                                <span class="nav__name">Films</span>
                                <!-- <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i> -->
                            </a>


                        </div>

                        <div class="nav__dropdown">
                            <a href="#" onclick="document.getElementById('id01').style.display='block'" class="nav__link">
                                <i class='bx bx-tv nav__icon'></i>
                                <span class="nav__name">TV-Series</span>
                            </a>
                        </div>

                        <div class="nav__dropdown">
                            <a href="#" onclick="document.getElementById('id01').style.display='block'" class="nav__link">
                                <i class='bx bx-category-alt nav__icon'></i>
                                <span class="nav__name">Genre</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>


                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="#" onclick="document.getElementById('id01').style.display='block'" class="nav__dropdown-item">Animation </a>
                                    <a href="#" onclick="document.getElementById('id01').style.display='block'" class="nav__dropdown-item">Documentary</a>
                                    <a href="#" onclick="document.getElementById('id01').style.display='block'" class="nav__dropdown-item">Action</a>
                                    <a href="#" onclick="document.getElementById('id01').style.display='block'" class="nav__dropdown-item">History </a>
                                    <a href="#" onclick="document.getElementById('id01').style.display='block'" class="nav__dropdown-item">War</a>
                                    <a href="#" onclick="document.getElementById('id01').style.display='block'" class="nav__dropdown-item">Comedy</a>
                                    <a href="#" onclick="document.getElementById('id01').style.display='block'" class="nav__dropdown-item">Horror</a>
                                    <a href="#" onclick="document.getElementById('id01').style.display='block'" class="nav__dropdown-item">Biographyy </a>
                                    <a href="#" onclick="document.getElementById('id01').style.display='block'" class="nav__dropdown-item">Family</a>
                                    <a href="#" onclick="document.getElementById('id01').style.display='block'" class="nav__dropdown-item">Adventure</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="nav__dropdown">
                        <a href="#" onclick="document.getElementById('id01').style.display='block'" class="nav__link">
                            <i class='bx bx-face nav__icon'></i>
                            <span class="nav__name">Acteurs</span>
                        </a>


                    </div>


                </div>




            </div>
    </div>



    </nav>
    </div>

    <!--========== CONTENTS ==========-->
    <main>



        <section class="banner">


            <div class="banner-card">
                <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="20000">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-slider" data-slide-to="1"></li>
                        <li data-target="#carousel-slider" data-slide-to="2"></li>
                        <li data-target="#carousel-slider" data-slide-to="3"></li>
                        <li data-target="#carousel-slider" data-slide-to="4"></li>
                        <li data-target="#carousel-slider" data-slide-to="5"></li>
                    </ol>
                    <!--Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">
                            <video autoplay muted id="myVideo">
                                <source src="view/assets/img/videoplayback (1).webm" type="video/mp4">
                            </video>
                            <div class="content5">
                                <h1>Guillermo Del Toro’s Pinocchio</h1>
                                <p>Movies Based on Books</p>
                                <!-- Use a button to pause/play the video with JavaScript -->

                                <button id="myBtn" onclick="document.getElementById('id01').style.display='block'"><i class='bx bx-bookmark bx-xs'></i>Watchlist</button>
                            </div>
                        </div>

                        <!--/First slide-->
                        <!--Second slide-->
                        <div class="carousel-item">
                            <video autoplay muted>
                                <source src="view/assets/img/trip.webm" type="video/mp4">
                            </video>
                            <div class="content5">
                                <h1>The Ritual</h1>
                                <p>Four friends with a long-standing -- but strained -- connection take a hiking trip into the Swedish wilderness, from which they may never return.</p>
                                <!-- Use a button to pause/play the video with JavaScript -->
                                <button id="myBtn" onclick="document.getElementById('id01').style.display='block'"><i class='bx bx-bookmark bx-xs'></i>Watchlist</button>
                            </div>
                        </div>
                        <!--/Second slide-->
                        <!--Third slide-->
                        <div class="carousel-item">
                            <video autoplay muted>
                                <source src="view/assets/img/man-on-fire.webm" type="video/mp4">
                            </video>
                            <div class="content5">
                                <h1>Man on Fire </h1>
                                <p>A jaded ex-CIA operative reluctantly accepts a job as the bodyguard for a 10-year-old girl in Mexico City and will stop at nothing when she's kidnapped.</p>
                                <!-- Use a button to pause/play the video with JavaScript -->
                                <button onclick="document.getElementById('id01').style.display='block'"><i class='bx bx-bookmark bx-xs'></i>Watchlist</button>
                            </div>
                        </div>
                        <!--/Third slide-->
                        <!--Forth slide-->
                        <div class="carousel-item">
                            <video autoplay muted>
                                <source src="view/assets/img/relt.webm" type="video/mp4">
                            </video>
                            <div class="content5">
                                <h1>The Revenant</h1>
                                <p>In the 1820s, a fur trapper struggles for survival to exact retribution against a ruthless mercenary who left him to die along the Missouri River.</p>
                                <!-- Use a button to pause/play the video with JavaScript -->
                                <button id="myBtn" onclick="document.getElementById('id01').style.display='block'"><i class='bx bx-bookmark bx-xs'></i>Watchlist</button>
                            </div>
                        </div>
                        <!--/Forth slide-->
                        <!--Third slide-->
                        <div class="carousel-item">
                            <video autoplay muted>
                                <source src="view/assets/img/sew.webm" type="video/mp4">
                            </video>
                            <div class="content5">
                                <h1>Snowden</h1>
                                <p>The NSA's illegal surveillance techniques are leaked to the public by one of the agency's employees, Edward Snowden, in the form of thousands of classified documents distributed to the press.</p>
                                <!-- Use a button to pause/play the video with JavaScript -->
                                <button id="myBtn" onclick="document.getElementById('id01').style.display='block'"><i class='bx bx-bookmark bx-xs'></i>Watchlist</button>
                            </div>
                        </div>
                        <!--/Third slide-->
                        <!--Forth slide-->
                        <div class="carousel-item">
                            <video autoplay muted>
                                <source src="view/assets/img/videoplayback (2).webm" type="video/mp4">
                            </video>
                            <div class="content5">
                                <h1>Turning Red </h1>
                                <p>Lorem ipsum...</p>
                                <!-- Use a button to pause/play the video with JavaScript -->
                                <button id="myBtn" onclick="document.getElementById('id01').style.display='block'"><i class='bx bx-bookmark bx-xs'></i>Watchlist</button>
                            </div>
                        </div>
                        <!--/Forth slide-->
                    </div>
                </div>
            </div>




        </section>



        <div class="container mx-auto ">

            <h4 class="font-weight-light text-secondary">Recommended</h4>

            <!-- movies grid -->
            <?php
            $con = conect();
            $sql = 'SELECT * FROM movies_tv';
            $tab = $con->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            foreach ($tab  as $row) {

            ?>


                <form action="" method="post" style="display:grid;
                                grid-row:1 ;
                                grid-template-columns: repeat(auto-fill,minmax(140px, 1fr));
                                gap:40px;
                                margin-bottom:10px;">
                    <div class="card  rounded  row" class="col-md-4" style="width: 13rem; margin-top:38px; background-color:#1A1A1A;">

                        <a href="#" onclick="document.getElementById('id01').style.display='block'"> <img src="view/image/<?= $row['image'] ?>" alt="" style="hight=80%"> </a>
                        <div class="card-body ">

                            <span class="circle-icon text-secondary"><i class='bx bxs-star bx-sm  nav__icon' style="color: gold ;"></i><span style="font-size: 20px ; font-weight: bold;"><?= $row['vote'] ?></span>
                                <a href="#">
                                    <p class="card-text fs-7 text-light "><?= $row['title'] ?></p>
                                </a>


                                <a href="#"><button type="button" style="color-background:#515151;"><i class='bx bx-plus'></i> Watchlist</button></a>
                                <a href=""><button type="button" class="btn d-flex justify-content-center"> <i class='bx bx-play'></i>Trailer</button></a>
                        </div>





                    </div>
                <?php
            }
                ?>


                </form>



        </div>








    </main>
    <link rel="stylesheet" href="view/assets/css/main.css">


    <!-- STRAT FOOTER -->

    <div class="footer">
        <div class="container_footer">
            <span class="logo-footr">Movie<span class="lg-span">time</span></span>
            <p>Movietime est une base de données en ligne d'informations qui propose une grande variété d'émissions de télévision, de films, d'animes, de documentaires et bien plus encore sur des milliers d'appareils connectés à Internet.</p>



            <div class="links">
                <a href="#" onclick="document.getElementById('id03').style.display='block'" class="req">Demande</a>
                <a href="#" class="req">About Us</a>
                <a href="#" class="req">Privacy</a>


                <div class="social-icons">

                    <a class="icon" href="#"><i class='bx bxl-twitter bx-sm' style="color: #00acc1;"></i> Connect with us on twitter</a>

                </div>
            </div>








        </div>

    </div>



    <div class="header__container">


        <!-- Request form -->
        <div id="id03" class="modal">

            <form class="modal-content animate" action="?action=sendD" method="post">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <h1 class="fon">Envoyez votre demande </h1>
                    <p>Si votre film/émission n'est pas répertorié dans notre bibliothèque, vous pouvez soumettre votre demande ici, nous essaierons de la rendre disponible dès que possible ! </p>
                </div>

                <div class="container">
                    <label for="uname"><b>Email :</b></label>
                    <input type="text" style=" color : whitesmoke; " placeholder="Votre email" name="email" required>

                    <label for="title"><b>Titre :</b></label>
                    <input type="text" style=" color : whitesmoke; " placeholder="Entrez le nom de votre film/émission" name="title" required>

                    <label for="des"><b>Lien IMDB :</b></label>
                    <input type="text" style=" color : whitesmoke; " placeholder="Lien IMDB si possible" name="url">

                    <button class="blr" type="submit" name="sub">Send Request </button>
                </div>

            </form>

        </div>

        <!-- END FOOTER -->


        <!--========== MAIN JS ==========-->


        <script>
            // Get the modal
            var modal1 = document.getElementById('id01');
            var modal2 = document.getElementById('id02');
            var modal3 = document.getElementById('id03');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal1) {
                    modal1.style.display = "none";

                }

                if (event.target == modal2) {
                    modal2.style.display = "none";

                }
                if (event.target == modal3) {
                    modal3.style.display = "none";

                }
            }
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>



</body>

</html>