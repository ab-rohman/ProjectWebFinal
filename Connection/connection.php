<?php
    $namaHost = "localhost";
    $username = "root";
    $password = "";
    $database = "steamdb";

    $connect = mysqli_connect($namaHost,$username,$password,$database);
    if($connect){
    } else {
        echo "Gagal";
    }
?>