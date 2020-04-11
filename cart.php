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
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Cart
                    </li>
                </ul>
                <!-- breadcrumb Finish -->
            </div>
            <!-- col-md-12 Finish -->
        </div>
        <!-- row End -->
        <!-- row Begin -->
        <div class="row">
        <!-- col-md-9 Begin -->
        <div id="cart" class="col-md-9 col-lg-9 col-xl-9">
            <!-- box Begin -->
            <div class="box product-box">

                <form action="cart.php" method="post" enctype="multipart/form-data">
                    <!-- form Begin -->

                    <h1>Shopping Cart</h1>
                    <p class="text-muted">You currently have 1 item(s) in your cart</p>
                    <div class="table-responsive">
                        <!-- table-responsive Begin -->
                        <table class="table">
                            <!-- table Begin -->
                            <thead>
                                <!-- thead Begin -->
                                <tr>
                                    <!-- tr Begin -->
                                    <th colspan="2">Product</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Size</th>
                                    <th colspan="1">Delete</th>
                                    <th colspan="2">Sub-Total</th>
                                </tr><!-- tr Finish -->
                            </thead><!-- thead Finish -->

                            <tbody>
                                <!-- tbody Begin -->
                                <tr>
                                    <!-- tr Begin -->
                                    <td><img class="img-fluid" src="admin_area/product_images/food.jpg" alt="Product 3a"> </td>
                                    <td><a href="#">Amapapa</a></td>
                                    <td>2</td>
                                    <td>R40</td>
                                    <td>Large</td>
                                    <td><input type="checkbox" name="remove[]"></td>
                                    <td>R40</td>
                                </tr><!-- tr Finish -->
                            </tbody><!-- tbody Finish -->
                            <tbody>
                                <!-- tbody Begin -->
                                </tfoot><!-- tfoot Finish -->
                        </table><!-- table Finish -->
                    </div><!-- table-responsive Finish -->

                    <div class="box-footer">
                        <!-- box-footer Begin -->
                        <div class="pull-left btn-secondary-left">
                            <!-- pull-left Begin -->
                            <a href="index.php" class="btn btn-secondary">
                                <!-- btn btn-default Begin -->
                                <i class="fa fa-chevron-left"></i> Continue Shopping
                            </a><!-- btn btn-default Finish -->
                        </div><!-- pull-left Finish -->

                        <div class="pull-right">
                            <!-- pull-right Begin -->
                            <button type="submit" name="update" value="Update Cart" class="btn btn-info">
                                <!-- btn btn-default Begin -->
                                <i class="fa fa-chevron-up"></i> Update Cart
                            </button><!-- btn btn-default Finish -->
                            <a href="checkout.php" class="btn btn-primary">
                                Proceed Checkout <i class="fa fa-chevron-right"></i>
                            </a>
                        </div><!-- pull-right Finish -->
                    </div><!-- box-footer Finish -->
                </form><!-- form Finish -->

                <!-- box End -->
            </div>
            

            <div id="row same-heigh-row" class="row">
                    <!-- #row same-heigh-row Begin -->
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <!-- col-md-3 col-sm-6 col-lg-3 Begin -->
                        <div class="box product-box same-height headline">
                            <!-- box same-height headline Begin -->
                            <h3 class="text-center">Products You Maybe Like</h3>
                        </div><!-- box same-height headline Finish -->
                    </div><!-- col-md-3 col-sm-6 Finish -->

                    <div class="col-md-3 col-sm-6 justify-content-center">
                        <!-- col-md-3 col-sm-6 center-responsive Begin -->
                        <div class="product product-box same-height">
                            <!-- product same-height Begin -->
                            <a href="details.php"><img class="img-fluid" src="admin_area/product_images/food.jpg" alt="Product 6"></a>
                            <div class="text">
                                <!-- text Begin -->
                                <h3><a href="details.php">Amapapa</a></h3>
                                <p class="price">R40</p>
                            </div><!-- text Finish -->
                        </div><!-- product same-height Finish -->
                    </div><!-- col-md-3 col-sm-6 center-responsive Finish -->

                    <div class="col-md-3 col-sm-6 justify-content-center">
                        <!-- col-md-3 col-sm-6 center-responsive Begin -->
                        <div class="product product-box same-height">
                            <!-- product same-height Begin -->
                            <a href="details.php"><img class="img-fluid" src="admin_area/product_images/food.jpg" alt="Product 6"></a>
                            <div class="text">
                                <!-- text Begin -->
                                <h3><a href="details.php">Amapapa</a></h3>
                                <p class="price">R40</p>
                            </div><!-- text Finish -->
                        </div><!-- product same-height Finish -->
                    </div><!-- col-md-3 col-sm-6 center-responsive Finish -->

                    <div class="col-md-3 col-sm-6 justify-content-center">
                        <!-- col-md-3 col-sm-6 center-responsive Begin -->
                        <div class="product product-box same-height">
                            <!-- product same-height Begin -->
                            <a href="details.php"><img class="img-fluid" src="admin_area/product_images/food.jpg" alt="Product 6"></a>
                            <div class="text">
                                <!-- text Begin -->
                                <h3><a href="details.php">Amapapa</a></h3>
                                <p class="price">R40</p>
                            </div><!-- text Finish -->
                        </div><!-- product same-height Finish -->
                    </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                </div>
            <!-- col-md-9 End -->
            
        </div><!-- col-md-9 End -->
        <!-- col-md-3 start -->
        <div class="col-md-3 col-lg-3">
                <!-- col-md-3 Begin -->

                <div id="order-summary" class="box product-box">
                    <!-- box Begin -->

                    <div class="box-header">
                        <!-- box-header Begin -->
                        <h3>Order Summary</h3>
                    </div><!-- box-header Finish -->
                    <p class="text-muted">
                        <!-- text-muted Begin -->
                        Shipping and additional costs are calculated based on value you have entered
                    </p><!-- text-muted Finish -->
                    <div class="table-responsive">
                        <!-- table-responsive Begin -->
                        <table class="table">
                            <!-- table Begin -->
                            <tbody>
                                <!-- tbody Begin -->
                                <tr>
                                    <!-- tr Begin -->
                                    <td> Order Sub-Total </td>
                                    <th> R40 </th>
                                </tr><!-- tr Finish -->
                                <tr>
                                    <!-- tr Begin -->
                                    <td> Shipping and Handling </td>
                                    <td> R0 </td>
                                </tr><!-- tr Finish -->
                                <tr>
                                    <!-- tr Begin -->
                                    <td> Tax </td>
                                    <th> $0 </th>
                                </tr><!-- tr Finish -->
                                <tr class="total">
                                    <!-- tr Begin -->
                                    <td> Total </td>
                                    <th> R40 </th>
                                </tr><!-- tr Finish -->
                            </tbody><!-- tbody Finish -->
                        </table><!-- table Finish -->
                    </div><!-- table-responsive Finish -->
                </div><!-- box Finish -->
            </div><!-- col-md-3 Finish -->
            </div>
        <!-- row End -->

        <!-- container End -->

    </div>
    <!-- #content End -->

    <?php include 'includes/footer.php'; ?>