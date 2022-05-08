<?php include('path.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>

    <?php include(ROOT_PATH . '/app/includes/header.php'); ?>


    <section class="container">
        <div class="register-form">
            <h1>Login</h1>
            <form action="">
                <div>
                    <label for="">Email </label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="">Password </label>
                    <input type="password" name="password" id="password">
                </div>
                <div>
                    <button class="primary" name="login-btn">Login</button>
                </div>
                <p>Or <a href="<?php echo BASE_URL. '/register.php' ?>">Register</a></p>
            </form>
        </div>

    </section>

</body>

</html>