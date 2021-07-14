<?php

//koneksi ke database (" ", merupakan pass phpmyadmin)

$koneksi = mysqli_connect("localhost", "ucp2pkw_AditMAU", "aaditya09876", "ucp2pkw_toko_buku_adityamaulana");

//cek koneksi ke database
//jika error

if(mysqli_connect_errno()){
    echo "Error connecting : " . mysqli_connect_error();
}