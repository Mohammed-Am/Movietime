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
            <div>
                <?php
                
                ?>
            </div>
    
</body>

</html>