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
    <?php include_once './navbar.php'; ?>

    <!-- produk -->
    <div class="product-file">
        <div class="container-produk">
            <div class="product">
                <img alt="" height="300" src="./asset/1a.webp" width="400" />
                <div class="product-name">
                    Gazele Hi Black
                </div>
                <div class="product-price">
                    IDR 438,000
                </div>
                <a href="./Produk/p_satu.php" class="button-buy">
                    Beli
                </a>
            </div>
            <div class="product">
                <img alt="" height="300" src="./asset/2a.webp" width="400" />
                <div class="product-name">
                    Gazele Low Black
                </div>
                <div class="product-price">
                    IDR 408,000
                </div>
                <a href="./Produk/p_dua.php" class="button-buy">
                    Beli
                </a>
            </div>
            <div class="product">
                <img alt="" height="300" src="./asset/3a.webp" width="400" />
                <div class="product-name">
                    Gazele Hi Cream
                </div>
                <div class="product-price">
                    IDR 438,000
                </div>
                <a href="./Produk/p_tiga.php" class="button-buy">
                    Beli
                </a>
            </div>
            <div class="product">
                <img alt="" height="300" src="./asset/4a.webp" width="400" />
                <div class="product-name">
                    Velocity Black
                </div>
                <div class="product-price">
                    IDR 798,000
                </div>
                <a href="./Produk/p_empat.php" class="button-buy">
                    Beli
                </a>
            </div>
            <div class="product">
                <img alt="" height="300" src="./asset/5a.webp" width="400" />
                <div class="product-name">
                    Gazele Low BW
                </div>
                <div class="product-price">
                    IDR 408,000
                </div>
                <a href="./Produk/p_lima.php" class="button-buy">
                    Beli
                </a>
            </div>
            <div class="product">
                <img alt="" height="300" src="./asset/6a.webp" width="400" />
                <div class="product-name">
                    Tribune Home Away
                </div>
                <div class="product-price">
                    IDR 598,000
                </div>
                <a href="./Produk/p_enam.php" class="button-buy">
                    Beli
                </a>
            </div>
            <div class="product">
                <img alt="" height="300" src="./asset/7a.webp" width="400" />
                <div class="product-name">
                    Socks Low
                </div>
                <div class="product-price">
                    IDR 88,000
                </div>
                <a href="./Produk/p_tujuh.php" class="button-buy">
                    Beli
                </a>
            </div>
            <div class="product">
                <img alt="" height="300" src="./asset/8a.webp" width="400" />
                <div class="product-name">
                    Shoelace
                </div>
                <div class="product-price">
                    IDR 58,000
                </div>
                <a href="./Produk/p_delapan.php" class="button-buy">
                    Beli
                </a>
            </div>
            <div class="product">
                <img alt="" height="300" src="./asset/9a.webp" width="400" />
                <div class="product-name">
                    Velocity Keychain
                </div>
                <div class="product-price">
                    IDR 38,000
                </div>
                <a href="./Produk/p_sembilan.php" class="button-buy">
                    Beli
                </a>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php include './footer.php'; ?>
    <!-- flowise ai -->
    <?php include './flowise.php'; ?>
    <!-- script -->
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
</body>

</html>