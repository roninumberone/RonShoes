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
            <h1>Shoelace</h1>
            <p>
                premium shoelaces are provided to meet your needs. Made from cotton fibers, these laces add a unique
                texture and aesthetic to your RonShoes.
            </p>
            <p>Spesifikasi :</p>
            <ul>
                <li>• Cotton fibre</li>
                <li>• Custom logotype lace tip</li>
                <li>• Made in Indonesia</li>
            </ul>
            <p>Ukuran :</p>
            <ul>
                <li>• CM 120 / 5-6 eyelets</li>
                <li>• CM 130 / 6-7 eyelets</li>
                <li>• CM 150 / 7-8 eyelets</li>
                <li>• CM 170 / 8-9 eyelets</li>
            </ul>

        </div>
        <div class="foto-p">
            <img alt="." height="400" src="../asset/8a.webp" width="600" />
        </div>
        <div class="right-column">
            <p class="price">IDR 58,000</p>
            <p>SIZE:</p>
            <div class="size-buttons">
                <button>120</button>
                <button>130</button>
                <button>150</button>
                <button>170</button>
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