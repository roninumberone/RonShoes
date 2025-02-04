<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RonShoes</title>
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
    <?php include './navbar.php' ?>

    <!-- toko resmi -->
    <div class="container-toko">
        <h1>
            Tersedia di Marketplace
        </h1>
        <p>
            Pilih Official Store kami di bawah ini
        </p>
        <div class="marketplace-logos">
            <img alt="WhatsApp logo" height="100" src="./asset/wa.png" width="210" />
            <img alt="Shopee logo" height="100" src="./asset/shopee.png" width=200" />
            <img alt="TikTok Shop logo" height="100" src="./asset/tiktok.png" width="220" />
            <img alt="Tokopedia logo" height="100" src="./asset/tokopedia.png" width="210" />
            <img alt="Lazada logo" height="100" src="./asset/lazada.png" width="200" />
            <img alt="Blibli logo" height="100" src="./asset/blibli.png" width="200" />
            <img alt="Bukalapak logo" height="100" src="./asset/bukalapak.png" width="200" />
        </div>
        <div class="toko-offline">
            <h1>
                Tersedia di Toko Offline
            </h1>
            <p>
                Pilih Official Store kami di bawah ini
            </p>
            <div class="detail-toko-of">
                <div class="card">
                    <div class="card-content">
                        <div class="card-title">JAWA BARAT</div>
                        <div class="card-description">
                            Jl.Siliwangi No 70 Bogor Selatan Lawanggintung Bogor Jawa Barat 16134, Jawa Barat, 16134
                            <br> Senin - Sabtu
                            <br> 09:00 - 21:00 WIB
                            <br> 6281120027043
                        </div>
                        <a class="card-button" href="#">
                            Lihat Lokasi
                            <i class="fas fa-arrow-right"> </i>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-title">SUMATERA</div>
                        <div class="card-description">
                            Jl. Let. Jend. Suprapto No 361 Pd. Hulu Pasar Gambir Tebing Tinggi Sumatera Utara 20632,
                            Sumatera Utara, 20628
                            <br> Senin - Sabtu
                            <br> 09:00 - 21:00 WIB
                            <br> 6281120008337
                        </div>
                        <a class="card-button" href="#">
                            lihat Lokasi
                            <i class="fas fa-arrow-right"> </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include './footer.php' ?>
</body>

</html>