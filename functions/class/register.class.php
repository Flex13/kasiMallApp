<?php

class Register {


    function RegisterCustomer() {
        if (isset($_POST['register'])) {

            global $connect;
        
            $c_username         = test_input($_POST['c_username']);
            $c_firstname        = test_input($_POST['c_firstname']);
            $c_surname          = test_input($_POST['c_surname']);
            $c_email            = test_input($_POST['c_email']);
            $c_phone            = test_input($_POST['c_phone']);
            $c_gender            = test_input($_POST['c_gender']);
            $c_pass             = test_input($_POST['c_password']);
            $c_country          = test_input($_POST['c_country']);
            $c_city             = test_input($_POST['c_city']);
            $c_ip               = getRealIpUser();
            $c_day              = test_input($_POST['c_day']);
            $c_month            = test_input($_POST['c_month']);
            $c_year             = test_input($_POST['c_year']);
        
            if (!CheckUsername($c_username)) {
        
                if (Username($c_username)) {
        
                    if (strlen($c_username) >= 3 && strlen($c_username) <= 32) {
        
                        if (Name($c_firstname)) {
        
                            if (Surname($c_surname)) {
        
                                if (!CheckEmail($c_email)) {
        
                                    if (valid_email($c_email)) {
        
                                        if (checkPassword($c_pass)) {
        
        
                                            if (strlen($c_pass) >= 6) {
        
                                                if (!empty($c_country)) {
        
                                                    if (!empty($c_city)) {
        
                                                        if (checkAge($c_day, $c_month, $c_year)) {
        
                                                            $c_dob = $c_year . "-" . $c_month . "-" . $c_day;
                                                            $password = md5($c_pass);
        
        
                                                        $insert_customer = "INSERT INTO customers (customer_username,customer_name,customer_surname,customer_email,customer_phone,customer_dob,customer_gender,customer_password,customer_country,customer_city,customer_reg_date,customer_image,customer_ip) values ('$c_username','$c_firstname','$c_surname','$c_email','$c_phone','$c_dob','$c_gender','$password','$c_country','$c_city',NOW(),'avatar.png',$c_ip')";
        
                                                        $run_customer = mysqli_query($connect, $insert_customer);
                                                        $sel_cart = "SELECT * FROM cart WHERE ip_add='$c_ip'";
                                                        $run_cart = mysqli_query($connect, $sel_cart);
                                                        $check_cart = mysqli_num_rows($run_cart);
        
                                                        if ($check_cart > 0) {
                                                            /// If register have items in cart ///
        
                                                            $_SESSION['customer_email'] = $c_email;
                                                            $_SESSION["successMessage"] = "You have been Registered Successfully";
                                                            echo "<script>window.open('checkout.php','_self')</script>";
                                                            exit(); // Quit the script.
                                                        } else {
                                                            /// If register without items in cart ///
                                                            $_SESSION['customer_email'] = $c_email;
                                                            $_SESSION["successMessage"] = "You have been Registered Successfully";
                                                            echo "<script>window.open('index.php','_self')</script>";
                                                        }
                                                    } else {
                                                        $_SESSION["errorMessage"] = "You must be older the 15 year";
                                                    }
                                                } else {
                                                    $_SESSION["errorMessage"] = "Please enter City";
                                                }
                                            } else {
                                                $_SESSION["errorMessage"] = "Please enter country";
                                            }
                                        } else {
                                            $_SESSION["errorMessage"] = "Password must be greater greater the 6 characters";
                                        }
                                    } else {
                                        $_SESSION["errorMessage"] = "Please include at least 1 uppercase character, 1 lowercase character, and 1 number.";
                                    }
                                } else {
                                    $_SESSION["errorMessage"] = "Enter a valid email";
                                }
                            } else {
                                $_SESSION["errorMessage"] = "Email already exits";
                            }
                        } else {
                            $_SESSION["errorMessage"] = "Enter Valid Surname";
                        }
                    } else {
                        $_SESSION["errorMessage"] = "Enter Valid First Name";
                    }
                } else {
                    $_SESSION["errorMessage"] = "username must be between 3 and 32 characters";
                }
            } else {
                $_SESSION["errorMessage"] = "Enter valid username";
            }
        } else {
            $_SESSION["errorMessage"] = "Username exists";
        }
        mysqli_close($connect);
        // End of the main Submit conditional. // End of the main Submit conditional.
    }

}
}
