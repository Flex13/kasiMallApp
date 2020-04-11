<?php include 'includes/header.php'; ?>
<section class="container">
    <div class="row">
        <!-- row Begin -->
        <div class="col-lg-12">
            <!-- col-lg-12 Begin -->
            <ol class="breadcrumb">
                <!-- breadcrumb Begin -->
                <li class="active">
                    <!-- active Begin -->
                    <i class="fas fa-tachometer-alt"></i> Dashboard / Insert Products
                </li><!-- active"Finish -->
            </ol><!-- breadcrumb Finish -->
        </div><!-- col-lg-12 Finish -->
    </div><!-- row Finish -->
</section>

<section class="container">
    <div class="row">
        <!-- row Begin -->
        <div class="col-lg-12">
            <!-- col-lg-12 Begin -->
            <div class="panel card">
                <!-- panel card Begin -->
                <div class="card-header">
                    <!-- panel card-header Begin -->
                    <h3 class="card-title">
                        <!-- card-title Begin -->
                        <i class="fas fa-money-bill-wave"></i> Insert Product
                    </h3><!-- card-title Finish -->
                </div> <!-- canel card Finish -->

                <div class="card-body">
                    <!-- card-body Begin -->
                    <form method="post" class="justify-content-center" enctype="multipart/form-data">
                        <!-- form-horizontal Begin -->

                        <div class="form-group">
                            <!-- form-group Begin -->
                            <label class="col-md-3 control-label"> Product Title </label>
                            <div class="col-md-6">
                                <!-- col-md-6 Begin -->
                                <input name="product_title" type="text" class="form-control" required>
                            </div><!-- col-md-6 Finish -->
                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->
                            <label class="col-md-3 control-label"> Product Category </label>
                            <div class="col-md-6">
                                <!-- col-md-6 Begin -->
                                <select name="product_cat" class="form-control">
                                    <!-- form-control Begin -->
                                    <option> Select a Category Product </option>
                                    <?php

                                    $get_p_cats = "SELECT * FROM product_categories";
                                    $run_p_cats = mysqli_query($connect, $get_p_cats);

                                    while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {

                                        $p_cat_id = $row_p_cats['p_cat_id'];
                                        $p_cat_title = $row_p_cats['p_cat_title'];

                                        echo "
                                            <option value='$p_cat_id'> $p_cat_title </option>
                                            ";
                                    }
                                    ?>

                                </select><!-- form-control Finish -->
                            </div><!-- col-md-6 Finish -->
                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->
                            <label class="col-md-3 control-label"> Category </label>
                            <div class="col-md-6">
                                <!-- col-md-6 Begin -->
                                <select name="product_cat" class="form-control">
                                    <!-- form-control Begin -->
                                    <option> Select a Category </option>
                                    <?php

                                    $get_cat = "SELECT * FROM categories";
                                    $run_cat = mysqli_query($connect, $get_cat);

                                    while ($row_cat = mysqli_fetch_array($run_cat)) {

                                        $cat_id = $row_cat['cat_id'];
                                        $cat_title = $row_cat['cat_title'];

                                        echo "
                                            <option value='$cat_id'> $cat_title </option>
                                            ";
                                    }

                                    ?>
                                </select><!-- form-control Finish -->
                            </div><!-- col-md-6 Finish -->
                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->
                            <label class="col-md-3 control-label"> Product Image 1 </label>
                            <div class="col-md-6">
                                <!-- col-md-6 Begin -->
                                <input name="product_img1" type="file" required>
                            </div><!-- col-md-6 Finish -->
                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->
                            <label class="col-md-3 control-label"> Product Image 2 </label>
                            <div class="col-md-6">
                                <!-- col-md-6 Begin -->
                                <input name="product_img2" type="file" required>
                            </div><!-- col-md-6 Finish -->
                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->
                            <label class="col-md-3 control-label"> Product Image 3 </label>
                            <div class="col-md-6">
                                <!-- col-md-6 Begin -->
                                <input name="product_img3" type="file" class="form-height-custom" required>
                            </div><!-- col-md-6 Finish -->
                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->
                            <label class="col-md-3 control-label"> Product Price </label>
                            <div class="col-md-6">
                                <!-- col-md-6 Begin -->
                                <input name="product_price" type="text" class="form-control" required>
                            </div><!-- col-md-6 Finish -->
                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->
                            <label class="col-md-3 control-label"> Product Keywords </label>
                            <div class="col-md-6">
                                <!-- col-md-6 Begin -->
                                <input name="product_keywords" type="text" class="form-control" required>
                            </div><!-- col-md-6 Finish -->
                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->
                            <label class="col-md-3 control-label"> Product Desc </label>
                            <div class="col-md-6">
                                <!-- col-md-6 Begin -->
                                <textarea name="product_desc" cols="19" rows="6" class="form-control"></textarea>
                            </div><!-- col-md-6 Finish -->
                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-6">
                                <!-- col-md-6 Begin -->
                                <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">
                            </div><!-- col-md-6 Finish -->
                        </div><!-- form-group Finish -->

                    </form><!-- form-horizontal Finish -->
                </div><!-- panel-body Finish -->
            </div><!-- panel card Finish -->
        </div><!-- col-lg-12 Finish -->
    </div><!-- row Finish -->
</section>
<?php include 'includes/footer.php'; ?>