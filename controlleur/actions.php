<?php include_once('modele/conect.php');
session_start();
function login($u, $p)
{
    include_once('modele/conect.php');
    $con = conect();
    $req = "SELECT * from user  where login=:u and pwd=:p";
    $st = $con->prepare($req);
    $st->execute(['u' => $u, 'p' => $p]);
    $tabb = $st->fetchAll();
    //print_r($tab);
    if (count($tabb) == 0) {
        // unset($_SESSION["user"]);
        include_once('view/home.php');
    } elseif ($tabb[0][3] == 'user') {
        $req = "SELECT * from user where login=:u
                and pwd=:p ";
        $st = $con->prepare($req);
        $st->execute(['u' => $u, 'p' => $p]);
        $tab = $st->fetchAll();
        $_SESSION["idUser"] = $tab[0][0];
        $_SESSION["user"] = $tab[0][1];
        $_SESSION["pwd"] = $tab[0][2];
        $_SESSION['type'] = $tab[0][3];
        include_once('view/homelog.php');
    } elseif ($tabb[0][3] == 'admin') {
        // $_SESSION["idUser"] = $tab[0][0];
        $_SESSION["user"] = $tabb[0][1];
        $_SESSION["pwd"] = $tabb[0][2];
        $_SESSION['type'] = $tabb[0][3];
        include_once('view/admin.php');
    }
}
function logout()
{
    $_SESSION = array();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
}

function newUser()
{
    if (isset($_POST['regist'])) {
        include_once('modele/conect.php');
        $u = $_POST['uname'];
        $p = $_POST['psw'];
        $p1 = $_POST['psw1'];
        if ($p != $p1) {
            echo '<script>alert("VALID YOUR PASSWORD");</script>';
            return;
        } else {
            $con = conect();
            $sql = "INSERT INTO user (login,pwd) VALUES (?,?)";
            $stmt = $con->prepare($sql);
            $stmt->execute(array($u, $p));
        }
    }
}
function addList()
{
    if (isset($_POST['addList'])) {
    }
}
function watchlist()
{
    $id = $_GET['id'];
    $con = conect();
    $sql = 'SELECT * FROM movies_tv WHERE idMovies=' . $id;
    $tab = $con->query($sql)->fetchAll();
    $sql1 = 'SELECT count(*) FROM playList WHERE idUser=' . $_SESSION['idUser'] . ' AND idMovies=' . $_GET['id'];
    $tabb = $con->query($sql1)->fetchAll();
    if ($tabb[0][0] > 0) {
        echo "<script>alert('Alredy in WatchList');</script>";
        include('view/homelog.php');
        return;
    } else {
        foreach ($tab as $row) {
            $n = $row['title'];
            $img = $row['image'];
            $ty = $row['MorS'];
            $time = $row['time'];
            $idU = $_SESSION["idUser"];
            $sql = 'INSERT INTO playList( title , image , type , time , idUser , idMovies) 
                           VALUE( ? , ? , ? , ? , ? , ? )';
            $stmt = $con->prepare($sql);
            $stmt->execute(array($n, $img, $ty, $time, $idU, $id));

            include('view/homelog.php');
        }
    }
}
function watchFilm()
{
    $id = $_GET['id'];
    $con = conect();
    $sql = 'SELECT * FROM movies_tv WHERE idMovies=' . $id;
    $tab = $con->query($sql)->fetchAll();
    $sql1 = 'SELECT count(*) FROM playList WHERE idUser=' . $_SESSION['idUser'] . ' AND idMovies=' . $_GET['id'];
    $tabb = $con->query($sql1)->fetchAll();
    if ($tabb[0][0] > 0) {
        echo "<script>alert('Alredy in WatchList');</script>";
        include('view/film.php');
        return;
    } else {
        foreach ($tab as $row) {
            $n = $row['title'];
            $img = $row['image'];
            $ty = $row['MorS'];
            $time = $row['time'];
            $idU = $_SESSION["idUser"];
            $sql = 'INSERT INTO playList( title , image , type , time , idUser , idMovies) 
                           VALUE( ? , ? , ? , ? , ? , ? )';
            $stmt = $con->prepare($sql);
            $stmt->execute(array($n, $img, $ty, $time, $idU, $id));

            include('view/film.php');
        }
    }
}
function watchSerie()
{
    $id = $_GET['id'];
    $con = conect();
    $sql = 'SELECT * FROM movies_tv WHERE idMovies=' . $id;
    $tab = $con->query($sql)->fetchAll();
    $sql1 = 'SELECT count(*) FROM playList WHERE idUser=' . $_SESSION['idUser'] . ' AND idMovies=' . $_GET['id'];
    $tabb = $con->query($sql1)->fetchAll();
    if ($tabb[0][0] > 0) {
        echo "<script>alert('Alredy in WatchList');</script>";
        include('view/series.php');
        return;
    } else {
        foreach ($tab as $row) {
            $n = $row['title'];
            $img = $row['image'];
            $ty = $row['MorS'];
            $time = $row['time'];
            $idU = $_SESSION["idUser"];
            $sql = 'INSERT INTO playList( title , image , type , time , idUser , idMovies) 
                           VALUE( ? , ? , ? , ? , ? , ? )';
            $stmt = $con->prepare($sql);
            $stmt->execute(array($n, $img, $ty, $time, $idU, $id));

            include('view/series.php');
        }
    }
}
function search()
{
    $con = conect();
    if (isset($_POST['search']) && isset($_POST['send'])) {
        $title = $_POST['search'];
        $sql = "SELECT count(*) FROM movies_tv WHERE title LIKE '%$title%'";
        $tab1 = $con->query($sql)->fetchAll();
        if ($tab1[0][0] > 0) {
            $sql = "SELECT * FROM movies_tv WHERE title LIKE '%$title%'";
            $tab = $con->query($sql)->fetchAll();
?><div class="container mx-auto ">
                <form action="?action=playList" method="post" style="display:grid;
                                                                     grid-row:1 ;
                                                                     grid-template-columns: repeat(auto-fill,minmax(140px, 1fr));
                                                                     gap:50px;
                                                                     margin-bottom:10px;">
                    <h4 class="font-weight-light text-secondary" style="margin-top : 40px;">RESULT</h4>
                    <?php foreach ($tab  as $row) {
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
                </form>

                </main>

            <?php
                    }
                }
                if ($tab1[0][0] == 0) {
            ?>
            <h4 class="font-weight-light text-secondary" style="margin-top : 40px;">No RESULT</h4>
<?php }
            }
        }

        function addMS()
        {
            if (isset($_POST['sub'])) {
                $from = $_FILES['image']['tmp_name'];
                $to = $_FILES['image']['name'];
                $mv =  move_uploaded_file($from, "view/image/" . $to);

                $title = $_POST['title'];
                $desc = $_POST['desc'];
                $date = $_POST['date'];
                $time = $_POST['time'];
                $type = $_POST['type'];
                $der  = $_POST['der'];
                $gen  = $_POST['gen'];
                $rate = $_POST['rate'];
                $img = $to;
                $count = $_POST['count'];

                $con = conect();
                $sql = "INSERT INTO `movies_tv` (`idMovies`, `title`, `image`, `time`, `date`, `describe`, `director`, `country`,`vote`,`type`, `MorS`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?);";
                $stmt = $con->prepare($sql);
                $stmt->execute(array(
                    null, $title, $to, $time, $date, $desc, $der, $count, $rate, $type, $gen
                ));
                echo '<script>alert("Film inserted successfully.");</script>';
            }
        }
        function addAct()
        {
            if (isset($_POST['sub'])) {
                $from = $_FILES['img']['tmp_name'];
                $to = $_FILES['img']['name'];
                $mv =  move_uploaded_file($from, "view/imageAc/" . $to);

                $act = $_POST['act'];
                $actD = $_POST['actD'];
                $actF = $_POST['actF'];
                $con = conect();
                $sql = "INSERT INTO `acteur` (`idAct`, `ActName`, `ActDesc`, `ActFS` ,`ActImg`) 
                        VALUES (?, ?, ?, ? , ?);";
                $stmt = $con->prepare($sql);
                $stmt->execute(array(
                    null, $act, $actD, $actF, $to
                ));
                echo '<script>alert("Actoe inserted successfully.");</script>';
            }
        }
        function sendD()
        {
            if (isset($_POST['sub'])) {

                $email = $_POST['email'];
                $title = $_POST['title'];
                $url = $_POST['url'];

                $con = conect();
                $sql = "INSERT INTO `demande` (`idDem`, `email`, `titre`, `URL`) VALUES (?, ?, ?, ?);";
                $stmt = $con->prepare($sql);
                $stmt->execute(array(
                    null, $email, $title, $url
                ));
                echo '<script>alert("Demande envoyer.");</script>';
            }
        }
