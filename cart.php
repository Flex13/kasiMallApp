<?php $active='Cart'; ?>
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
                    <?php 
                    $ip_add = getRealIpUser();
                    $select_cart = "SELECT * FROM cart WHERE ip_add='$ip_add'";
                    $run_cart = mysqli_query($connect,$select_cart);
                    $count = mysqli_num_rows($run_cart);
                    ?>
                    <p class="text-muted">You currently have <?php echo $count; ?> item(s) in your cart</p>
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

                            <?php 
                                
                                $total = 0;
                                
                                while($row_cart = mysqli_fetch_array($run_cart)){
                                    
                                    $pro_id = $row_cart['p_id'];
                                    $pro_size = $row_cart['size'];
                                    $pro_qty = $row_cart['qty'];

                                    $get_products = "SELECT * FROM products WHERE product_id='$pro_id'";
                                    $run_products = mysqli_query($connect,$get_products);
                                    
                                    while($row_products = mysqli_fetch_array($run_products)){
                                        
                                        $product_title = $row_products['product_title'];
                                        $product_img1 = $row_products['product_img1'];
                                        $only_price = $row_products['product_price'];
                                        $sub_total = $row_products['product_price']*$pro_qty;
                                        $total += $sub_total;
                                        
                                ?>
                                <tr>
                                    <!-- tr Begin -->
                                    <td><img class="img-fluid" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="Product 3a"> </td>
                                    <td><a href="details.php?pro_id=<?php echo $pro_id; ?>"> <?php echo $product_title; ?> </a></td>
                                    <td><?php echo $pro_qty; ?></td>
                                    <td><?php echo $only_price; ?></td>
                                    <td><?php echo $pro_size; ?></td>
                                    <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>"></td>
                                    <td>R<?php echo $sub_total; ?></td>
                                </tr><!-- tr Finish -->
                                <?php } } ?>
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

            <?php 
               
               function update_cart(){
                   
                   global $connect;
                   
                   if(isset($_POST['update'])){
                       
                       foreach($_POST['remove'] as $remove_id){
                           
                           $delete_product = "DELETE FROM cart WHERE p_id='$remove_id'";
                           
                           $run_delete = mysqli_query($connect,$delete_product);
                           
                           if($run_delete){
                               
                               echo "<script>window.open('cart.php','_self')</script>";
                               
                           }
                           
                       }
                       
                   }
                   
               }
              
              echo @$up_cart = update_cart();
              
              ?>
            

            <div id="row same-heigh-row" class="row">
                    <!-- #row same-heigh-row Begin -->
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <!-- col-md-3 col-sm-6 col-lg-3 Begin -->
                        <div class="box product-box same-height headline">
                            <!-- box same-height headline Begin -->
                            <h3 class="text-center">Products You Maybe Like</h3>
                        </div><!-- box same-height headline Finish -->
                    </div><!-- col-md-3 col-sm-6 Finish -->
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
                                    <td> Order All Sub-Total </td>
                                   <th> R<?php echo $total; ?> </th>
                                </tr><!-- tr Finish -->
                                <tr>
                                    <!-- tr Begin -->
                                    <td> Shipping and Handling </td>
                                   <td> R0 </td>
                                </tr><!-- tr Finish -->
                                <tr>
                                    <!-- tr Begin -->
                                    <td> Tax </td>
                                    <th> R0 </th>
                                </tr><!-- tr Finish -->
                                <tr class="total">
                                    <!-- tr Begin -->
                                    <td> Total </td>
                                   <th> R<?php echo $total; ?> </th>
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