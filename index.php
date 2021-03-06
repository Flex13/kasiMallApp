<?php $active='Home'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>




<!-- Slider Container Start -->
<div class="container" id="slider">
    <!-- Col-md-12 Start -->
    <div class="col-lg-12 p-0 m-0">
        <!-- Carousel Start -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Carousel Inner Start -->
            <div class="carousel-inner">
                <?php

                $get_slides = "SELECT * FROM slider LIMIT 0,1";
                $run_slides = mysqli_query($connect, $get_slides);

                while ($row_slides = mysqli_fetch_array($run_slides)) {

                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];

                    echo "
                    <div class='carousel-item active'>
                    <img src='admin_area/slides_images/$slide_image'>
                    </div>
                    ";
                }

                $get_slides = "SELECT * FROM slider LIMIT 1,3";
                $run_slides = mysqli_query($connect, $get_slides);

                while ($row_slides = mysqli_fetch_array($run_slides)) {

                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];

                    echo "
                    <div class='carousel-item'>
                    <img src='admin_area/slides_images/$slide_image'>
                    </div>
                    ";
                }

                ?>
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
        </div><!-- Carousel End -->
    </div><!-- Col-md-12 End -->
</div>
<!-- Slider Container End -->

<!-- Store Advantages Start -->
<div id="advantages">
    <!-- Store Container info Start -->
    <div class="container">
        <!-- Store Same height info Start -->
        <div class="row same-height-row">
            <!-- Store col-sm-4 info Start -->
            <div class="col-sm-12 col-md-4 col-lg-4">
                <!-- Store Box same height info Start -->
                <div class="box same-height">
                    <!-- Store icon info Start -->
                    <div class="icon">
                        <i class="fa fa-heart"></i>
                    </div>
                    <!-- Store icon info end -->
                    <h4><a href="#">We Love our Custormers</a></h4>
                    <p>Prividing the best service</p>
                </div>
                <!-- Store Box same height info end -->
            </div>
            <!-- Store col-sm-4 info End -->
            <!-- Store col-sm-4 info Start -->
            <div class="col-sm-12 col-md-4 col-lg-4">
                <!-- Store Box same height info Start -->
                <div class="box same-height">
                    <!-- Store icon info Start -->
                    <div class="icon">
                        <i class="fa fa-tag"></i>
                    </div>
                    <!-- Store icon info end -->
                    <h4><a href="#">Best Offers</a></h4>
                    <p>Find best offers in your location</p>
                </div>
                <!-- Store Box same height info end -->
            </div>
            <!-- Store col-sm-4 info End -->
            <!-- Store col-sm-4 info Start -->
            <div class="col-sm-12 col-md-4 col-lg-4">
                <!-- Store Box same height info Start -->
                <div class="box same-height">
                    <!-- Store icon info Start -->
                    <div class="icon">
                        <i class="fa fa-thumbs-up"></i>
                    </div>
                    <!-- Store icon info end -->
                    <h4><a href="#">100% Original SA Products</a></h4>
                    <p>We offer the best local kasi products</p>
                </div>
                <!-- Store Box same height info end -->
            </div>
            <!-- Store col-sm-4 info End -->
        </div>
        <!-- Store Same height info End -->
    </div>
    <!-- Store Container info End -->
</div>
<!-- Store Advantages End -->

<!-- Store Hot Products Start -->
<div id="hot">
    <!-- Store Hot Box Start -->
    <div class="box hot">
        <!-- Store Hot Container Start -->
        <div class="container">
            <!-- col-md-12 Begin -->
            <div class="col-md-12">
                <h2>Our Latest Products</h2>
            </div>
            <!-- col-md-12 Finish -->
        </div>
        <!-- Store Hot Container End -->
    </div>
    <!-- Store Hot Box End -->
</div>
<!-- Store Hot Products End -->

<!-- container Conent Begin -->
<div id="content" class="container">
    <!-- row Content Begin -->
    <div class="row">
        <?php getPro(); ?>
    </div>
    <!-- row Content End -->
</div>
<!-- container Content End -->


<!-- Store Hot Products Start -->
<div id="hot">
    <!-- Store Hot Box Start -->
    <div class="box hot">
        <!-- Store Hot Container Start -->
        <div class="container">
            <!-- col-md-12 Begin -->
            <div class="col-md-12">
                <h2>Service Areas</h2>
            </div>
            <!-- col-md-12 Finish -->
        </div>
        <!-- Store Hot Container End -->
    </div>
    <!-- Store Hot Box End -->
</div>
<!-- Store Hot Products End -->

<!-- Store Advantages Start -->
<div id="advantages">
    <!-- Store Container info Start -->
    <div class="container">
        <!-- Store Same height info Start -->
        <div class="row same-height-row">
            <!-- Store col-sm-4 info Start -->
            <div class="col-sm-12 col-md-4 col-lg-4">
                <!-- Store Box same height info Start -->
                <div class="box same-height2">
                    <!-- Store icon info Start -->
                    <div class="area">
                        <img class="img-fluid" src="admin_area/product_images/shap.jpg" alt="Product 1">
                    </div>
                    <!-- Store icon info end -->
                    <h3><a href="#">Sharpeville</a></h3>
                </div>
                <!-- Store Box same height info end -->
            </div>
            <!-- Store col-sm-4 info End -->
            <!-- Store col-sm-4 info Start -->
            <div class="col-sm-12 col-md-4 col-lg-4">
                <!-- Store Box same height info Start -->
                <div class="box same-height2">
                    <!-- Store icon info Start -->
                    <div class="area">
                        <img class="img-fluid" src="admin_area/product_images/kasi1.jpg" alt="Product 1">
                    </div>
                    <!-- Store icon info end -->
                    <h3><a href="#">Soweto</a></h3>
                </div>
                <!-- Store Box same height info end -->
            </div>
            <!-- Store col-sm-4 info End -->
            <!-- Store col-sm-4 info Start -->
            <div class="col-sm-12 col-md-4 col-lg-4">
                <!-- Store Box same height info Start -->
                <div class="box same-height2">
                    <!-- Store icon info Start -->
                    <div class="area">
                        <img class="img-fluid" src="admin_area/product_images/kasi2.jpg" alt="Product 1">
                    </div>
                    <!-- Store icon info end -->
                    <h3><a href="#">Alex</a></h3>
                </div>
                <!-- Store Box same height info end -->
            </div>
            <!-- Store col-sm-4 info End -->
        </div>
        <!-- Store Same height info End -->
    </div>
    <!-- Store Container info End -->
</div>
<!-- Store Advantages End -->


<?php include 'includes/footer.php'; ?>