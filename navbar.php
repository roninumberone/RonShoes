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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../style.css" />
</head>

<body>
    <nav>
        <div class="navbar">
            <a href="../index.php">
                <img alt="RonShoes logo" src="../asset/logo.png" />
            </a>
            <div id="menu-icon-nav" class="menu-icon-nav">
                <i class="bi bi-list"></i>
            </div>
            <ul id="menu-list" class="hidden">
                <li>
                    <a href="../index.php"> Beranda </a>
                </li>
                <li>
                    <a href="../tentangkami.php"> Tentang Kami </a>
                </li>
                <li>
                    <a href="../produk.php"> Produk</a>
                </li>
                <li>
                    <a href="../toko.php"> Toko Kami</a>
                </li>
                <li>
                    <div class="akun">
                        <a href="../crud/akun.php">
                            <i class="bi bi-person-circle"></i>
                        </a>
                    </div>
                </li>
            </ul>


        </div>
    </nav>
    <script>
        const menuIcon = document.getElementById("menu-icon-nav");
        const menulist = document.getElementById("menu-list");
        menuIcon.addEventListener("click", () => {
            menulist.classList.toggle("hidden");
        });
    </script>
</body>

</html>