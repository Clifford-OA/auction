<?php include('path.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Create Auction Product</title>
</head>

<body>

<?php include(ROOT_PATH . '/app/includes/header.php'); ?>


    <section class="container">
        <div class="form">
            <form action="">
               <h1>Create Auction Product</h1>
                <div>
                    <label for="">Product Name </label>
                    <input type="text" name="name" id="name">
                </div>
                <div>
                    <label for="">Product Category </label>
                    <input type="text" name="name" id="name">
                </div>
                <div>
                    <label for="">Bidding End date/time: </label>
                    <input type="date" name="date" id="date">
                </div>
                <div>
                    <label for="">Starting Amount </label>
                    <input type="number" name="amount" id="amount">
                </div>
                <div>
                    <label for="">Description </label>
                    <textarea name="description" id="description" cols="30" rows="5"></textarea>
                </div>
                <div>
                    <label for="">Product image </label>
                    <input type="file" name="product-image" id="product-image">
                </div>
                <div>
                    <button class="primary">create</button>
                </div>
            </form>
        </div>
    </section>

      <!-- footer here -->
      <?php include(ROOT_PATH .'/app/includes/footer.php') ?>
</body>

</html>