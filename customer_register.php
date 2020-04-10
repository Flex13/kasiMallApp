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

            <div class="col-md-9">
                <!-- col-md-9 Begin -->
                <div class="panel card">
                    <!-- box Begin -->

                    <div class="header-card">
                        <!-- box-header Begin -->
                        <center>
                            <!-- center Begin -->
                            <h2> Register A New Account</h2>
                        </center><!-- center Finish -->

                        <form action="customer_register.php.php" method="post" enctype="multipart/form-data">
                            <!-- form Begin -->
                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your Name</label>
                                <input type="text" class="form-control" name="C_name" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your Email</label>
                                <input type="email" class="form-control" name="c_email" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your Password</label>
                                <input type="password" class="form-control" name="c_password" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your Country</label>
                                <input type="text" class="form-control" name="c_country" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your City</label>
                                <input type="text" class="form-control" name="c_city" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your Contact Details</label>
                                <input type="tel" class="form-control" name="c_contact" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your Address</label>
                                <input type="text" class="form-control" name="c_address" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your Profile Picture</label>
                                <input type="file" name="c_image" required>
                            </div><!-- form-group Finish -->

                            

                            <div class="text-center my-3">
                                <!-- text-center Begin -->
                                <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="fa fa-user-md"></i> Register
                                </button>
                            </div><!-- text-center Finish -->

                        </form><!-- form Finish -->
                    </div>
                    <!-- box-header Begin -->
                </div>
                <!-- box End -->
            </div>
            <!-- col-md-9 End -->



        </div>
        <!-- row end -->
    </div>
    <!-- container End -->
</div>
<!-- #content End -->

<?php include 'includes/footer.php'; ?>