<?php
session_start();
include("koneksi.php");

?>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>RonsShoes</title>
    <!-- google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <!-- cloudflare -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <!-- navbar -->
    <?php include './navbar.php'; ?>

    <!-- branda -->
    <section class="hero" id="beranda">
        <div class="hero-pem">
            <div class="hero-text">
                <h1>RonShoes Mampu Memproduksi Sepatu Dengan Kuantitas Terbaik</h1>
                <p>
                    RonShoes, Sebuah Brand Sepatu Vulacanized Lokal Diperkenalkan Pada
                    Tahun 2017 Oleh William, Seorang Pemilik Pabrik Sepatu Vulkanisir
                    Sejak Tahun 2000 Di Bandung, Jawa Barat. Internasional.
                </p>
                <a class="read-more" href="./tentangkami.php"> Selengkapnya </a>
            </div>
            <model-viewer class="tiga-d" src="./asset/shoe.glb" alt="3D model of a shoe" camera-controls></model-viewer>
        </div>
        <video class="bg-video" autoplay loop muted>
            <source src="./asset/company.mp4" />
        </video>
    </section>

    <!-- tentang -->
    <div class="container-t">
        <div class="image-section">
            <img alt="Buat Shoes" src="./asset/produksi.jpeg" width: 100%; />
        </div>
        <div class="text-section">
            <h1>Tentang</h1>
            <p>
                RonShoes memiliki berbagai macam jenis dan model yang cocok di gunakan
                untuk berbagai jenis kegiatan.
            </p>
            <p>
                Setiap pasang RonShoes melalui proses yang panjang dan detail, mulai
                dari pemilihan material, proses produksi hingga pemeriksaan kualitas
                yang sangat ketat. Hal ini dilakukan agar kualitas RonShoes terjaga
                dengan baik.
            </p>
            <p>
                Dengan sumber daya yang berlimpah RonShoes mampu memproduksi sepatu
                dengan kuantitas besar dan kualitas terbaik sehingga semua kalangan
                dapat memiliki sepatu berkualitas tinggi dengan harga yang terjangkau.
            </p>
        </div>
    </div>

    <!-- produk -->
    <div class="producs" id="produk">
        <h1>PRODUK</h1>
        <div class="produk-card">
            <div class="card-index" style="width: 18rem">
                <img src="./asset/1a.webp" class="card-img-top" alt="Hi Black" />
                <div class="card-body">
                    <h5 class="card-title">Gazele Hi Black</h5>

                </div>
            </div>
            <div class="card-index" style="width: 18rem">
                <img src="./asset/2a.webp" class="card-img-top" alt="Low Black" />
                <div class="card-body">
                    <h5 class="card-title">Gazele Low Black</h5>

                </div>
            </div>
            <div class="card-index" style="width: 18rem">
                <img src="./asset/3a.webp" class="card-img-top" alt="Hi Cream" />
                <div class="card-body">
                    <h5 class="card-title">Gazele Hi Cream</h5>

                </div>
            </div>
            <div class="card-index" style="width: 18rem">
                <img src="./asset/4a.webp" class="card-img-top" alt="Velack" />
                <div class="card-body">
                    <h5 class="card-title">Velocity Black</h5>

                </div>
            </div>
            <div class="card-index" style="width: 18rem">
                <img src="./asset/5a.webp" class="card-img-top" alt="Black White" />
                <div class="card-body">
                    <h5 class="card-title">Gazele Low BW</h5>

                </div>
            </div>
        </div>
        <div id="layanan1"></div>
    </div>

    <!-- layanan -->
    <div class="lutama">
        <div class="layanan">
            <h1>TOKO OFFLINE</h1>
        </div>
        <div class="detail-toko-of">
            <div class="card">
                <div class="card-content">
                    <div class="card-title">JAWA BARAT</div>
                    <div class="card-description">
                        <i class="bi bi-geo-alt-fill"></i> Jl.Siliwangi No 70 Bogor Selatan Lawanggintung Bogor Jawa
                        Barat 16134, Jawa Barat, 16134
                        <br> <i class="bi bi-calendar-check-fill"></i> Senin - Sabtu
                        <br> <i class="bi bi-alarm-fill"></i> 09:00 - 21:00 WIB
                        <br> <i class="bi bi-telephone-fill"></i> 6281120027043
                    </div>
                    <a class="card-button" href="https://maps.app.goo.gl/8tkBoN15s5dXk4nKA">
                        Lihat Lokasi
                        <i class="fas fa-arrow-right"> </i>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-title">SUMATERA</div>
                    <div class="card-description">
                        <i class="bi bi-geo-alt-fill"></i> Jl.Let.Jend. Suprapto No 361 Pd. Pasar Gambir
                        Sumatera Utara 20632, Sumatera Utara, 20628
                        <br><i class="bi bi-calendar-check-fill"></i> Senin - Sabtu
                        <br> <i class="bi bi-alarm-fill"></i> 09:00 - 21:00 WIB
                        <br><i class="bi bi-telephone-fill"></i> 6281120008337
                    </div>
                    <a class="card-button" href="https://maps.app.goo.gl/AdVVq5D4BfowgKjH8">
                        lihat Lokasi
                        <i class="fas fa-arrow-right"> </i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include './footer.php'; ?>
    <!-- script -->
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
    <!-- flowise ai -->
    <!-- <?php include './flowise.php'; ?> -->
</body>

</html>