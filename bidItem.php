<?php include('path.php'); ?>

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

        <div class="biding-row">
            <div class="product-description">
                <div class="description-header">
                    <h2>Product Details</h2>
                </div>
                <div class="description-main">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/310408/psychopomp-100.jpg" alt="Psychopomp" />
                    <hr>
                    <div class="items">
                        <b>Title</b>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Facilis explicabo veniam assumenda hic tenetur qui! </p>
                        </div>
                    </div>
                    <hr>
                    <div class="items">
                        <b>Title</b>
                        <div class="desc">
                            <p>This is the </p>
                        </div>
                    </div>
                    <hr>

                </div>
            </div>
            <div class="product-description">
                <div class="description-header">
                    <h2>Product Timer</h2>
                </div>
                <div class="timer-div">
                    <h3>The time left here</h3>
                </div>
                <hr>
                <div class="items">
                    <b>Title</b>
                    <div class="desc">
                        <p>This is the </p>
                    </div>
                </div>
                <hr>
                <div class="slide">
                    <section title=".slideThree">
                        <!-- .slideThree -->
                        <div class="slideThree">
                            <input onclick="toggleBidForm()" type="checkbox" value="None" id="slideThree" name="check" />
                            <label onclick="toggleBidForm()" for="slideThree">Bid</label>
                        </div>
                        <!-- end .slideThree -->
                    </section>
                </div>
                <div class="bid-form" id="bid-form">
                    <form action="">
                        <h1>Send Your Bid</h1>
                        <div>
                            <label for="">Name: </label>
                            <input type="text" name="name" id="name">
                        </div>
                        <div>
                            <label for="">Category: </label>
                            <input type="text" name="name" id="name">
                        </div>
                        <div>
                            <button class="primary">bid</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer here -->
    <?php include(ROOT_PATH . '/app/includes/footer.php') ?>


    <script src="./assets/js/scripts.js"></script>
</body>

</html>