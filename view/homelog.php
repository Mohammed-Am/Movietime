<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!--========== BOX ICONS ==========-->

    <link rel="stylesheet" href="view/assets/css/boxicons.min.css">

    <!--========== CSS ==========-->




    <title>Movietime</title>
    <link rel="icon" href="view/assets/img/icons8-film-reel-50.png">

</head>

<link rel="stylesheet" href="view/assets/css/bootstrap.min.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />


<link rel="stylesheet" href="view/assets/css/main.css">

<body>
    <!--========== HEADER ==========-->
    <header class="header">
        <div class="header__container">


            <div class="header__login">
                <a href="?action=logout" name="logout"> <i class='bx bx-log-out '></i> <input onclick="document.getElementById('id01').style.display='block'" class="btn" type="button" value="Logout" /></a>
            </div>
            <!-- Login form -->
            <div id="id01" class="modal">

                <form class="modal-content animate" action="" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <h1>Sign In</h1>
                    </div>



                    <h5>Don't have an account? <a href=""> Sign up here!</a> </h5>

                </form>

            </div>

            <!-- Resister form -->
            <div id="id02" class="modal">

                <form class="modal-content animate" action="" method="post">
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




            <a href="?action=auth" class="header__logo">Movie<span class="col">time</span> </a>



            <div class="header__toggle">
                <i class="fa-solid fa-bars" id="header-toggle"></i>

            </div>
        </div>
    </header>
    <!--========== NAV ==========-->
    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="?action=auth" class="nav__link nav__logo">
                    <i class='fa-solid fa-compact-disc nav__icon'></i>
                    <span class="nav__logo-name">Movie<span class="col">time</span></span>
                </a>

                <div class="nav__list">
                    <div class="nav__items">
                        <h3 class="nav__subtitle">Découvrir</h3>


                        <div class="nav__dropdown">
                            <a href="?action=film" class="nav__link">
                                <i class='bx bx-camera-movie nav__icon'></i>
                                <span class="nav__name">Films</span>
                                <!-- <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i> -->
                            </a>


                        </div>

                        <div class="nav__dropdown">
                            <a href="?action=serie" class="nav__link">
                                <i class='bx bx-tv nav__icon'></i>
                                <span class="nav__name">TV-Series</span>
                            </a>
                        </div>

                        <div class="nav__dropdown">
                            <a href="#" class="nav__link">
                                <i class='bx bx-category-alt nav__icon'></i>
                                <span class="nav__name">Genre</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>


                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="?action=animation" class="nav__dropdown-item">Animation </a>
                                    <a href="?action=documentary" class="nav__dropdown-item">Documentary</a>
                                    <a href="?action=action" class="nav__dropdown-item">Action</a>
                                    <a href="?action=history" class="nav__dropdown-item">History </a>
                                    <a href="?action=war" class="nav__dropdown-item">War</a>
                                    <a href="?action=comedy" class="nav__dropdown-item">Comedy</a>
                                    <a href="?action=horror" class="nav__dropdown-item">Horror</a>
                                    <a href="?action=biographyy" class="nav__dropdown-item">Biographyy </a>
                                    <a href="?action=family" class="nav__dropdown-item">Family</a>
                                    <a href="?action=adventure" class="nav__dropdown-item">Adventure</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="nav__dropdown">
                        <a href="?action=acteur" class="nav__link">
                            <i class='bx bx-face nav__icon'></i>
                            <span class="nav__name">Acteurs</span>
                        </a>


                    </div>


                </div>

                <br>
                <div class="nav__dropdown">
                    <a href="?action=search" class="nav__link">
                        <i class='bx bx-search-alt'> </i>
                        <span class="nav__name">Search</span>
                    </a>
                </div>

                <br>

                <div class="nav__items">
                    <h3 class="nav__subtitle">Manage</h3>

                    <a href="?action=watchlist" class="nav__link">
                        <i class='bx bx-bookmark nav__icon'></i>
                        <span class="nav__name">Watchlist</span>
                    </a>
                </div>
            </div>

            <a href="#" class="nav__link nav__logout">
                <i class='bx bx-cog nav__icon'></i>
                <span class="nav__name">Customize</span>
            </a>

        </nav>
    </div>

    <!--========== CONTENTS ==========-->
    <main>

        <section class="banner ">


            <div class="banner-card">
                <div id="carousel-slider" class="carousel slide carousel-fade " data-ride="carousel" data-interval="20000">
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
                    <div class="carousel-inner " role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">

                            <img class="d-block w-100" src="view/image/enjoy.JPG" alt="First slide">

                            <div class="content5 ">
                                <h1>Bienvenue,
                                    <h4 class=" m-4">Des Profitez de regarder films, émissions télévisées et artistes...</h4>
                                </h1>
                            </div>
                        </div>

                        <!--/First slide-->
                        <!--Second slide-->
                        <div class="carousel-item">

                            <img class="d-block w-100" src="view/image/Luck.jpg" alt="First slide">

                            <div class="content5">
                                <h1>Luck (2022)</h1>
                                <h3 class="text-light">‘Sometimes all you need is for everything to go wrong’</h3>
                                <!-- Use a button to pause/play the video with JavaScript -->
                                <button id="myBtn" onclick="document.getElementById('id01').style.display='block'"><i class='bx bxs-bookmark  bx-xs'></i>Watchlist</button>
                            </div>

                        </div>

                        <!--/Second slide-->
                        <!--Third slide-->
                        <div class="carousel-item ">

                            <img class="d-block w-100" src="view/image/theman.JPG" alt="First slide">

                            <div class="content5">
                                <h1>The Man from Toronto (2022)</h1>
                                <h3 class="text-light">‘Hitman meets dead man’</h3>

                                <button id="myBtn" onclick="document.getElementById('id01').style.display='block'"><i class='bx bxs-bookmark  bx-xs'></i>Watchlist</button>
                            </div>
                        </div>
                        <!--/Third slide-->
                        <!--Forth slide-->
                        <div class="carousel-item">
                            <img class="d-block w-100" src="view/image/black.jpg" alt="First slide">

                            <div class="content5">
                                <h1>The Black Phone (2022)</h1>
                                <h3 class="text-light">‘Never talk to strangers’</h3>

                                <!-- Use a button to pause/play the video with JavaScript -->
                                <button id="myBtn" onclick="document.getElementById('id01').style.display='block'"><i class='bx bxs-bookmark  bx-xs'></i>Watchlist</button>
                            </div>
                        </div>
                        <!--/Forth slide-->
                        <!--Third slide-->
                        <div class="carousel-item">

                            <img class="d-block  w-100" src="view/image/spy.jpg" alt="First slide">

                            <div class="content5">
                                <h1>SPY x FAMILY (2022)</h1>
                                <p>Master spy Twilight is the best at what he does when it comes to going undercover on dangerous missions in the name of a better world.</p>
                                <!-- Use a button to pause/play the video with JavaScript -->
                                <button id="myBtn" onclick="document.getElementById('id01').style.display='block'"><i class='bx bxs-bookmark  bx-xs'></i>Watchlist</button>
                            </div>
                        </div>
                        <!--/Third slide-->
                        <!--Forth slide-->
                        <div class="carousel-item">

                            <img class="d-block w-100" src="view/image/hustle.jpg" alt="First slide">

                            <div class="content5">
                                <h1>Hustle (2022) </h1>
                                <h3 class="text-light">‘It’s you against you out there’</h3>
                                <!-- Use a button to pause/play the video with JavaScript -->
                                <button id="myBtn" onclick="document.getElementById('id01').style.display='block'"><i class='bx bxs-bookmark  bx-xs'></i>Watchlist</button>
                            </div>
                        </div>
                        <!--/Forth slide-->
                    </div>
                </div>
            </div>





        </section>

        <div class="container mx-auto ">
            <h4 class="font-weight-light text-secondary">Populaires</h4>
            <!-- movies grid -->
            <form action="?action=playList" method="post" style="display:grid;
                                grid-row:1 ;
                                grid-template-columns: repeat(auto-fill,minmax(140px, 1fr));
                                gap:40px;
                                margin-bottom:10px;">
                <?php
                // echo "<h1>" . $_SESSION['idUser'] . "</h1>";
                $con = conect();
                $sql = 'SELECT * FROM movies_tv';
                $tab = $con->query($sql)->fetchAll();
                foreach ($tab  as $row) {

                ?>
                    <div class="card  rounded  row" class="col-md-4" style="width: 13rem; margin-top:38px; background-color:#1A1A1A;">
                        <a href="view/movie.php?id=<?= $row['idMovies'] ?>"> <img src="view/image/<?= $row['image'] ?>" alt=""> </a>
                        <div class="card-body">
                            <a href="view/movie.php?$_POST['idMovies']">
                                <h3 class="card-text fs-5"><?= $row['title'] ?></h3>
                            </a>
                            <span class="card-text .text-secondary"><?= $row['type'] ?></span>
                            <span class="card-text .text-secondary"><?= $row['time'] ?></span>
                            <a href="?action=insert&id=<?= $row['idMovies'] ?>"><button type="button" style="color-background:#515151;"><i class='bx bxs-bookmark'></i>Watchlist</button></a>
                            <a href=""><button type="button" class="btn d-flex justify-content-center"> <i class='bx bx-play'></i>Trailer</button></a>
                        </div>
                    </div>

                <?php
                }

                ?>
            </form>

    </main>
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



    <!-- END FOOTER -->


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

                    <a href=""><button class="blr" type="submit" name="sub">Send Request </button></a>
                </div>

            </form>

        </div>



        <!-- END FOOTER -->


        <!--========== MAIN JS ==========-->


        <script>
            // Get the modal
            var modal1 = document.getElementById('id01');
            var modal2 = document.getElementById('id02');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal1) {
                    modal1.style.display = "none";

                }

                if (event.target == modal2) {
                    modal2.style.display = "none";

                }
            }
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>



</body>

</html>