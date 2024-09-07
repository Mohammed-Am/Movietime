<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!--========== BOX ICONS ==========-->

    <link rel="stylesheet" href="../view/assets/css/boxicons.min.css">

    <!--========== Bootstrap ==========-->

    <link rel="stylesheet" href="/view/assets/css/bootstrap.min.css">
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




            <a href="../?action=auth" class="header__logo">Movie<span class="col">time</span> </a>



            <div class="header__toggle">
                <i class="fa-solid fa-bars" id="header-toggle"></i>

            </div>
        </div>
    </header>
    <!--========== NAV ==========-->
    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="../?action=auth" class="nav__link nav__logo">
                    <i class='fa-solid fa-compact-disc nav__icon'></i>
                    <span class="nav__logo-name">Movie<span class="col">time</span></span>
                </a>

                <div class="nav__list">
                    <div class="nav__items">
                        <h3 class="nav__subtitle">Découvrir</h3>


                        <div class="nav__dropdown">
                            <a href="../?action=film" class="nav__link">
                                <i class='bx bx-camera-movie nav__icon'></i>
                                <span class="nav__name">Films</span>
                                <!-- <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i> -->
                            </a>


                        </div>

                        <div class="nav__dropdown">
                            <a href="../?action=serie" class="nav__link">
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
                                    <a href="../?action=animation" class="nav__dropdown-item">Animation </a>
                                    <a href="../?action=documentary" class="nav__dropdown-item">Documentary</a>
                                    <a href="../?action=action" class="nav__dropdown-item">Action</a>
                                    <a href="../?action=history" class="nav__dropdown-item">History </a>
                                    <a href="../?action=war" class="nav__dropdown-item">War</a>
                                    <a href="../?action=comedy" class="nav__dropdown-item">Comedy</a>
                                    <a href="../?action=horror" class="nav__dropdown-item">Horror</a>
                                    <a href="../?action=biographyy" class="nav__dropdown-item">Biographyy </a>
                                    <a href="../?action=family" class="nav__dropdown-item">Family</a>
                                    <a href="../?action=adventure" class="nav__dropdown-item">Adventure</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="nav__dropdown">
                        <a href="../?action=acteur" class="nav__link">
                            <i class='bx bx-face nav__icon'></i>
                            <span class="nav__name">Acteurs</span>
                        </a>


                    </div>


                </div>

                <br />
                <div class="nav__dropdown">
                    <a href="../?action=search" class="nav__link">
                        <i class='bx bx-search nav__icon'></i>
                        <span class="nav__name"> Search</span>
                    </a>
                </div>

                <br>

                <div class="nav__items">
                    <h3 class="nav__subtitle">Manage</h3>

                    <a href="../?action=watchlist" class="nav__link">
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
        <div class="container mx-auto ">

            <h4 class="font-weight-light text-secondary">Recommended</h4>

            <!-- movies grid -->
            <?php
            if (isset($_GET['id'])) {
                include_once('../modele/conect.php');
                $con = conect();
                $sql = "SELECT * FROM movies_tv WHERE idMovies=" . $_GET['id'];
                $tab = $con->query($sql)->fetchAll(PDO::FETCH_ASSOC);

                foreach ($tab  as $row) {


            ?>



                    <form action="" method="post" style="display:grid;
                                grid-row:1 ;
                                grid-template-columns: repeat(auto-fill,minmax(140px, 1fr));
                                gap:40px;
                                margin-bottom:10px;">
                        <div class="card  rounded  row" class="col-md-4" style="width: 13rem; margin-top:38px; background-color:#1A1A1A;">


                            <a href="view/movie.php"> <img src="../view/image/<?= $row['image'] ?>" alt="" style="hight=80%; "> </a>
                            <a href="#video"><button type="button" style="color-background:#515151; font-size:15px; margin-top:3px; "><i class='bx bx-play bx-sm  ' style='color:#f4eded'></i>Watch Trailer</button></a>
                        </div>
                        <div class="card" style="  background: #0E1217;  width:550%; ">
                            <div class="card-header  ">
                                <p class="card-text  text-light " style="font-size:28px;"><?= $row['title'] ?> <span class="card-text .text-secondary">(<?= $row['date'] ?>)</span></p>
                            </div>
                            <table class="table table-bordered ">

                                <tbody>
                                    <tr>
                                        <th scope="row" style=" font-size:15px; ">Language • Country</th>
                                        <td> <span class="card-text text-primary .text-secondary"><?= $row['Language'] ?></span> • <span class="card-text text-primary .text-secondary"><?= $row['country'] ?></span></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Genre</th>
                                        <td><span class="card-text .text-secondary"><?= $row['type'] ?></span></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Evaluation</th>
                                        <td> <span class="circle-icon text-secondary"><i class='bx bxs-star bx-sm  nav__icon' style="color: gold ;"></i><span style="font-size: 22px ; font-weight: bold;"><?= $row['vote'] ?> sur 10</span></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Time</th>
                                        <td> <span class="card-text .text-secondary"><?= $row['time'] ?></span> </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Directors</th>
                                        <td> <span class="card-text text-primary "><?= $row['director'] ?></span> </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Type</th>
                                        <td> <span style="font-size: 18px ; font-weight: bold; " class="card-text text-secondary  "><?= $row['MorS'] ?></span> </td>
                                    </tr>
                                </tbody>
                            </table>



                        </div>


                    </form>

                    <div>
                        <div>
                            <h4 class="stylo">Storyline</h4>
                            <p class="  story"><?= $row['describe'] ?></p>
                        </div>
                        <h4 class="stylo ">Watch the movie trailer </h4>
                        <div class="iframe-container story">

                            <iframe href="#video" width="1100" height="440" src="<?= $row['link_trailer'] ?>" title="trieler video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                        <div>
                            <h4 class="stylo">Top cast</h4>
                            <?php
                            $sql = 'SELECT * from  castList  WHERE  idMovies 
                            IN (SELECT idMovies FROM movies_tv WHERE idMovies =' . $_GET['id'] . ')';
                            $tab = $con->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($tab as $row) {
                            ?>
                                <div class="row">
                                    <!-- column  -->
                                    <div class="col-lg-3 mb-4">
                                        <!-- Row -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img src="../view/imageAc/<?= $row['imageCast']; ?>">
                                            </div>
                                            <div class="col-md-15 text-center">
                                                <div class="pt-2">
                                                    <h5 class="mt-3 font-weight-medium mb-0 " style="font-size:20px;"><?= $row['nameCast'] ?></h5>
                                                    <h6 class="subtitle mb-4 text-secondary" style="font-size:18px;"><?= $row['nickCast'] ?></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row -->
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                <?php
                }
                if (isset($_POST['addList'])) {
                    $sql1 = 'SELECT count(*) FROM playList WHERE 
                idUser=' . $_SESSION['idUser'] . ' AND idMovies=' . $_GET['id'];
                    $tabb = $con->query($sql1)->fetchAll();
                    if ($tabb[0][0] > 0) {
                        echo "<script>alert('Alredy in WatchList');</script>";
                        return;
                    } else {
                        foreach ($tab as $row) {
                            $n = $row['title'];
                            $img = $row['image'];
                            $ty = $row['MorS'];
                            $time = $row['time'];
                            $idU = $_SESSION["idUser"];
                            $id = $_GET['id'];
                            $sql = 'INSERT INTO playList( title , image , type , time , idUser , idMovies) 
                            VALUE( ? , ? , ? , ? , ? , ? )';
                            $stmt = $con->prepare($sql);
                            $stmt->execute(array($n, $img, $ty, $time, $idU, $id));
                        };
                    }
                }
            }

                ?>



                    </div>








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