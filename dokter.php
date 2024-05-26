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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width, initial-scale=1.0">
        <title>Sistem Klinik Hewan Online</title>

        <!--font awesome cdn link-->
        <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css>

        <!--custome css file link-->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--header section starts-->
        <header>

            <input type="checkbox" name="" id="toggler">
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
        <!--header section ends-->

        <!--DOCTOR section starts-->
        <section class="doctor" id="doctor">
            <h1 class="heading"> our <span>doctor</span> </h1>
            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <img src="dokter1.webp" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="profil.html" class="cart-btn">profil</a>
                            <a href="#" class="cart-btn">38thn</a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>dr.elizabeth</h3>
                        <p>spesialis</p>
                        <div class="spesialis">dokter <span>hewan </span>kucing</div>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src=dokter2.jpg alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="profil.html #profil1" class="cart-btn">profil</a>
                            <a href="#" class="cart-btn">34thn</a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>dr.jane smith</h3>
                        <p>spesialis</p>
                        <div class="spesialis">dokter <span>hewan </span>kucing</div>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src=dokter3.jpg alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="profil.html #profil2" class="cart-btn">profil</a>
                            <a href="#" class="cart-btn">30thn</a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>dr.lorial spentus</h3>
                        <p>spesialis</p>
                        <div class="spesialis">dokter <span>hewan </span>anjing</div>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="dokter4.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="profil.html" class="cart-btn">profil</a>
                            <a href="#" class="cart-btn">32thn</a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>dr.jennifer</h3>
                        <p>spesialis</p>
                        <div class="spesialis">dokter <span>hewan </span>kucing</div>
                    </div>
                </div>
            </div>
        </section>
        <!--DOCTOR section ends-->
    </body>
</html>