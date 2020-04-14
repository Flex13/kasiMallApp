<?php 

if(isset($_POST['submit'])){
    
    global $connect;

    $c_email = $_SESSION['customer_email'];
    
    $c_old_pass             = test_input($_POST['old_pass']);
    $c_new_pass             = test_input($_POST['new_pass']);
    $c_new_pass_again       = test_input($_POST['new_pass_again']);

    $old_password = md5($c_old_pass);
    $new_password = md5($c_new_pass);
    
    $sel_c_old_pass = "SELECT * FROM customers WHERE customer_password='$old_password'";
    
    $run_c_old_pass = mysqli_query($connect,$sel_c_old_pass);
    
    $check_c_old_pass = mysqli_fetch_array($run_c_old_pass);
    
    if($check_c_old_pass==0){
        
        echo "<script>alert('Sorry, your current password is wrong. Please try again')</script>";
        
        exit();
        
    }
    
    if($c_new_pass!=$c_new_pass_again){
        
        echo "<script>alert('Sorry, your new password did not match')</script>";
        
        exit();
        
    }
    
    $update_c_pass = "UPDATE customers set customer_password='$new_password' WHERE customer_email='$c_email'";
    
    $run_c_pass = mysqli_query($connect,$update_c_pass);
    
    if($run_c_pass){
        
        echo "<script>alert('Your password has been updated')</script>";
        
        echo "<script>window.open('my_account.php?my_orders','_self')</script>";
        
    }
    
}

?>

<h1 align="center">Change Password</h1>

<form action="  " method="post" enctype="multipart/form-data">
                            <!-- form Begin -->
                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your Old Password</label>
                                <input type="text" class="form-control" name="old_pass" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your New Password</label>
                                <input type="text" class="form-control" name="new_pass" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Confirm New Password</label>
                                <input type="text" class="form-control" name="new_pass_again" required>
                            </div><!-- form-group Finish -->

                            <div class="text-center my-3">
                                <!-- text-center Begin -->
                                <button type="submit" name="submit" class="btn btn-primary btn-lg">
                                    <i class="fa fa-user-md"></i> Update Now
                                </button>
                            </div><!-- text-center Finish -->

                        </form><!-- form Finish -->