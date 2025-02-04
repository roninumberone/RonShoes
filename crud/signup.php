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
    <?php include '../navbar.php'; ?>


    <!-- signup -->
    <div class="pem-signin">
        <form class="form-r">
            <div class="logo_container"> <img src="../asset/logo.png" alt="">
                <p class="title-r">Register </p>
                <p class="message-r">Signup now and get full access to our web. </p>
            </div>

            <label>
                <input required="" placeholder="" type="text" class="input-r">
                <span>Name</span>
            </label>

            <label>
                <input required="" placeholder="" type="text" class="input-r">
                <span>Username</span>
            </label>


            <label>
                <input required="" placeholder="" type="text" class="input-r">
                <span>Email</span>
            </label>

            <label>
                <input required="" placeholder="" type="password" class="input-r">
                <span>Password</span>
            </label>
            <label>
                <input required="" placeholder="" type="password" class="input-r">
                <span>Confirm password</span>
            </label>
            <div class="sum-r">
                <button class="submit-r">Submit</button>
            </div>
            <p class="signin">Already have an acount ? <a href="./signin.php">Sign in</a> </p>
        </form>
    </div>

    <!-- footer -->
    <?php include '../footer.php'; ?>
</body>

</html>