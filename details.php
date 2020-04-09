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
                        Details
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
                <!-- row Product Begin -->
                <div id="productMain" class="row text-center">
                    <!-- col-sm-6 col-md-6 col-lg-6 Begin -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <!-- #mainImage Begin -->
                        <div id="mainImage">
                        <!-- Carousel Start -->
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <!-- Carousel Inner Start -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <center><img class="img-fluid details-image" src="admin_area/product_images/food.jpg" alt="Product 1"></center>
                                </div>
                                <div class="carousel-item">
                                    <center><img class="img-fluid details-image" src="admin_area/product_images/food.jpg" alt="Product 1"></center>
                                </div>
                                <div class="carousel-item">
                                    <center><img class="img-fluid details-image" src="admin_area/product_images/food.jpg" alt="Product 1"></center>
                                </div>
                            </div>
                            <!-- Carousel Inner End -->
                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- Carousel End -->
                        </div>
                        <!-- #mainImage Begin -->
                    </div>
                    <!-- col-sm-6 col-md-6 col-lg-6 End -->

                    <!-- col-sm-6 col-md-6 col-lg-6 Begin -->
                    <div class="col-sm-6 col-md-6 col-lg-6 " align-center>
                        <!-- box Begin -->
                        <div class="box product-box ">
                            <h1 class="text-center">AMAPAPA</h1>
                            <!-- form-horizontal Begin -->
                            <form action="details.php" class="justify-content-center" method="post">
                                <!-- form-group Begin -->
                                <div class="form-group">
                                    <label for="" class="col-md-5 control-label">Products Quantity</label>
                                    <!-- col-md-7 Begin -->
                                    <div class="col-md-7">
                                        <!-- select Begin -->
                                        <select name="product_qty" id="" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <!-- select Finish -->
                                    </div>
                                    <!-- col-md-7 Finish -->
                                </div>
                                <!-- form-group End -->
                                <!-- form-group Begin -->
                                <div class="form-group">
                                    <label class="col-md-5 control-label">Product Size</label>
                                    <!-- col-md-7 Begin -->
                                    <div class="col-md-7">
                                        <!-- form-control Begin -->
                                        <select name="product_size" class="form-control">
                                            <option>Select a Size</option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>

                                        </select>
                                        <!-- form-control Finish -->
                                    </div>
                                    <!-- col-md-7 Finish -->
                                </div>
                                <!-- form-group Finish -->
                                <p><a href="" class="btn btn-default price">R50.00</a></p>
                                <a href="cart.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
                            </form>
                            <!-- form-horizontal End -->
                        </div>
                        <!-- box End -->
                        <!-- row thumbs Begin -->
                        <div class="row" id="thumbs">
                            <!-- col-xs-4 col-md-4 col-lg-4 Begin -->
                            <div class="col-xs-4 col-md-4 col-lg-4">
                                <!-- thumb Begin -->
                                <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                                    <img src="admin_area/product_images/food.jpg" alt="product 1" class="img-fluid details-image">
                                </a>
                                <!-- thumb Finish -->
                            </div>
                            <!-- col-xs-4 col-md-4 col-lg-4 Finish -->
                            <!-- col-xs-4 col-md-4 col-lg-4 Begin -->
                            <div class="col-xs-4 col-md-4 col-lg-4">
                                <!-- thumb Begin -->
                                <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                                    <img src="admin_area/product_images/food.jpg" alt="product 1" class="img-fluid details-image">
                                </a>
                                <!-- thumb Finish -->
                            </div>
                            <!-- col-xs-4 col-md-4 col-lg-4 Finish -->
                            <!-- col-xs-4 col-md-4 col-lg-4 Begin -->
                            <div class="col-xs-4 col-md-4 col-lg-4">
                                <!-- thumb Begin -->
                                <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                                    <img src="admin_area/product_images/food.jpg" alt="product 1" class="img-fluid details-image">
                                </a>
                                <!-- thumb Finish -->
                            </div>
                            <!-- col-xs-4 col-md-4 col-lg-4 Finish -->
                        </div>
                        <!-- row thumbs end -->
                    </div>
                    <!-- col-sm-6 col-md-6 col-lg-6 End -->
                </div>
                <!-- row Product End -->
                <!-- box Details Begin -->
                <div class="box product-box" id="details">
                    <h4>Product Details</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione praesentium ipsum accusantium facere nulla, beatae vitae consequatur enim et nesciunt possimus doloribus omnis dolorum, ea quibusdam excepturi asperiores, temporibus! Consequatur?</p>
                    <h4>Size</h4>
                    <ul>
                        <li>Small</li>
                        <li>Medium</li>
                        <li>Large</li>
                    </ul>
                    <hr>
                </div>
                <!-- box Details Finish -->

                <!-- #row same-heigh-row Begin -->
                <div id="row same-heigh-row" class="row">
                    <!-- col-lg-3 col-md-3 col-sm-6 Begin -->
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <!-- box same-height headline Begin -->
                        <div class="box product-box same-height headline">
                            <h3 class="text-center">Products You Maybe Like</h3>
                        </div>
                        <!-- box same-height headline Finish -->
                    </div>
                    <!-- col-lg-3 col-md-3 col-sm-6 End -->

                    <!-- col-lg-3 col-md-3 col-sm-6 center-responsive Begin -->
                    <div class="col-lg-3 col-md-3 col-sm-6 justify-content-center">
                        <!-- product same-height Begin -->
                        <div class="product same-height">
                            <a href="details.php">
                                <img class="img-fluid details-image" src="admin_area/product_images/food.jpg" alt="Product 6">
                            </a>
                            <!-- text Begin -->
                            <div class="text">
                                <h3><a href="details.php">AMAPAPA</a></h3>
                                <p class="price">R40</p>
                            </div>
                            <!-- text Finish -->
                        </div><!-- product same-height Finish -->
                    </div><!-- col-lg-3 col-md-3 col-sm-6 center-responsive Finish -->

                    <!-- col-lg-3 col-md-3 col-sm-6 center-responsive Begin -->
                    <div class="col-lg-3 col-md-3 col-sm-6 justify-content-center">
                        <!-- product same-height Begin -->
                        <div class="product same-height">
                            <a href="details.php">
                                <img class="img-fluid details-image" src="admin_area/product_images/food.jpg" alt="Product 6">
                            </a>
                            <!-- text Begin -->
                            <div class="text">
                                <h3><a href="details.php">AMAPAPA</a></h3>
                                <p class="price">R40</p>
                            </div>
                            <!-- text Finish -->
                        </div><!-- product same-height Finish -->
                    </div><!-- col-lg-3 col-md-3 col-sm-6 center-responsive Finish -->

                    <!-- col-lg-3 col-md-3 col-sm-6 center-responsive Begin -->
                    <div class="col-lg-3 col-md-3 col-sm-6 justify-content-center">
                        <!-- product same-height Begin -->
                        <div class="product same-height">
                            <a href="details.php">
                                <img class="img-fluid details-image" src="admin_area/product_images/food.jpg" alt="Product 6">
                            </a>
                            <!-- text Begin -->
                            <div class="text">
                                <h3><a href="details.php">AMAPAPA</a></h3>
                                <p class="price">R40</p>
                            </div>
                            <!-- text Finish -->
                        </div><!-- product same-height Finish -->
                    </div><!-- col-lg-3 col-md-3 col-sm-6 center-responsive Finish -->

                </div>
                <!-- #row same-heigh-row End -->



            </div>
            <!-- col-md-9 Begin -->
        </div>
        <!-- row End -->
    </div>
    <!-- container End -->
</div>
<!-- #content End -->

<?php include 'includes/footer.php'; ?>