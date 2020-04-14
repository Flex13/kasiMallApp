<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<?php Register::RegisterCustomer(); ?>

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

                        <form action="customer_register.php" method="post" enctype="multipart/form-data">
                            <!-- form Begin -->

                            <?php echo errorMessage(); ?>
                            <?php echo successMessage(); ?>

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Username</label>
                                <input type="text" class="form-control" name="c_username" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>First Name</label>
                                <input type="text" class="form-control" name="c_firstname" required>
                            </div><!-- form-group Finish -->

                            <!-- form Begin -->
                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Surname</label>
                                <input type="text" class="form-control" name="c_surname" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your Email</label>
                                <input type="email" class="form-control" name="c_email" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Contact Details</label>
                                <input type="tel" class="form-control" name="c_phone" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your Gender</label>
                                <select name="c_gender" class="form-control" required>
                                    <option value="">Please select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div><!-- form-group Finish -->



                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your Password</label>
                                <input type="password" class="form-control" name="c_password" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your Country</label>
                                <select name="c_country" class="form-control" required>
                                    <option value="South Africa">South Africa</option>
                                </select>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your City</label>
                                <input type="text" class="form-control" name="c_city" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Date of Birth</label><br>
                                <label for="day">Day:</label>
                                <select name="c_day" class="DOB">
                                    <?php
                                    for ($x = 1; $x <= 31; $x++) {
                                        if ($x == date("j")) echo "<option value='$x' selected>$x</option>";
                                        else echo "<option>$x</option>";
                                    }
                                    ?>
                                </select>

                                <label for="day">Month:</label>
                                <select name="c_month" class="DOB">
                                    <?php
                                    for ($x = 1; $x <= 12; $x++) {
                                        if ($x == date("m")) echo "<option value='$x' selected>$x</option>";
                                        else echo "<option>$x</option>";
                                    }
                                    ?>
                                </select>
                                <label for="day">Year:</label>
                                <select name="c_year" class="DOB">
                                    <?php
                                    for ($x = date("Y"); $x >= (date("Y") - 100); $x--) {
                                        echo "<option value='$x'>$x</option>";
                                    }
                                    ?>
                                </select>

                            </div><!-- form-group Finish -->



                            <div class="text-center my-3">
                                <!-- text-center Begin -->
                                <button type="submit" name="register" class="btn btn-primary">
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