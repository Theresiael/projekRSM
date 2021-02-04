<?php

$conn = mysqli_connect("localhost", "root", "", "mediasosialar");

function registrasi ($data){ //sign Up
    global $conn;

    $username = strtolower($data["username"]); //huruf kecil semua
    $password = ($data["password"]);
    $password2 = ($data["password2"]);

    //cek konfirmasi password
    if($password !== $password2){
        echo "<script>
                alert('Password confirmation does not match!');
              </script>";
        return false;
    }

    //tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}

/*function tambah($data) { //tambah gambar di home
    global $conn;

    //upload gambar
    $gambar = upload();
    if( !$gambar ) {
        return false;
    }

    //tambahkan gambar
    mysqli_query($conn, "INSERT INTO img VALUES('', '$gambar')");

    return mysqli_affected_rows($conn);
}

function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yg di upload
    if( $error === 4 ) {
        echo "<script>
                alert('select the image first!');
              </script>";
        return false;
    }
    //cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png']; 
    $ekstensiGambar = explode('.', $namaFile); //pemecahan string menjadi array
    $ekstensiGambar = strtolower(end($ekstensiGambar)); //huruf kecil semua(ambil yg paling terakhir)
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('what you upload is not an image!');
              </script>";
        return false;
    }
    //cek jika ukurannya terlalu besar
    if( $ukuranFile > 1000000 ) { //1mb
        echo "<script>
                alert('image size is too large!');
              </script>";
        return false;
    }

    //gambar siap diupload
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .='.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'image/' . $namaFileBaru);

    return $namaFileBaru;
}*/

?>