<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- #content Begin -->
<div id="content">
    <!-- container Begin -->
    <div class="container">
        <!-- row Begin -->
        <div class="row">
            <!-- col-md-12 Begin -->
            <div class="col-md-12">
                <!-- breadcrumb Begin -->
                <ul class="breadcrumb">
                    <li>
                        <a class="p-1" href="index.php">Home </a>
                    </li>
                    <li>
                        Register
                    </li>
                </ul>
                <!-- breadcrumb Finish -->
            </div>
            <!-- col-md-12 Finish -->
        </div> <!-- row End -->

        <!-- row Begin -->
        <div class="row">

            <!-- col-md-3  col-lg-3  Sidbar Begin -->
            <div class="col-md-3 col-lg-3">
                <!-- col-md-3 Begin -->

                <?php

                include("includes/sidebar.php");

                ?>

            </div>
            <!-- col-md-3  col-lg-3  Sidbar End -->

            <div  class="col-md-9">
                <!-- col-md-9 Begin -->

                <?php

                if (!isset($_SESSION['customer_email'])) {

                    include("customer/customer_login.php");
                } else {
                    
                        include("payment_options.php");
                   
                }

                ?>

            </div>
            <!-- col-md-9 End -->



        </div>
        <!-- row end -->
    </div>
    <!-- container End -->
</div>
<!-- #content End -->



<?php include 'includes/footer.php'; ?>