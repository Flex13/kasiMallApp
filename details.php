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
                        <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
                    </li>
                    <li> <?php echo $pro_title; ?> </li>
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
                                        <center><img class="img-fluid details-image" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="Product 3-a"></center>
                                    </div>
                                    <div class="carousel-item">
                                        <center><img class="img-fluid details-image" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="Product 3-b" </center> </div> <div class="carousel-item">
                                            <center><img class="img-fluid details-image" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="Product 3-c"></center>
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
                    <div class="col-sm-6 col-md-6 col-lg-6 ">
                        <!-- box Begin -->
                        <div class="box product-box ">
                            <h1 class="text-center"><?php echo $pro_title; ?> </h1>

                            <?php add_cart(); ?>

                            <!-- form-horizontal Begin -->
                            <form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post">
                                <!-- form-horizontal Begin -->
                                <!-- form-group Begin -->
                                <div class="form-group">
                                    <label for="" class="col-md-4 control-label">Products Quantity</label>
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
                                        <select name="product_size" class="form-control" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('Must pick 1 size for the product')">
                                            <!-- form-control Begin -->
                                            <option disabled selected>Select a Size</option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>

                                        </select>
                                        <!-- form-control Finish -->
                                    </div>
                                    <!-- col-md-7 Finish -->
                                </div>
                                <!-- form-group Finish -->
                                <p class="price">R <?php echo $pro_price; ?></p>

                                <input name="submit" value="Add to cart" type="submit" class="btn btn-primary">
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
                                    <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="product 1" class="img-fluid details-image">
                                </a>
                                <!-- thumb Finish -->
                            </div>
                            <!-- col-xs-4 col-md-4 col-lg-4 Finish -->
                            <!-- col-xs-4 col-md-4 col-lg-4 Begin -->
                            <div class="col-xs-4 col-md-4 col-lg-4">
                                <!-- thumb Begin -->
                                <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                                    <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="product 2" class="img-fluid details-image">
                                </a>
                                <!-- thumb Finish -->
                            </div>
                            <!-- col-xs-4 col-md-4 col-lg-4 Finish -->
                            <!-- col-xs-4 col-md-4 col-lg-4 Begin -->
                            <div class="col-xs-4 col-md-4 col-lg-4">
                                <!-- thumb Begin -->
                                <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                                    <img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="product 4" class="img-fluid details-image">
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
                    <p><?php echo $pro_desc; ?></p>
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
                        </div <!-- box same-height headline Finish -->
                    </div>
                    <!-- col-lg-3 col-md-3 col-sm-6 End -->

                    <?php

                    $get_products = "SELECT * FROM products ORDER BY rand() LIMIT 0,3";
                    $run_products = mysqli_query($connect, $get_products);

                    while ($row_products = mysqli_fetch_array($run_products)) {

                        $pro_id = $row_products['product_id'];
                        $pro_title = $row_products['product_title'];
                        $pro_img1 = $row_products['product_img1'];
                        $pro_price = $row_products['product_price'];
                        $pro_location = $row_products['product_location'];

                        echo "
                       
                        <div class='col-lg-3 col-md-3 col-sm-6' align='center'>
                            <div class='product same-height'>
                                <a href='details.php?pro_id=$pro_id'><img class='img-fluid details-image' src='admin_area/product_images/$pro_img1'></a>
                                <div class='text'>
                                    <h4> <a href='details.php?pro_id=$pro_id'> $pro_title </a> </h4>
                                    <h5 class='location'>$pro_location </h5>
                                    <p class='price'> R $pro_price </p>
                                </div>
                            </div>
                        </div>
                       ";
                    }

                    ?>


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