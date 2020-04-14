    <!-- #footer Begin -->
    <footer id="footer">
        <!-- container Begin -->
        <div class="container justify-content-center text-center">
            <!-- row Begin -->
            <div class="row text-center">
                <!-- col-sm-6 col-md-3 col-lg-3 Begin -->
                <div class="col-sm-6 col-md-3 col-lg-3">
                <h4>Pages</h4>
                <!-- ul Begin -->
                <ul>
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="customer/my_account.php">My Account</a></li>
                </ul>
                <!-- ul Finish -->
                <hr>

                <h4>User Section</h4>
                <!-- ul Begin -->
                <ul>
                    <li><a href="checkout.php">Login</a></li>
                    <li><a href="customer_register">Register</a></li>
                </ul>
                <!-- ul Finish -->

                <hr class=".d-none">

                </div>
                <!-- col-sm-6 col-md-3 col-lg-3 Begin -->

                <!-- col-sm-6 col-md-3 col-lg-3 Begin -->
                <div class="com-sm-6 col-md-3 col-lg-3 ">
                <h4>Top Categories</h4>
                <!-- ul Begin -->
                <ul>
                <?php 
                    
                    $get_p_cats = "SELECT * FROM product_categories";
                    $run_p_cats = mysqli_query($connect,$get_p_cats);
                
                    while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                        
                        $p_cat_id = $row_p_cats['p_cat_id'];
                        $p_cat_title = $row_p_cats['p_cat_title'];
                        
                        echo "
                            <li>
                                <a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a>
                            </li>
                        ";
                    }
                
                ?>
            
                </ul>
                <!-- ul Finish -->
                <hr class="d-md-none .d-lg-none">
            </div>
            <!-- col-sm-6 col-md-3 col-lg-3 Finish -->
            <!-- col-sm-6 col-md-3 col-lg-3 Begin -->
            <div class="col-sm-6 col-md-3 col-lg-3">
                <h4>Find Us</h4>
                <!-- p Start -->
                <p>
                    <strong>Kasi Mall Online</strong>
                    <br/>Vanderbiljpark
                    <br/>063-930-5623
                    <br/>kasimaill.co.za
                    <br/><strong>Sibanye Bukani</strong>
                </p>
                <!-- p Finish -->
                <a href="contact.php">Check Our Contact Page</a>
                <hr class="d-md-none .d-lg-none">
            </div>
            <!-- col-sm-6 col-md-3 col-lg-3 Finish -->
            <!-- col-sm-6 col-md-3 col-lg-3 Finish -->
            <div class="col-sm-6 col-md-3 col-lg-3">
            <h4>Get The News</h4>
                <p>Don't miss our latest updates.</p>
                <!-- form begin -->
                <form action="" method="post">
                    <!-- input-group begin -->
                    <div class="input-group">
                        
                        <input type="text" class="form-control" name="email">
                        <!-- input-group-btn begin -->
                        <span class="input-group-btn">
                            <input type="submit" value="subscribe" class="btn btn-default">
                        </span>
                        <!-- input-group-btn Finish -->
                    </div>
                    <!-- input-group Finish -->
                </form>
                <!-- form Finish -->

                <hr>
                
                <h4>Keep In Touch</h4>
                
                <p class="social">
                    <a href="#" class="icon1 fab  fa-facebook"></a>
                    <a href="#" class="icon1 fab fa-twitter"></a>
                    <a href="#" class="icon1 fab fa-instagram"></a>
                </p>

            </div>
            <!-- col-sm-6 col-md-3 col-lg-3 End -->

            </div>
            <!-- row End -->
        </div>
        <!-- container End -->
    </footer>
    <!-- #footer End -->
    <!-- #copyright Begin -->
    <section id="copyright">
    <!-- container Begin -->
    <div class="container">
        <!-- col-md-6 Begin -->
        <div class="col-md-6">
            <p class="pull-left">&copy; 2020 BukaniTechSolutions All Rights Reserve</p>
        </div>
        <!-- col-md-6 Finish -->
        <!-- col-md-6 Begin -->
        <div class="col-md-6">
            <p class="pull-right">Theme by: <a href="#">Sibanye Bukani</a></p>
        </div>
        <!-- col-md-6 Finish -->
    </div>
    <!-- container Finish -->
</section>
<!-- #copyright Finish -->
    
    
    
    
    
    
    
    
    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/jquery/jquery-3.4.1.min.js"></script>
    <script src="app.js"></script>

    <script type="text/javascript">
    $("#login").load("checkout.php #login");
    </script>
</body>

</html>