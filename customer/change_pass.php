<h1 align="center">Change Password</h1>

<form action="edit_account.php.php" method="post" enctype="multipart/form-data">
                            <!-- form Begin -->
                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your Old Password</label>
                                <input type="password" class="form-control" name="old_pass" required>
                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label>Your New Password</label>
                                <input type="password" class="form-control" name="new_pass" required>
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