<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!--========== BOX ICONS ==========-->

    <link rel="stylesheet" href="../view/assets/css/boxicons.min.css">

    <!--========== Bootstrap ==========-->

    <link rel="stylesheet" href="../view/assets/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />


    <!--========== CSS ==========-->

    <link rel="stylesheet" href="../view/assets/css/main.css">

    <!--========== Icons title ==========-->

    <link rel="icon" href="../view/assets/img/icons8-film-reel-50.png">

    <title>Movietime</title>
</head>
<?php


?>

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

                <br />
                <div class="nav__dropdown">
                    <a href="?action=search" class="nav__link">
                        <i class='bx bx-search'></i>
                        <span class="nav__name"> Search</span>
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




        <section class="movie-grid">
            <h1 class="text-secondary">
                <!--code PHP for change between the genre-->
            </h1>


            <!-- movies grid -->
            <?php
            include('../modele/conect.php');
            $con = conect();
            $sql = 'SELECT * FROM movies_tv';
            $tab = $con->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            foreach ($tab  as $row) {

            ?>

                <form action="" method="post">
                    <div class="card bg-dark rounded row" style="width: 12rem;">

                        <a href="../view/movie.php"> <img src="../view/image/<?= $row['image'] ?>" alt=""> </a>
                        <div class="card-body">
                            <a href="view/movie.php?$_POST['idMovies']">
                                <h3 class="card-text fs-5"><?= $row['title'] ?></h3>
                            </a>
                            <span class="card-text .text-secondary"><?= $row['type'] ?></span>
                            <span class="card-text .text-secondary"><?= $row['time'] ?></span>

                            <a href="#"><button type="button" class="btn btn-primary"><i class='bx bx-plus'></i>Addlist</button></a>
                            <a href=""><button type="button" class="btn btn-light"> <i class='bx bx-play'></i>Trailer</button></a>
                        </div>





                    </div>
                <?php
            }
                ?>


                </form>









    </main>
    <link rel="stylesheet" href="view/assets/css/main.css">


    <!-- STRAT FOOTER -->
    <div class="container">
        <div class="cellphone-container">
            <div class="movie">
                <div class="menu"><i class="material-icons"></i></div>
                <div class="movie-img"></div>
                <div class="text-movie-cont">
                    <div class="mr-grid">
                        <div class="col1">
                            <h1>Interstellar</h1>
                            <ul class="movie-gen">
                                <li>PG-13 /</li>
                                <li>2h 49min /</li>
                                <li>Adventure, Drama, Sci-Fi,</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mr-grid summary-row">
                        <div class="col2">
                            <h5>SUMMARY</h5>
                        </div>
                        <div class="col2">
                            <ul class="movie-likes">
                                <li><i class="material-icons">&#xE813;</i>124</li>
                                <li><i class="material-icons">&#xE813;</i>3</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mr-grid">
                        <div class="col1">
                            <p class="movie-description">A group of elderly people are giving interviews about having lived in a climate of crop blight and constant dust reminiscent of The Great
                                Depression of the 1930's. The first one seen is an elderly woman stating her father was a farmer, but did not start out that way. </p>
                        </div>
                    </div>
                    <div class="mr-grid actors-row">
                        <div class="col1">
                            <p class="movie-actors">Matthew McConaughey, Anne Hathaway, Jessica Chastain</p>
                        </div>
                    </div>
                    <div class="mr-grid action-row">
                        <div class="col2">
                            <div class="watch-btn">
                                <h3><i class="material-icons">&#xE037;</i>WATCH TRAILER</h3>
                            </div>
                        </div>
                        <div class="col6 action-btn"><i class="material-icons">&#xE161;</i>
                        </div>
                        <div class="col6 action-btn"><i class="material-icons">&#xE866;</i>
                        </div>
                        <div class="col6 action-btn"><i class="material-icons">&#xE80D;</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="https://dribbble.com/geehm" target="_blank">
        <img class="dribbble-link" src="https://image.flaticon.com/icons/png/512/124/124037.png">
    </a>

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

            <form class="modal-content animate" method="post">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <h1 class="fon">Envoyez votre demande </h1>
                    <p>Si votre film/émission n'est pas répertorié dans notre bibliothèque, vous pouvez soumettre votre demande ici, nous essaierons de la rendre disponible dès que possible ! </p>
                </div>

                <div class="container">
                    <label for="uname"><b>Email</b></label>
                    <input type="text" style=" color : whitesmoke; " placeholder="Votre email" name="uname" required>

                    <label for="title"><b>Titre</b></label>
                    <input type="text" style=" color : whitesmoke; " placeholder="Entrez le nom de votre film/émission" name="title" required>

                    <label for="des"><b>Description</b></label>
                    <input type="text" style=" color : whitesmoke; " placeholder="Lien IMDB si possible" name="des">

                    <button class="blr" type="submit" name="login">Send Request </button>



                </div>



            </form>

        </div>



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