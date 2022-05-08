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
        <div class="bid-container">
            <h2>List of Bids</h2>
            <div class="search-div">
                <label for="search">Search:</label>
                <input type="text" name="search" id="search">
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Product</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sample Smart Phone</td>
                        <td>John Smith</td>
                        <td>7,000</td>
                        <td><span class="win">Wins in bidding</span></td>
                        <td>
                            <button>View Buyer Details</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Sample Smart Phone</td>
                        <td>John Smith</td>
                        <td>7,000</td>
                        <td><span class="ongoing">Bidding stage</span></td>
                        <td>
                            <button>View Buyer Details</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Sample Smart Phone</td>
                        <td>John Smith</td>
                        <td>7,000</td>
                        <td><span class="ongoing">Bidding Stage</span></td>
                        <td>
                            <button>View Buyer Details</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Sample Smart Phone</td>
                        <td>John Smith</td>
                        <td>7,000</td>
                        <td><span class="win">Wins in bidding</span></td>
                        <td>
                            <button>View Buyer Details</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- footer here -->
    <?php include(ROOT_PATH . '/app/includes/footer.php') ?>

</body>

</html>