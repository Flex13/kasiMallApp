<?php $active = 'Shop'; ?>
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
                        <a class="p-1" href="index.php">Home </a>
                    </li>
                    <li>
                        Shop
                    </li>
                </ul>
                <!-- breadcrumb Finish -->
            </div><!-- col-md-12 Finish -->
        </div>
        
        <!-- row End -->

        <!-- row Begin -->
        <div class="row">
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
                    <?php

                    if (!isset($_GET['p_cat'])) {

                        if (!isset($_GET['cat'])) {

                            echo "

                        <div class='box shop'><!-- box Begin -->
                            <h1>Shop</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo deleniti accusamus, consequuntur illum quasi ut. Voluptate a, ipsam repellendus ut fugiat minima? Id facilis itaque autem, officiis veritatis perferendis, quaerat!</p>
                        </div><!-- box Finish -->

                        ";
                        }
                    }

                    ?>
                    <!-- Store Hot Box End -->
                </div>
                <!-- Store Hot Products End -->
                <!-- row Begin -->
                <div class="row" align="center">
                <?php 
                getpcatpro();

                getcatpro();
                
                ?>
                    <?php
                    if (!isset($_GET['p_cat'])) {
                        if (!isset($_GET['cat'])) {
                            $per_page = 6;
                            if (isset($_GET['page'])) {
                                $page = $_GET['page'];
                            } else {
                                $page = 1;
                            }

                            $start_from = ($page - 1) * $per_page;
                            $get_products = "SELECT * FROM products ORDER BY 1 DESC LIMIT $start_from,$per_page";
                            $run_products = mysqli_query($connect, $get_products);

                            while ($row_products = mysqli_fetch_array($run_products)) {

                                $pro_id = $row_products['product_id'];
                                $pro_title = $row_products['product_title'];
                                $pro_location = $row_products['product_location'];
                                $pro_price = $row_products['product_price'];
                                $pro_img1 = $row_products['product_img1'];

                                echo "
                            
                            <div class='col-md-6 col-sm-12 col-lg-6' align='center'>
                            <div class='product'>
                                <a href='details.php?pro_id=$pro_id'>
                                    <img class='img-fluid product-image' src='admin_area/product_images/$pro_img1'>
                                </a>
                                <div class='text'>
                                    <h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
                                    <h5 class='location'>$pro_location</h5>
                                    <p class='price'>R $pro_price</p>
                                    <p class='button'>
                                    <a class='btn btn-default' href='details.php?pro_id=$pro_id'>View Details</a>
                                    <a class='btn btn-primary' href='details.php?pro_id=$pro_id'><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                            ";
                            }

                    ?>
                    
                    <div class="col-md-12">
                <div class="center" >
                    <ul class="pagination">
                        <!-- pagination Begin -->
                <?php
                            $query = "SELECT * FROM products";
                            $result = mysqli_query($connect, $query);
                            $total_records = mysqli_num_rows($result);
                            $total_pages = ceil($total_records / $per_page);
                            echo "
                            <a href='shop.php?page=1'> " . 'First Page' . " </a>
                        ";
                            for ($i = 1; $i <= $total_pages; $i++) {
                                echo "
                            <a class='active' href='shop.php?page=" . $i . "'> " . $i . " </a>
                        ";
                            };
                            echo "
                            <a href='shop.php?page=$total_pages'> " . 'Last Page' . " </a>
                        ";
                        }
                    }
                ?>
                    </ul><!-- pagination Finish -->
                </div>
                </div>
                
                </div>
<!-- Row End -->
                <!-- col-md-9 End -->
            </div>
            <!-- row End -->
        </div>
<!-- row End -->
    </div>
        <!-- container End -->
    </div>
    <!-- #content End -->

    <?php include 'includes/footer.php'; ?>