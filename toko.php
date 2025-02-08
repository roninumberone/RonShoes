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
            <a href="https://api.whatsapp.com/send/?phone=62881023664913&text&type=phone_number&app_absent=0">
                <img alt="WhatsApp logo" height="100" src="./asset/wa.png" width="210" />
            </a>
            <a href="https://shopee.co.id/">
                <img alt="Shopee logo" height="100" src="./asset/shopee.png" width=200" />
            </a>
            <a href="https://seller-id.tokopedia.com/">
                <img alt="TikTok Shop logo" height="100" src="./asset/tiktok.png" width="220" />
            </a>
            <a href="https://www.tokopedia.com/">
                <img alt="Tokopedia logo" height="100" src="./asset/tokopedia.png" width="210" />
            </a>
            <a href="https://www.lazada.co.id/">
                <img alt="Lazada logo" height="100" src="./asset/lazada.png" width="200" />
            </a>
            <a href="https://www.blibli.com/">
                <img alt="Blibli logo" height="100" src="./asset/blibli.png" width="200" />
            </a>
            <a href="https://www.bukalapak.com/">
                <img alt="Bukalapak logo" height="100" src="./asset/bukalapak.png" width="200" />
            </a>
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
                            <i class="bi bi-geo-alt-fill"></i> Jl. Let. Jend. Suprapto No 361 Pd. Hulu Pasar Gambir
                            Tebing Tinggi Sumatera Utara 20632,
                            Sumatera Utara, 20628
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
    </div>

    <!-- footer -->
    <?php include './footer.php' ?>
</body>

</html>