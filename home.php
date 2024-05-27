<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width, initial-scale=1.0">
        <title>Sistem Klinik Hewan Online</title>

        <!--font awesome cdn link-->
        <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css>

        <!--custome css file link-->
        <link rel="stylesheet" href="styleIndex.css">
    </head>
    <body>
        <!--header section starts-->
        <header>

            <input type="checkbox" name="" id="toggler">
            <label for="toggler" class="fas fa-bars"></label>

            <a href="#" class="logo">Klinik<span>Hewan</span></a>
            <nav class="navbar">
                <a href="#home">home</a>
                <a href="data.html">data hewan</a>
                <a href="dokter.php">dokter</a>
                <a href="logout.php">LogOut</a>
            </nav>

            <div class="icons">
                <a href="#review" class="fas fa-heart"></a>
                <a href="#" class="fas fa-user"></a>
            </div>
        </header>
        <!--header section ends-->

        <!--home section starts-->
        <section class="home" id="home">
            <div class="content">
                <h3>Selamat Datang</h3>
                <p>Sistem klinik hewan online ini adalah untuk mengatasi beberapa kendala dalam 
                    proses mendapatkan layanan di klinik hewan saat ini.</p>
                <a href="data.html" class="btn">Konsultasi sekarang</a>
            </div>
        </section>
        <!--home section ends-->

        <!--footer section starts-->
        <section class="footer" id="footer">
            <div class="box-container">
                <div class="box">
                    <h3>extra links</h3>
                    <a href="#">my account</a>
                    <a href="#">my order</a>
                    <a href="#">my favorite</a>
                </div>
                <div class="box">
                    <h3>location</h3>
                    <a href="#">jln.veteran</a>
                    <a href="#">jln.bau massepe</a>
                    <a href="#">jln.jambu</a>
                </div>
                <div class="box">
                    <h3>contact info</h3>
                    <a href="#">0815267384</a>
                    <a href="#">email@gmail.com</a>
                    <a href="#">jln.jambu</a>
                    <!-- <img src="C:\Users\Master Com\Downloads\pay.webp" alt=""> -->
                </div>
            </div>
            <div class="credit"> created by <span> kelompok 2 </span> | all right reserved </div>
        </section>
        <!--footer section ends-->
    </body>
</html>