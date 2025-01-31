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
                <a class="read-more" href="#"> Selengkapnya </a>
            </div>
            <model-viewer class="tiga-d" src="./asset/shoe.glb" alt="3D model of a shoe" camera-controls></model-viewer>
        </div>
        <video class="bg-video" autoplay loop muted>
            <source src="./asset/company.mp4" />
        </video>
    </section>

    <!-- tentang -->
    <div class="container" id="tentang">
        <div class="image-section">
            <img alt="Building Shoes" src="./asset/produksi.jpg" style="height: 100%" />
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
            <div class="card" style="width: 18rem">
                <img src="./asset/1a.webp" class="card-img-top" alt="Hi Black" />
                <div class="card-body">
                    <h5 class="card-title">Gazele Hi Black</h5>
                    <!-- <a href="./Produk/p_satu.php" class="btn btn-primary">Selengkapnya</a> -->
                </div>
            </div>
            <div class="card" style="width: 18rem">
                <img src="./asset/2a.webp" class="card-img-top" alt="Low Black" />
                <div class="card-body">
                    <h5 class="card-title">Gazele Low Black</h5>
                    <!-- <a href="./Produk/p_dua.php" class="btn btn-primary">Selengkapnya</a> -->
                </div>
            </div>
            <div class="card" style="width: 18rem">
                <img src="./asset/3a.webp" class="card-img-top" alt="Hi Cream" />
                <div class="card-body">
                    <h5 class="card-title">Gazele Hi Cream</h5>
                    <!-- <a href="./Produk/p_tiga.php" class="btn btn-primary">Selengkapnya</a> -->
                </div>
            </div>
            <div class="card" style="width: 18rem">
                <img src="./asset/4a.webp" class="card-img-top" alt="Velack" />
                <div class="card-body">
                    <h5 class="card-title">Velocity Black</h5>
                    <!-- <a href="./Produk/p_empat.php" class="btn btn-primary">Selengkapnya</a> -->
                </div>
            </div>
            <div class="card" style="width: 18rem">
                <img src="./asset/5a.webp" class="card-img-top" alt="Black White" />
                <div class="card-body">
                    <h5 class="card-title">Gazele Low BW</h5>
                    <!-- <a href="./Produk/p_lima.php" class="btn btn-primary">Selengkapnya</a> -->
                </div>
            </div>
        </div>
        <div id="layanan1"></div>
    </div>

    <!-- layanan -->
    <div class="lutama">
        <div class="layanan">
            <h1>LAYANAN</h1>
        </div>
        <div class="pembungkus">
            <div class="card">
                <div class="card-content">
                    <div class="card-title">Clean Shoes</div>
                    <div class="card-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
                        eius laborum itaque placeat aspernatur totam adipisci delectus id
                        doloremque in, dolores perferendis. Amet et neque, vitae ab earum
                        animi facere.
                    </div>
                    <a class="card-button" href="#">
                        Detail
                        <i class="fas fa-arrow-right"> </i>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-title">Kelas Program RonShoes</div>
                    <div class="card-description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus
                        porro nulla voluptatum odio ullam commodi perspiciatis
                        voluptatibus in. Ex eligendi dolore rerum reprehenderit quo ut ad
                        eum voluptates quia adipisci?
                    </div>
                    <a class="card-button" href="#">
                        Detail
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
</body>

</html>