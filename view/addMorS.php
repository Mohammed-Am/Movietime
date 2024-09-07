<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--========== BOX ICONS ==========-->
     <link rel="stylesheet" href="view/assets/css/boxicons.min.css">
     <!--========== CSS ==========-->
     <title>Admin</title>
     <link rel="icon" href="view/assets/img/icons8-film-reel-50.png">
</head>
<link rel="stylesheet" href="view/assets/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="../view/image/"> -->
<link rel="stylesheet" href="view/assets/css/main.css">
<link rel="stylesheet" href="../view/image/">
<!--========== HEADER ==========-->
<header class="header">
     <div class="header__container">
          <div class="header__login">
               <a href="?action=logout" name="logout"> <i class='bx bx-log-out '></i>
                    <input onclick="document.getElementById('id01').style.display='block'" class="btn" type="button" value="Logout" /></a>
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

<body>
     <h3 style="text-align:center ;">Add New Movie or TV-Serie </h3>
     <header class="">
          <div class="">
               <form action="?action=addMS" enctype="multipart/form-data" method="post">
                    <div class="container">
                         <div>
                              <div>
                                   <label for="title" class="form-control-label px-3">Title :</label>
                                   <input type="text" name="title" class="text-light " name="title" placeholder="Enter A Film Name " required>
                              </div>
                              <div>
                                   <label for="desc">Describe Film :</label>
                                   <br>
                                   <input type="text" name="desc" class="text-light " placeholder="Describe your Film" required>
                              </div>
                              <div class="row justify-content-between text-left">
                                   <div class="form-group col-sm-6 flex-column d-flex">
                                        <label class="form-control-label px-3">Date realize :<span class="text-danger"> *</span></label>
                                        <input type="text" class="text-light " name="date" placeholder="Enter your first name">
                                   </div>
                                   <div class="form-group col-sm-6 flex-column d-flex">
                                        <label class="form-control-label px-3" for="der">Rate :<span class="text-danger"> *</span></label>
                                        <input type="text" class="text-light " name="rate" placeholder="Enter A Rate">
                                   </div>
                                   <div class="form-group col-sm-6 flex-column d-flex">
                                        <label class="form-control-label px-3" for="der">Time :<span class="text-danger"> *</span></label>
                                        <input type="text" class="text-light " name="time" placeholder="Enter A time">
                                   </div>
                                   <div class="form-group col-sm-6 flex-column d-flex">
                                        <label class="form-control-label px-3" for="type">type :<span class="text-danger"> *</span></label>
                                        <select class="text-white bg-dark " name="type" id="">

                                             <option value="movie">Movie</option>
                                             <option value="serie">Tv-Serie</option>
                                        </select>
                                   </div>
                                   <div>
                                        <div class="row justify-content-between text-left">
                                             <div class="form-group col-sm-6 flex-column d-flex">
                                                  <label class="form-control-label px-3" for="der">Season :</label>
                                                  <input type="text" class="text-light " name="time" placeholder="Enter A time">
                                             </div>
                                             <div class="form-group col-sm-6 flex-column d-flex">
                                                  <label class="form-control-label px-3" for="type">country :</label>
                                                  <input type="text" class="text-light " name="count" placeholder="Enter A time">
                                             </div>
                                        </div>
                                        <div class="row justify-content-between text-left">
                                             <div class="form-group col-sm-6 flex-column d-flex">
                                                  <label class="form-control-label px-3" for="der">Derecteur :<span class="text-danger"> *</span></label>
                                                  <input type="text" class="text-light " name="der" placeholder="Enter A Derrector Name">
                                             </div>
                                             <div class="form-group col-sm-6 flex-column d-flex">
                                                  <label class="form-control-label px-3" for="type">Genre :<span class="text-danger"> *</span></label>
                                                  <select class="text-white bg-dark " name="gen" id="">
                                                       <option cl value="Documentary">Documentary</option>
                                                       <option value="Action">Action</option>
                                                       <option value="History">History</option>
                                                       <option value="War">War</option>
                                                       <option value="Comedy">Comedy</option>
                                                       <option value="Horror">Horror</option>
                                                       <option value="Biography">Biography</option>
                                                       <option value="Family">Family</option>
                                                       <option value="Adventure">Adventure</option>
                                                  </select>
                                             </div>
                                        </div>


                                        <br>
                                        <?php
                                        // if (isset($_POST['up'])) {
                                        // }
                                        ?>

                                        <div>
                                             <label for="img">Image :</label>
                                             <input type="file" name="image">
                                        </div>
                                        <br>
                                        <div>
                                             <input type="submit" name="sub" value="VALID" class="header_btn">
                                             <input type="reset" value="Annuler" class="header_btn">
                                        </div>
                                   </div>
               </form>
</body>

</html>