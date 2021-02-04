<?php
require 'function.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset ($_POST["submit"]) ) {

    //cek apakah data berhasil ditambahkan atau tidak  document.location.href = 'Home.php';
    if( tambah($_POST) > 0 ) {
        echo "<script> 
                alert('post added successfully!');
              </script>";
    }else {
        echo "<script>
                alert('post failed to add!');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Home.css"/>
  <link rel="stylesheet" href="fontawesome/css/all.css"/>
</head>
<body>
    
<div class="jumbotron jumbotron-fluid text-center">
  <nav class="navbar"><h1 class="col-sm-4 title">IDLE TIME</h1>
    <ul class="col-sm-7 nav uli">
        <li class="nav-item">
            <a class="nav-link" href="Home.php"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-envelope"></i> Message</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="coba2.html"><i class="fas fa-camera-retro"></i> Camera</a>
        </li>
    </ul>
  </nav>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-lg-3 text-center">
      <div class="container left">
      <h3>My Profile</h3>
      <p><img src="image/oz.jpg" class="rounded-circle" style="height:120px;width:120px" alt="Avatar"></p>
      <hr>
         <p class="text-left pro"><i class="fa fa-home fa-fw"></i> Makassar, Indonesia</p>
         <p class="text-left pro"><i class="fa fa-birthday-cake fa-fw"></i> February 11, 2000</p>
        <!--<hr><nav class="navbar navbar-md-4">
         Links 
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-bookmark"></i> Saved</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-star"></i> Favorite</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-cog"></i> Settings</a>
                </li>
            </ul> 
        </nav>-->
      </div>  
    </div>
    <div class="col-sm-7 col-lg-7 col-md-7 center">
      <div class="container  white round  cen0"><br>
        <img src="image/oz.jpg" alt="Avatar" class="rounded-circle" style="height:50px; width:50px"><br><br>
        <form action="" method="post" enctype="multipart/form-data"> 
          <button type="submit" class="btn btn-link"><i class="fas fa-plus">  Add a post</i></button>
          <input type = "label" name="gambar" id="gambar" class="form-control"/>
        </form>
      </div><br>

      <div class="container  white round cen"><br>
        <img src="image/alice.jpg" alt="Avatar" class="rounded-circle im"><br>
        <span class="text-right opacity">1 min</span>
        <h4>Alice</h4><br>
        <hr class="clear">
        <p>Happy New Year</p>
        <button type="button" class="button theme-d1 margin-bottom ton"><i class="fa fa-thumbs-up"></i>  Like</button><br>
        <!--button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button--> 
      </div><br>

      <div class="container white round cen"><br>
        <img src="image/natsume1.png" alt="Avatar" class="rounded-circle im"><br>
        <span class="w3-right w3-opacity">32 min</span>
        <h4>Natsume</h4><br>
        <hr class="w3-clear">
        <p>WOOOOOOW</p>
        <img src="image/Natsume.png" style="width:100%" class="margin-bottom">
        <p>waaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
        <button type="button" class="button theme-d1 margin-bottom ton"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <!--button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button--> 
      </div> 
    </div>
  </div>
</div>

</body>
</html>
