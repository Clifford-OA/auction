<header>
    <div class="header-container">
        <div class="header-top">
            <h1><a style="text-decoration: none; color: #808080" href="<?php echo BASE_URL ?>">ONLINE AUCTION</a></h1>
            <div class="menu">
                <ul>
                    <li><a href="#">Home</a> </li>
                    <li class="active"><a href="#">Auction</a> </li>
                    <li><a href="#">Categories</a> </li>
                    <li><a href="#">Shops</a> </li>

                    <?php if (isset($_SESSION['id'])) : ?>
                        <li>
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <a href="#">
                                <?php echo $_SESSION['name']; ?>
                            </a>
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            <!-- logout dropdown here -->
                        </li>
                    <?php else : ?>
                        <li><i class="fa fa-user" aria-hidden="true"></i> <a href="<?php echo BASE_URL . '/login.php' ?>">Sign In</a> </li>

                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </div>
</header>