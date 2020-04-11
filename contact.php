<?php $active='Contact'; ?>
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
                        Contact Us
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
                            <h2> Feel free to Contact Us</h2>
                            <p class="text-muted">
                                <!-- text-muted Begin -->
                                If you have any questions, feel free to contact us. Our Customer Service work <strong>24/7</strong>
                            </p><!-- text-muted Finish -->
                        </center><!-- center Finish -->

                        <form action="contact.php" method="post">
                            <!-- form Begin -->
                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Subject</label>
                                <input type="text" class="form-control" name="subject" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Message</label>
                                <textarea name="message" class="form-control"></textarea>
                            </div><!-- form-group Finish -->

                            <div class="text-center my-3">
                                <!-- text-center Begin -->
                                <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="fa fa-user-md"></i> Send Message
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