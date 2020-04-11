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
                        My Account
                    </li>
                </ul>
                <!-- breadcrumb Finish -->
            </div>
            <!-- col-md-12 Finish -->
            <!-- col-md-3  col-lg-3  Sidbar Begin -->
            <div class="col-md-3 col-lg-3">
                <!-- col-md-3 Begin -->

                <?php

                include("includes/sidebar.php");

                ?>

            </div>
            <!-- col-md-3  col-lg-3  Sidbar End -->

            <div class="col-md-9">
                <!-- col-md-9 Begin -->
                <div class="box product-box">
                    <!-- box Begin -->
                    <?php
                    if (isset($_GET['my_orders'])) {
                        include("my_orders.php");
                    }
                    ?>

                    <?php
                    if (isset($_GET['pay_offline'])) {
                        include("pay_offline.php");
                    }
                    ?>

                    <?php
                    if (isset($_GET['edit_account'])) {
                        include("edit_account.php");
                    }
                    ?>

                    <?php
                    if (isset($_GET['change_pass'])) {
                        include("change_pass.php");
                    }
                    ?>

<?php
                    if (isset($_GET['delete_account'])) {
                        include("delete_account.php");
                    }
                    ?>
                </div><!-- box Finish -->
            </div><!-- col-md-9 Finish -->
        </div><!-- row End -->
    </div><!-- container End -->
</div><!-- #content End -->


<?php include 'includes/footer.php'; ?>