 <?php
    include('path.php');
    include(ROOT_PATH . '/app/database/db.php');
    ?>

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
     <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>


     <section class="container">
         <div class="row">
             <div class="left-side-panel">
                 <h3>All Categories</h3>
                 <div class="cat-list">
                     <li>Phone</li>
                     <li>Tablet</li>
                     <li>E-book</li>
                     <li>condom</li>
                 </div>
                 <hr>
                 <div class="radio-buttons">
                     <div class="button">
                         <input type="checkbox" name="Fixed price" id="fixedPrice">
                         <label for="show">Fixed price</label>
                     </div>
                     <div class="button">
                         <input type="checkbox" name="Fixed price" id="fixedPrice">
                         <label for="show">Reveal</label>
                     </div>
                     <div class="button">
                         <input type="checkbox" name="Fixed price" id="fixedPrice">
                         <label for="show">Penny</label>
                     </div>
                     <div class="button">
                         <input type="checkbox" name="Fixed price" id="fixedPrice">
                         <label for="show">Classic</label>
                     </div>

                 </div>
             </div>
             <div class="right-side-panel">
                 <div class="card-list">
                     <li class="card">
                         <a class="card-image" href="bidItem.html">
                             <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/310408/psychopomp-100.jpg" alt="Psychopomp" />
                         </a>
                         <a class="card-description" href="bidItem.html">
                             <h2>Psychopomp</h2>
                             <div style="padding: 3px;">
                                 <b>time to end: </b>
                                 <span> 12-2-2020</span>
                             </div>
                             <div style="padding: 3px;">
                                 <b>current price: Ghc</b>
                                 <span> 2,000</span>
                             </div>
                         </a>
                     </li>
                     <li class="card">
                         <a class="card-image" href="bidItem.html">
                             <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/310408/psychopomp-100.jpg" alt="Psychopomp" />
                         </a>
                         <a class="card-description" href="bidItem.html">
                             <h2>Psychopomp</h2>
                             <div style="padding: 3px;">
                                 <b>time to end: </b>
                                 <span> 12-2-2020</span>
                             </div>
                             <div style="padding: 3px;">
                                 <b>current price: Ghc</b>
                                 <span> 2,000</span>
                             </div>
                         </a>
                     </li>
                     <li class="card">
                         <a class="card-image" href="bidItem.html">
                             <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/310408/psychopomp-100.jpg" alt="Psychopomp" />
                         </a>
                         <a class="card-description" href="bidItem.html">
                             <h2>Psychopomp</h2>
                             <div style="padding: 3px;">
                                 <b>time to end: </b>
                                 <span> 12-2-2020</span>
                             </div>
                             <div style="padding: 3px;">
                                 <b>current price: Ghc</b>
                                 <span> 2,000</span>
                             </div>
                         </a>
                     </li>
                     <li class="card">
                         <a class="card-image" href="bidItem.html">
                             <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/310408/psychopomp-100.jpg" alt="Psychopomp" />
                         </a>
                         <a class="card-description" href="bidItem.html">
                             <h2>Psychopomp</h2>
                             <div style="padding: 3px;">
                                 <b>time to end: </b>
                                 <span> 12-2-2020</span>
                             </div>
                             <div style="padding: 3px;">
                                 <b>current price: Ghc</b>
                                 <span> 2,000</span>
                             </div>
                         </a>
                     </li>
                 </div>
             </div>
         </div>
     </section>

     <!-- footer here -->
     <?php include(ROOT_PATH . '/app/includes/footer.php') ?>

 </body>

 </html>