<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<!-- #content Begin -->
<div id="content">
    <!-- container Begin -->
    <div class="container-fluid">
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
                        Shop
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
            <!-- col-md-9 Begin -->
            <div class="col-md-9 col-lg-9">
                <!-- Store Hot Products Start -->
                <div id="hot">
                    <!-- Store Hot Box Start -->
                    <div class="box shop">
                        <!-- Store Hot Container Start -->
                        <div class="container">
                            <!-- col-md-12 Begin -->
                            <div class="col-md-12">
                                <h1>Shop</h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo deleniti accusamus, consequuntur illum quasi ut. Voluptate a, ipsam repellendus ut fugiat minima? Id facilis itaque autem, officiis veritatis perferendis, quaerat!
                                </p>
                            </div>
                            <!-- col-md-12 Finish -->
                        </div>
                        <!-- Store Hot Container End -->
                    </div>
                    <!-- Store Hot Box End -->
                </div>
                <!-- Store Hot Products End -->
                <!-- row Begin -->
                <div class="row">
                    <!-- col-md-4 col-sm-6 center-responsive Begin -->
                    <div class="col-md-6 col-sm-12 col-lg-6 center-responsive">
                        <!-- product Begin -->
                        <div class="product">
                            <a href="details.php"><img class="img-fluid" src="admin_area/product_images/food.jpg" alt="Product 1"></a>
                            <!-- text Begin -->
                            <div class="text">
                                <h3><a href="details.php">Amapapa</a></h3>
                                <h5 class="location">Vanderbijlpark</h5>
                                <p class="price">$30</p>
                                <p class="button">
                                    <a href="details.php" class="btn btn-default">View Details</a>
                                    <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
                                </p>
                            </div>
                            <!-- text Finish -->
                        </div><!-- product Finish -->

                    </div>
                    <!-- col-md-6 col-sm-12 col-lg-6 center-responsive end -->

                    <!-- col-md-4 col-sm-6 center-responsive Begin -->
                    <div class="col-md-6 col-sm-12 col-lg-6 center-responsive">
                        <!-- product Begin -->
                        <div class="product">
                            <a href="details.php"><img class="img-fluid" src="admin_area/product_images/food.jpg" alt="Product 1"></a>
                            <!-- text Begin -->
                            <div class="text">
                                <h3><a href="details.php">Amapapa</a></h3>
                                <h5 class="location">Vanderbijlpark</h5>
                                <p class="price">$30</p>
                                <p class="button">
                                    <a href="details.php" class="btn btn-default">View Details</a>
                                    <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
                                </p>
                            </div>
                            <!-- text Finish -->
                        </div><!-- product Finish -->

                    </div>
                    <!-- col-md-6 col-sm-12 col-lg-6 center-responsive end -->
                </div>
                <!-- Row End -->

                <!-- row Begin -->
                <div class="row">
                    <!-- col-md-4 col-sm-6 center-responsive Begin -->
                    <div class="col-md-6 col-sm-12 col-lg-6 center-responsive">
                        <!-- product Begin -->
                        <div class="product">
                            <a href="details.php"><img class="img-fluid" src="admin_area/product_images/food.jpg" alt="Product 1"></a>
                            <!-- text Begin -->
                            <div class="text">
                                <h3><a href="details.php">Amapapa</a></h3>
                                <h5 class="location">Vanderbijlpark</h5>
                                <p class="price">$30</p>
                                <p class="button">
                                    <a href="details.php" class="btn btn-default">View Details</a>
                                    <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
                                </p>
                            </div>
                            <!-- text Finish -->
                        </div><!-- product Finish -->

                    </div>
                    <!-- col-md-6 col-sm-12 col-lg-6 center-responsive end -->

                    <!-- col-md-4 col-sm-6 center-responsive Begin -->
                    <div class="col-md-6 col-sm-12 col-lg-6 center-responsive">
                        <!-- product Begin -->
                        <div class="product">
                            <a href="details.php"><img class="img-fluid" src="admin_area/product_images/food.jpg" alt="Product 1"></a>
                            <!-- text Begin -->
                            <div class="text">
                                <h3><a href="details.php">Amapapa</a></h3>
                                <h5 class="location">Vanderbijlpark</h5>
                                <p class="price">$30</p>
                                <p class="button">
                                    <a href="details.php" class="btn btn-default">View Details</a>
                                    <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
                                </p>
                            </div>
                            <!-- text Finish -->
                        </div><!-- product Finish -->

                    </div>
                    <!-- col-md-6 col-sm-12 col-lg-6 center-responsive end -->
                </div>
                <!-- Row End -->
                <center>
                    <ul class="pagination">
                        <li class="active;"><a href="#">First Page</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Last Page</a></li>
                    </ul>
                </center>
            </div>
            <!-- col-md-9 End -->
        </div>
        <!-- row End -->
    </div>
    <!-- container End -->
</div>
<!-- #content End -->

<?php include 'includes/footer.php'; ?>