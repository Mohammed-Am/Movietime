<?php
include_once('controlleur/actions.php');
if (!isset($_GET['action']) && isset($_SESSION['user']) && $_SESSION['type'] == "user") {
     include_once('view/homelog.php');
} elseif (!isset($_GET['action'])) {
     include_once("view/home.php");
}
if (isset($_GET['action'])) {
     switch ($_GET['action']) {
          case 'addUser':
               newUser();
               require_once('view/home.php');
               break;
          case 'auth':
               if (isset($_SESSION["user"]) && $_SESSION["type"] == "user") {
                    include_once("view/homelog.php");
               } elseif (isset($_SESSION["user"]) && $_SESSION["type"] == "admin") {
                    include_once("view/admin.php");
               } else {
                    $u = (isset($_POST['uname']) ? $_POST['uname'] = $_POST['uname'] : $_POST['uname'] = "");
                    $l = (isset($_POST['psw']) ? $_POST['psw'] = $_POST['psw'] : $_POST['psw'] = "");
                    login($u, $l);
                    // echo $_SESSION["idUser"];
               }
               break;
               //----------------------------------// Admin //--------------------------//
          case 'AddMo_Se':
               if (isset($_SESSION["user"]) && $_SESSION["type"] == "admin") {
                    include('view/addMorS.php');
               } else {
                    include('view/home.php');
               }
               break;

          case 'add_Act':
               if (isset($_SESSION["user"]) && $_SESSION["type"] == "admin") {
                    include('view/addAct.php');
               } else {
                    include('view/home.php');
               }
               break;

          case 'addMS':
               if (isset($_SESSION["user"]) && $_SESSION["type"] == "admin") {
                    addMS();
                    include('view/addMorS.php');
               } else {
                    include('view/home.php');
               }
               break;
          case 'addAct':
               if (isset($_SESSION["user"]) && $_SESSION["type"] == "admin") {
                    addAct();
                    include('view/addAct.php');
               } else {
                    include('view/home.php');
               }
               break;
          case 'dem':
               if (isset($_SESSION["user"]) && $_SESSION["type"] == "admin") {
                    addAct();
                    include('view/demande.php');
               } else {
                    include('view/home.php');
               }
               break;
               //----------------------------///////////--------------------------------//
          case 'set':
               if (!isset($_GET['action']) && isset($_SESSION['user']) && $_SESSION['type'] == "user") {
                    include_once("view/homelog.php");
               } else {
                    include_once("view/home.php");
               }
               break;

          case 'movie':
               if (isset($_SESSION["user"]) && $_SESSION["type"] == "user") {
                    include_once("view/movie.php");
               } else {
                    include_once("view/home.php");
               }
               break;


          case 'logout':
?>
               <script>
                    document.getElementById("closer").onclick = function() {

                         <?php
                         logout();
                         ?>
                    }
               </script>
<?php
               if (!isset($_SESSION['user'])) {
                    include_once("view/home.php");
               }
               break;
          default:
               if (isset($_SESSION['user']) && $_SESSION['type'] == "user") {
                    include_once("view/homelog.php");
               } elseif (isset($_SESSION['user']) && $_SESSION['type'] == "admin") {
                    include_once("view/admin.php");
               } else {
                    include_once("view/home.php");
               }
               break;
          case 'watchlist':
               if (isset($_SESSION['user']) && $_SESSION['type'] == "user") {
                    include_once("view/watchlist.php");
               } else
                    include("view/home.php");
               break;
          case 'animation':
               if (isset($_SESSION['user']) && $_SESSION['type'] == "user") {
                    include_once("view/genre/animation.php");
               } else
                    include("view/home.php");
               break;
          case 'documentary':
               if (isset($_SESSION['user']) && $_SESSION['type'] == "user") {
                    include_once("view/genre/documentary.php");
               } else
                    include("view/home.php");
               break;
          case 'action':
               if (isset($_SESSION['user']) && $_SESSION['type'] == "user") {
                    include_once("view/genre/action.php");
               } else
                    include("view/home.php");
               break;

          case 'history':
               if (isset($_SESSION['user']) && $_SESSION['type'] == "user") {
                    include_once("view/genre/history.php");
               } else
                    include("view/home.php");
               break;

          case 'war':
               if (isset($_SESSION['user']) && $_SESSION['type'] == "user") {
                    include_once("view/genre/war.php");
               } else
                    include("view/home.php");
               break;
          case 'comedy':
               if (isset($_SESSION['user']) && $_SESSION['type'] == "user") {
                    include_once("view/genre/comedy.php");
               } else
                    include("view/home.php");
               break;
          case 'horror':
               if (isset($_SESSION['user']) && $_SESSION['type'] == "user") {
                    include_once("view/genre/horror.php");
               } else
                    include("view/home.php");
               break;
          case 'biographyy':
               if (isset($_SESSION['user']) && $_SESSION['type'] == "user") {
                    include_once("view/genre/biography.php");
               } else
                    include("view/home.php");
               break;
          case 'family':
               if (isset($_SESSION['user']) && $_SESSION['type'] == "user") {
                    include_once("view/genre/family.php");
               } else
                    include("view/home.php");
               break;
          case 'adventure':
               if (isset($_SESSION['user']) && $_SESSION['type'] == "user") {
                    include_once("view/genre/adventure.php");
               } else
                    include("view/home.php");
               break;
          case 'film':
               if (isset($_SESSION['user']) && $_SESSION['type'] == "user") {
                    include_once("view/film.php");
                    if (isset($_POST['addList'])) {
                    }
               } else
                    include("view/home.php");
               break;

          case 'serie':
               if (isset($_SESSION['user']) && $_SESSION['type'] == "user") {
                    include_once("view/series.php");
               } else
                    include("view/home.php");
               break;

          case 'insert':
               if (isset($_SESSION['user']) && $_SESSION['type'] == "user") {
                    watchlist();
               } else
                    include("view/home.php");
               break;

          case 'filmAdd':
               if (isset($_SESSION['user']) && $_SESSION['type'] == "user") {
                    watchFilm();
               } else
                    include("view/home.php");
               break;

          case 'serieAdd':
               if (isset($_SESSION['user']) && $_SESSION['type'] == "user") {
                    watchSerie();
               } else
                    include("view/home.php");
               break;

          case 'search':

               if (isset($_SESSION['user']) && $_SESSION['type'] == "user") {
                    include('view/search.php');
                    search();
               } else {
                    include('view/home.php');
               }
               break;
          case 'acteur':
               if (isset($_SESSION['user']) && $_SESSION['type'] == "user") {
                    include('view/acteurs.php');
               } else {
                    include('view/home.php');
               }
          case 'sendD':
               if (isset($_SESSION['user']) && $_SESSION['type'] == "user") {
                    sendD();
                    include_once("view/homelog.php");
               } else {
                    sendD();
                    include_once("view/home.php");
               }
               break;
     }
}
