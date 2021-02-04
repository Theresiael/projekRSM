<?php
require 'function.php';

    if(isset($_POST["regis"]) ) {
        if(registrasi($_POST) > 0 ){
            echo "<script>
                    alert('Sign Up is successful!');
                 </script>";
        } else {
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewreport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="SU.css"/>
</head>
<body>
    <div class="container col-sm-6 col-md-6 col-lg-6">
        <h1 class="text-center">Sign Up</h1>
        <form action="" method="post" autocomplete="off">

            <div class="form-group row">
                <label for="username" class="inputo">Username :</label>
                <div class="in">
                    <input type = "text" name="username" class="form-control" placeholder="Your Username"/>
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="inputo">Password :</label>
                <div class="in">
                    <input type="password" name="password" class="form-control" placeholder="Your Password"/>
                </div>
                </div>

            <div class="form-group row">
                <label for="password" class="inputo">Confirm Password:</label>
                <div class="in">
                    <input type="password" name="password2" class="form-control" placeholder="Confirm Your Password"/>
                </div>
            </div>

            <div>
                <button type="submit" name="regis" class="btn btn-info ton">Sign Up</button>
            </div>

        </form>
    </div>
</body>
</html>