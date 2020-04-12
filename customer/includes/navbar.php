<body>
    <!-- Top Nav -->
    <div id="top">
        <!-- Container Begin -->
        <div class="container-fluid">
            <!-- Container Row Begin -->
            <div class="row">
                <!-- Col 6 Offer Begin -->
                <div class="col-md-6 offer">
                <a href="#" class="btn btn-success btn-sm">Welcome</a>
                <a href="cart.php"><?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?> </a>
                </div>
                <!-- End Col 6 Offer Begin -->
                <!-- col-md-6 Begin -->
                <div class="col-md-6">
                    <!-- cmenu Begin -->
                    <ul class="menu">
                        <li>
                            <a href="../customer_register.php">Register</a>
                        </li>
                        <li>
                            <a href="../Merchant.php">Merchant</a>
                        </li>
                        <li>
                            <a href="../checkout.php">Driver</a>
                        </li>
                        <li>
                            <a href="my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="../cart.php"><i class="fa fa-shopping-cart"></i> Go To Cart</a>
                        </li>
                        <li>
                            <a href="checkout.php">Login</a>
                        </li>
                    </ul>
                    <!-- menu Finish -->
                </div><!-- col-md-6 Finish -->
            </div><!-- End Container Row Begin -->
        </div><!-- End Container Begin -->
    </div><!-- End Top Nav -->

    <!-- Brand Nav start -->
    <section>
        <div class="container-fluid center justify-content-center" style="margin: 0 auto;">
            <div class="brand">
                <center><a href="../index.php">KASI MALL ONLINE</a></center>
            </div>
        </div>
    </section>
    <!-- Brand Nav End -->

    <!-- Main Nav start -->
    <section>
        <div class="navbar navbar-expand-lg nav justify-content-center sticky-top">
            <div class="container-fluid m-0 p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapseCMS">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarcollapseCMS">
                    <ul class="navbar-nav mx-auto">
                        <li >
                            <a href="../index.php" class="nav-link">Home</a>
                        </li>
                        <li>
                            <a href="../shop.php" class="nav-link">Shop</a>
                        </li>
                        <li class="active">
                            <a href="customer/my_account.php" class="nav-link">My Account</a>
                        </li>
                        <li >
                            <a href="../cart.php" class="nav-link">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="../contact.php" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
    </section>
    <!-- Main Nav start -->