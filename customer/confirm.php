<?php

session_start();

if (!isset($_SESSION['customer_email'])) {

    echo "<script>window.open('../checkout.php','_self')</script>";
} else {
?>

    <?php include 'includes/header.php'; ?>
    <?php include 'includes/navbar.php'; ?>
    <?php
    if (isset($_GET['order_id'])) {

        $order_id = $_GET['order_id'];
    }
    ?>
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
                        <h1 align="center"> Please confirm your payment</h1>
                        <?php

                        if (isset($_POST['confirm_payment'])) {

                            global $connect;

                            $update_id          = $_GET['update_id'];
                            $invoice_no         = test_input($_POST['invoice_no']);
                            $amount             = test_input($_POST['amount_sent']);
                            $payment_mode       = test_input($_POST['payment_mode']);
                            $ref_no             = test_input($_POST['ref_no']);
                            $code               = test_input($_POST['code']);
                            $payment_date       = test_input($_POST['date']);
                            $complete = "Complete";


                            $insert_payment = "INSERT INTO payments (invoice_no,amount,payment_mode,ref_no,code,payment_date) values ('$invoice_no','$amount','$payment_mode','$ref_no','$code','$payment_date')";
                            $run_payment = mysqli_query($connect, $insert_payment);

                            $update_customer_order = "UPDATE customer_orders SET order_status='$complete' WHERE order_id='$update_id'";
                            $run_customer_order = mysqli_query($connect, $update_customer_order);

                            $update_pending_order = "UPDATE pending_orders SET order_status='$complete' WHERE order_id='$update_id'";
                            $run_pending_order = mysqli_query($connect, $update_pending_order);

                            if ($run_pending_order) {

                                echo "<script>alert('Thank You for purchasing, your orders will be completed within 24 hours work')</script>";

                                echo "<script>window.open('my_account.php?my_orders','_self')</script>";
                            }
                        }

                        ?>
                        <form action="confirm.php?update_id=<?php echo $order_id;  ?>" method="post" enctype="multipart/form-data">
                            <!-- form Begin -->
                            <!-- form Begin -->
                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label> Invoice No: </label>
                                <input type="text" class="form-control" name="invoice_no" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label> Amount Sent: </label>
                                <input type="text" class="form-control" name="amount_sent" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label> Select Payment Mode: </label>
                                <select name="payment_mode" class="form-control">
                                    <!-- form-control Begin -->
                                    <option> Select Payment Mode </option>
                                    <option> Back Deposit </option>
                                    <option> Cash Delivery </option>
                                    <option> eWallet </option>
                                    <option> Cash Send </option>
                                </select><!-- form-control Finish -->
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label> Transaction / Reference ID: </label>
                                <input type="text" class="form-control" name="ref_no" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label> Omni Paisa / East Paisa: </label>
                                <input type="text" class="form-control" name="code" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label> Payment Date: </label>
                                <input type="date" class="form-control" name="date" required>
                            </div><!-- form-group Finish -->

                            <div class="text-center">
                                <!-- text-center Begin -->
                                <button class="btn btn-primary btn-lg" name="confirm_payment">
                                    <!-- tn btn-primary btn-lg Begin -->

                                    <i class="fa fa-user-md"></i> Confirm Payment
                                </button><!-- tn btn-primary btn-lg Finish -->
                            </div><!-- text-center Finish -->
                        </form><!-- form Finish -->



                    </div><!-- box Finish -->
                </div><!-- col-md-9 Finish -->







            </div><!-- row End -->
        </div><!-- container End -->
    </div><!-- #content End -->


    <?php include 'includes/footer.php'; ?>
<?php } ?>