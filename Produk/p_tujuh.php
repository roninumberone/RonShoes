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

    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- navbar -->
    <?php include_once '../navbar.php'; ?>


    <div class="container" style="max-height: 500px;">
        <div class="left-column">
            <h1>Socks Low</h1>
            <p>
                Low Socks provides comfort and protection while letting your shoes take the spotlight.
            </p>
            <p>Spesifikasi :</p>
            <ul>
                <li>• Low-cut profile</li>
                <li>• Cotton material</li>
                <li>• Knitted logo</li>
                <li>• Made in Indonesia</li>
            </ul>
            <p>Catatan :</p>
            <p>
                Mengambil inspirasi dari tahun 1950-an, Gazelle Hi mengambil siluet ikonik dan menanamkannya dengan
                sentuhan RonShoes® yang berbeda. Untuk RonsShoes® Gazelle®: Kami merekomendasikan untuk mengecilkan satu
                ukuran dari
                dari ukuran yang Anda kenakan saat ini.
            </p>

        </div>
        <div class="foto-p">
            <img alt="." height="400" src="../asset/7a.webp" width="600" />
        </div>
        <div class="right-column">
            <p class="price">IDR 88,000</p>
            <p>SIZE:</p>
            <div class="size-buttons">
                <button>S</button>
                <button>M</button>
                <button>L</button>
                <button>XL</button>
            </div>
            <p>Warna:</p>
            <div class="size-buttons">
                <button>Black</button>
                <button>White</button>
            </div>
            <button class="bayar">Bayar</button>
        </div>
    </div>

    <!-- footer -->
    <?php include '../footer.php'; ?>

    <!-- icon -->
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</body>

</html>