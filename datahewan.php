<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: home.php");
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styleIndex.css">
        <title>Sistem Klinik Hewan Online</title>
    </head>
    <body>
        <!--header section starts-->
        <header>
            <label for="toggler" class="fas fa-bars"></label>

            <a href="#" class="logo">Klinik<span>Hewan</span></a>
            <nav class="navbar">
            <a href="home.php">home</a>
                <a href="data.html">data hewan</a>
                <a href="dokter.php">dokter</a>
                <a href="logout.php">LogOut</a>
            </nav>

            <div class="icons">
                <a href="#review" class="fas fa-heart"></a>
                <a href="#" class="fas fa-user"></a>
            </div>
        </header>

        <!--profil doctor starts-->
        <section class="profil" id="profil1">
            <h1 class="heading">Hewan <span>Milik Anda</span></h1>
            <div class="box-container">
                <!-- <div class="user">
                    <img src=dokter1.webp alt="">
                    <div class="user-info">
                        <h3>dr.elizabeth</h3>
                        <a1>Id <span>dokter: 01|</span></a1>
                        <a href="janji_temu.html">Buat janji</a>
                    </div>
         -->
        <section class="tabel" id="tabel">
            <head>
            <a href="janji_temu.html" class="btn">tambah</a>
                <table>
                    <!-- <h2>Table Jadwal Praktek</h2> -->
                    <table style="width:50%">
                        <tr>
                            <th>Tanggal</th>
                            <th>Waktu</th> 
                            <th>Tempat</th>
                        </tr>
                        <tr>
                            <td>20/Mei/2024</td>
                            <td>10.00-12.00</td>
                            <td>Klinik 1</td>
                        </tr>
                        <tr>
                            <td>20/Mei/2024</td>
                            <td>10.00-12.00</td>
                            <td>Klinik 2</td>
                        </tr>
                    </table>
        </section>
        
    

        <!--profil doctor ends-->

    </body>
</html>