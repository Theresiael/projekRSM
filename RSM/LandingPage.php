<?php
require 'function.php';

    if( isset($_POST["login"]) ) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    
        //cek username
        if( mysqli_num_rows($result) === 1 ) {
            //cek password
            $row = mysqli_fetch_assoc($result);
            if( $row["password"] )  {
                header("Location: Home.php");
                exit;
            }
        }
        $error = true;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewreport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="tes2.css"/>
</head>
    <body>
        <div class="container-fluid banner">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-md">
                        <div class="navbar-brand">IDLE TIME</div>
                        <!--<div class="logo">
                            <a href="#">
                                <img src="image/logo.png" height="50px">
                            </a>
                        </div>-->
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="SignUp.php">SIGN UP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">CONTACT</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-lg offset-sm-1 info">
                    <h1 class="text-center">MEDIA SOCIAL AR</h1>
                    <p>
                        Connect with your friends anywhere and anytime<br>
                    </p>

                    <?php if( isset($error) ): ?>
                        <p style="color:red; font-style:italic;">Wrong username / password</p>
                    <?php endif; ?>
                    
                    <form action="" method="post" autocomplete="off">
                        <div class="form-group row nam">
                            <label for="username" class="col-md-3 offset-sm-1">Username :</label>
                            <input type = "text" name="username" class="offset-sm-1 form-control" placeholder="Your Username"/>
                        </div>

                        <div class="form-group row pas">
                            <label for="password" class="col-md-3 offset-sm-1">Password :</label>
                            <input type="password" name="password" class="offset-sm-1 form-control" placeholder="Your Password"/>
                        </div>

                        <button type="submit" name="login" class="btn btn-info log">Login</button>
                    </form>
                </div>

                <div class="col-lg image mage">
                    <img src="image/image.jpg" alt="gambar" height="450px">
                </div>

            </div>
        </div>
    </body>
</html>