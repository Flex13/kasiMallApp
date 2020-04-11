<h1 align="center">Edit Your Account</h1>

<form action="edit_account.php" method="post" enctype="multipart/form-data">
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
                                <input type="file" class="form-height-custom" name="c_image" required>
                                <img src="customer_images/avatar.png" class="img-fluid" width="50%" alt="kasi Profile">
                            </div><!-- form-group Finish -->

                            

                            <div class="text-center my-3">
                                <!-- text-center Begin -->
                                <button type="submit" name="submit" class="btn btn-primary btn-lg">
                                    <i class="fa fa-user-md"></i> Update Now
                                </button>
                            </div><!-- text-center Finish -->

                        </form><!-- form Finish -->