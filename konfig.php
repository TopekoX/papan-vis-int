<?php
/*
* Selamat datang di Sistem Informasi BDI Intelijen Kejaksaan
* Author : Ucup Timposu (ucup.timposu@gmail.com)
* Year : 2017
*/

// Database Konfigurasi
$host = "localhost";
$user = "root";
$pass = "xxxxxx";
$db = "bdi";

$con = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error($con));

// App meta data
$satker = "Kejaksaan Negeri Palu";
$title = "Bank Data";
?>
