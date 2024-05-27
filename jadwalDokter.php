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
        <!--profil doctor starts-->
        <section class="profil" id="profil">
            <h1 class="heading">Jadwal <span>Paraktek</span></h1>
            <div class="box-container">
                <div class="user">
                    <img src=dokter1.webp alt="">
                    <div class="user-info">
                        <h3>dr.elizabeth</h3>
                        <a1>Id <span>dokter: 01|</span></a1>
                        <a href="data.html">Buat janji</a>
                    </div>
        
        <section class="tabel" id="tabel">
            <head>
                <table>
                    <h2>Table Jadwal Praktek</h2>
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
                <p>Dr. Elizabeth adalah seorang dokter hewan yang berbakat dan berdedikasi dalam bidangnya. Dengan latar belakang pendidikan yang kuat 
                    dan pengalaman klinis yang luas, dia telah menjadi salah satu ahli terkemuka dalam perawatan hewan.
                <p>Dr. Elizabeth menempuh pendidikan di salah satu sekolah kedokteran hewan terkemuka di negaranya. Sejak kecil, dia selalu memiliki minat yang mendalam dalam dunia hewan dan keinginan untuk membantu mereka. 
                    Ketertarikannya yang kuat terhadap ilmu kedokteran hewan membawanya untuk mengejar gelar dokter hewan dengan tekun.</p>
                <p>Setelah menyelesaikan pendidikan dasar, Dr. Elizabeth mendapatkan pengalaman praktis yang berharga melalui magang dan kerja di berbagai klinik hewan. 
                    Di sana, dia belajar langsung dari praktisi terbaik dalam bidangnya, memperoleh pemahaman yang mendalam tentang berbagai penyakit dan perawatan yang diperlukan oleh berbagai jenis hewan.</p>
                <p>Keahlian Dr. Elizabeth meluas dari pemeriksaan kesehatan rutin hingga penanganan kasus-kasus medis yang kompleks. Dia dikenal karena keahliannya dalam mendiagnosis masalah kesehatan hewan 
                    dan merancang rencana perawatan yang efektif. Ketelitiannya dan ketepatan diagnosanya membuatnya menjadi pilihan utama bagi pemilik hewan yang mencari perawatan terbaik untuk hewan kesayangan mereka.</p>
                <p>Selain menjadi seorang praktisi yang cakap, Dr. Elizabeth juga sangat peduli terhadap kesejahteraan hewan. Dia secara aktif terlibat dalam kegiatan advokasi dan penyuluhan untuk meningkatkan pemahaman masyarakat 
                    tentang kebutuhan hewan dan pentingnya perawatan yang baik. Keberhasilannya dalam mengintegrasikan keahlian klinisnya dengan advokasi untuk kesejahteraan hewan telah membuatnya dihormati di kalangan rekan-rekannya serta komunitas pecinta hewan.</p>
                <p>Dr. Elizabeth adalah contoh yang menginspirasi dalam dunia kedokteran hewan. Dengan komitmen yang tak tergoyahkan terhadap profesi dan cintanya yang mendalam terhadap hewan, dia terus berkontribusi pada perbaikan kesehatan dan kesejahteraan hewan di masyarakat.</p>
                </p>
            </div>

        <!--profil doctor ends-->

    </body>
</html>