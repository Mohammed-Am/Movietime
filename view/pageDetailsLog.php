<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== BOX ICONS ==========-->

    <link rel="stylesheet" href="view/assets/css/boxicons.min.css">

    <!--========== CSS ==========-->
    <!--==========  Bootstrp 5 ==========-->
    <link rel="stylesheet" href="view/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/assets/css/main.css">
    <link rel="stylesheet" href="view/assets/css/mstyle.css">
    <title></title>
</head>

<body>

    <!--========== HEADER ==========-->
    <header class="header">
        <div class="header__container">
            <div class="header__login " id="id01">
                <a href="?action=logout" name="logout"> <i class='bx bx-log-out '></i> <input onclick="document.getElementById('id01').style.display='block'" class="btn" type="button" value="Logout" /></a>
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
                        <input type="text" name="uname" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" name="psw" required>

                        <button class="blr" type="submit">Login</button>
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

                <form class="modal-content animate" action="" method="">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <h1>Create account</h1>
                    </div>

                    <div class="container">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" name="uname" required>

                        <label for="psw"><b>Email</b></label>
                        <input type="password" name="psw" required>

                        <label for="psw"><b>Password </b></label>
                        <input type="password" placeholder="at least 8 charcters" name="psw" required>

                        <label for="psw"><b>Password Confirm</b></label>
                        <input type="password" name="psw" required>



                        <button class="blr" type="submit">Sign Up</button>

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

                <div class="nav__items">
                    <h3 class="nav__subtitle">Manage</h3>

                    <a href="view/watchlist.php" class="nav__link">
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
    <?php
    include_once('../modele/conect.php');
    $con = conect();
    $sql = "SELECT * FROM movies_tv WHERE idMovies=" . $_GET['id'];
    $tab = $con->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    foreach ($tab  as $row)

    ?>
    <main>
        <section class="content">
            <div class="movie_card">
                <div class="info_section">
                    <div class="movie_header">
                        <img class="locandina" src="../view/image/<?= $row['image'] ?>" />
                        <h1><?= $row['title'] ?><span> (<?= $row['date'] ?>)</span> </h1>
                        <span class="cat"><?= $row['MorS'] ?></span>
                        <p class="type"><?= $row['type'] ?></p>
                        <span class="point">.</span>
                        <span class="duration"><?= $row['type'] ?></span>
                        <div class="movie_manage">
                            <span class="circle-icon"> <i class='bx bxs-bookmark bx-sm nav__icon'></i></span>
                            <span class="circle-icon "> <i class='bx bxs-star bx-sm  nav__icon' style="color: gold ;"></i><span style="font-size: 20px ; font-weight: bold;">8.6</span><span style="font-size:15px;">/ 10</span> </span>
                            <span class="tariler"><i class='bx bx-play bx-sm nav__icon ' onclick="document.getElementById('trv').style.display='block'">Play trailer</i></span>
                            <div id="trv" class="modal">

                                <iframe width="560" height="315" src="https://www.youtube.com/embed/JwXfVGjSz-4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                    <span onclick="document.getElementById('trv').style.display='none'" class="close" title="Close Modal">&times;</span>
                                </iframe>
                            </div>
                        </div>
                    </div>
                    <div class="movie_desc">

                        <h1>Overview</h1>
                        <p class="text">
                            <?= $row['describe'] ?></p>
                        <h1 class="dirctor"><b>Steven Knight</b></h1>
                        <h6>Creator</h6>
                    </div>
                    <div class="movie_social">
                        <img class="icon-n" src="assets/img/Netflix_icon..png" alt="">

                        <a href="https://www.netflix.com/ma-fr/title/80002479" target="_blank">
                            <h4 class="src-movie"><i>Now Streaming <br> <b>Watch Now</b></i></h4>
                        </a>

                    </div>
                </div>
                <div class="blur_back ave_back">
                    <img src="assets/img/pickyimg.jpg" alt="">
                </div>
            </div>

        </section>

        <div class="col-md-6 mb-4">
            <h1 class="my-5 h2">Top cast</h1>
            <div>
                <img src="assets/img/L_.jpg" class="rounded-circle w-25  z-depth-2" alt="100x100">
                <h3 style="font-size: 20px;">name<span class="m-lg-5">dddd</span></h3>
            </div>


        </div>

        <div class="col-md-6 mb-4">
            <h1 class="my-5 h2">Details</h1>
            <div>
                <h3 style="font-size: 20px;">Relese date :</h3>
                <p></p>
            </div>
            <div>
                <h3 style="font-size: 20px;">Country of origin :</h3>
                <p></p>
            </div>
            <div>
                <h3 style="font-size: 20px;">Language :</h3>
                <p></p>
            </div>
            <div>
                <h3 style="font-size: 20px;">Genres :</h3>
                <p></p>
            </div>


        </div>




        <!--========== MAIN JS ==========-->


        <script>
            // Get the modal
            var modal1 = document.getElementById('trv');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal1) {
                    modal1.style.display = "none";

                }


            }
        </script>



</body>

</html>
</body>

</html>