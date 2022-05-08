<?php include('path.php'); ?>

<?php include(ROOT_PATH . '/app/controllers/users.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Online Auction</title>
</head>

<body>

    <?php include(ROOT_PATH . '/app/includes/header.php'); ?>


    <section class="container">
        <div class="register-form">
            <h1>Register</h1>
            <form action="register.php" method="post">

                <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>


                <div>
                    <label for="">Full Name </label>
                    <input type="text" value="<?php echo $name; ?>" name="name" id="name">
                </div>
                <div>
                    <label for="">Email </label>
                    <input type="email" value="<?php echo $email; ?>" name="email" id="email">
                </div>
                <div>
                    <label for="">Contact </label>
                    <input type="number" value="<?php echo $contact; ?>" name="contact" id="contact">
                </div>
                <div>
                    <label for="">User Type </label>
                    <select name="userType">
                        <option value="user" selected>User</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div>
                    <label for="">Password </label>
                    <input type="password"  value="<?php echo $password; ?>" name="password" id="password">
                </div>
                <div>
                    <label for="">Password Confirmation</label>
                    <input type="password"  value="<?php echo $passwordConf; ?>" name="passwordConf" id="passwordConf">
                </div>
                <div>
                    <button class="primary" type="submit" name="register-btn">Register</button>
                </div>
                <p>Or <a href="<?php echo BASE_URL . '/login.php' ?>">Sign In</a></p>
            </form>
        </div>
    </section>

</body>

</html>