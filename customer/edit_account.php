<?php 

$customer_session = $_SESSION['customer_email'];

$get_customer = "SELECT * FROM customers WHERE customer_email='$customer_session'";
$run_customer = mysqli_query($connect,$get_customer);
$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];
$customer_name = $row_customer['customer_name'];
$customer_surname = $row_customer['customer_surname'];
$customer_email = $row_customer['customer_email'];
$customer_contact = $row_customer['customer_phone'];
$customer_country = $row_customer['customer_country'];
$customer_city = $row_customer['customer_city'];
$customer_address = $row_customer['customer_address'];
$customer_image = $row_customer['customer_image'];

?>

<?php 

if(isset($_POST['update'])){
    
    $update_id = $customer_id;
    
    $c_name             = test_input($_POST['c_name']);
    $c_surname          = test_input($_POST['c_surname']);
    $c_email            = test_input($_POST['c_email']);
    $c_country          = test_input($_POST['c_country']);
    $c_city             = test_input($_POST['c_city']);
    $c_address          = test_input($_POST['c_address']);
    $c_contact          = test_input($_POST['c_phone']);
    $c_image            = $_FILES['c_image']['name'];
    $c_image_tmp        = $_FILES['c_image']['tmp_name'];
    
    move_uploaded_file ($c_image_tmp,"customer_images/$c_image");
    
    $update_customer = "UPDATE customers SET customer_name='$c_name',customer_surname='$c_surname',customer_email='$c_email',customer_country='$c_country',customer_city='$c_city',customer_address='$c_address',customer_phone='$c_contact',customer_image='$c_image' where customer_id='$update_id' ";
    
    $run_customer = mysqli_query($connect,$update_customer);
    
    if($run_customer){
        
        echo "<script>alert('Your account has been edited, to complete the process, please Relogin')</script>";
        
        echo "<script>window.open('../logout.php','_self')</script>";
        
    }
    
}
?>


<h1 align="center">Edit Your Account</h1>

<form action="" method="post" enctype="multipart/form-data">
                            <!-- form Begin -->
                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your Name</label>
                                <input type="text" class="form-control" value="<?php echo $customer_name; ?>" name="c_name" required>
                            </div><!-- form-group Finish -->

                            <!-- form Begin -->
                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your Surname</label>
                                <input type="text" class="form-control" value="<?php echo $customer_surname; ?>" name="c_surname" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your Email</label>
                                <input type="email" class="form-control" name="c_email" value="<?php echo $customer_email; ?>"  required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your Country</label>
                                <input type="text" class="form-control" name="c_country" value="<?php echo $customer_country; ?>" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your City</label>
                                <input type="text" class="form-control" name="c_city" value="<?php echo $customer_city; ?>" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your Address</label>
                                <input type="text" class="form-control" name="c_address" value="<?php echo $customer_address; ?>" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your Contact Details</label>
                                <input type="tel" class="form-control" name="c_phone" value="<?php echo $customer_contact; ?>"  required>
                            </div><!-- form-group Finish -->


                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your Profile Picture</label>
                                <input type="file" class="form-height-custom" name="c_image" required>
                                <img src="customer_images/<?php echo $customer_image; ?>" alt="Costumer Image" class="img-fluid" width="50%" alt="Customer Profile">
                            </div><!-- form-group Finish -->

                            

                            <div class="text-center my-3">
                                <!-- text-center Begin -->
                                <button type="submit" name="update" class="btn btn-primary btn-lg">
                                    <i class="fa fa-user-md"></i> Update Now
                                </button>
                            </div><!-- text-center Finish -->

                        </form><!-- form Finish -->