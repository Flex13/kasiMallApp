<?php

if (isset($_POST['login'])) {

    $customer_email_username     = test_input($_POST['c_email_username']);
    $customer_pass      = test_input($_POST['c_pass']);


    if (!empty($customer_email_username)) {
        if (!empty($customer_pass)) {
            if (CheckEmailUsername($customer_email_username)) { 

                if (passwordcheck($customer_pass,$customer_email_username )) {
                    global $connect;
                    $password = md5($customer_pass);

                    $select_customer = "SELECT * FROM customers WHERE customer_email='$customer_email_username' OR customer_username='$customer_email_username'  AND customer_password='$password'";
                    $run_customer = mysqli_query($connect, $select_customer);
                
                    $get_ip = getRealIpUser();
                    $check_customer = mysqli_num_rows($run_customer);
                
                    $select_cart = "SELECT * FROM cart WHERE ip_add='$get_ip'";
                    $run_cart = mysqli_query($connect, $select_cart);
                
                    $check_cart = mysqli_num_rows($run_cart);
                
                    if ($check_customer == 0) {
                
                        $_SESSION["errorMessage"] = "Your email/username and password is wrong";
                        exit();
                    }
                    if ($check_customer == 1 and $check_cart == 0) {
                
                        $_SESSION['customer_email'] = $customer_email_username;
                        $_SESSION["successMessage"] = "You are logged in";
                        echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
                    } else {
                        $_SESSION['customer_email'] = $customer_email_username;
                        $_SESSION["successMessage"] = "You are logged in";
                        echo "<script>window.open('checkout.php','_self')</script>";
                    }
                } else {
                    $_SESSION["errorMessage"] = "Incorrect Password";
                }
            } else {
                $_SESSION["errorMessage"] = "User does not exist";
            }
        } else {
            $_SESSION["errorMessage"] = "Please enter your password";
        }
    } else {
        $_SESSION["errorMessage"] = "Please enter your email/username";
    }
}

?>



<div class="panel card">
    <!-- box Begin -->

    <div class="card-header">
        <!-- box-header Begin -->

        <center>
            <!-- center Begin -->
            <h1> Login </h1>
            <p class="lead"> Already have our account..? </p>
            <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, maxime. Laudantium omnis, ullam, fuga officia provident error corporis consectetur aliquid corrupti recusandae minus ipsam quasi. Perspiciatis nemo, nostrum magni odit! </p>
        </center><!-- center Finish -->

    </div><!-- box-header Finish -->
<div class="card-body">
    <form method="post" action="checkout.php">
        <!-- form Begin -->
        <?php echo errorMessage(); ?>
                            <?php echo successMessage(); ?>

        <div class="form-group">
            <!-- form-group Begin -->
            <label> Email </label>
            <input name="c_email_username" type="test" class="form-control" required>
        </div><!-- form-group Finish -->

        <div class="form-group">
            <!-- form-group Begin -->
            <label> Password </label>
            <input name="c_pass" type="password" class="form-control" required>
        </div><!-- form-group Finish -->

        <div class="text-center">
            <!-- text-center Begin -->

            <button name="login" value="Login" class="btn btn-primary">
                <i class="fa fa-sign-in"></i> Login
            </button>

        </div><!-- text-center Finish -->

    </form><!-- form Finish -->

    <center>
        <!-- center Begin -->

        <a href="customer_register.php">
            <h3> Dont have account..? Register here </h3>
        </a>

    </center><!-- center Finish -->
    </div>
</div><!-- box Finish -->

