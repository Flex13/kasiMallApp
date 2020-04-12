<?php

/// begin getRealIpUser functions ///

function getRealIpUser(){
    
    switch(true){
            
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            default : return $_SERVER['REMOTE_ADDR'];
            
    }
    
}

/// begin add_cart functions ///

function add_cart(){
    
    global $connect;
    
    if(isset($_GET['add_cart'])){
        
        $ip_add = getRealIpUser();
        $p_id = $_GET['add_cart'];
        $product_qty = $_POST['product_qty'];
        $product_size = $_POST['product_size'];
        
        $check_product = "SELECT * FROM cart WHERE ip_add='$ip_add' AND p_id='$p_id'";
        
        $run_check = mysqli_query($connect,$check_product);
        
        if(mysqli_num_rows($run_check)>0){
            
            echo "<script>alert('This product has already added in cart')</script>";
            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
            
        }else{
            
            $query = "INSERT INTO cart (p_id,ip_add,qty,size) values ('$p_id','$ip_add','$product_qty','$product_size')";
            $run_query = mysqli_query($connect,$query);
            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
            
        }
        
    }
    
}

/// finish add_cart functions ///

/// finish getRealIpUser functions ///

/// begin getPro functions ///


function getPro()
{

    global $connect;

    $get_products = "SELECT * FROM products ORDER by 1 DESC LIMIT 0,6";

    $run_products = mysqli_query($connect, $get_products);

    while ($row_products = mysqli_fetch_array($run_products)) {

        $pro_id = $row_products['product_id'];
        $pro_location = $row_products['product_location'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];

        echo "
        <div class='col-md-4 col-sm-12 col-lg-4' align='center'>
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
}

function getPCats() {

    global $connect;

    $get_p_cats = "SELECT * FROM product_categories";
    $run_p_cats = mysqli_query($connect, $get_p_cats);

    while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {

$p_cat_id = $row_p_cats['p_cat_id'];
$p_cat_title = $row_p_cats['p_cat_title'];


echo "

        <li><a href='shop.php?p_cat=$p_cat_id'>$p_cat_title<a/></li>
      
";
}
}

function getCats() {

    global $connect;

    $get_cats = "SELECT * FROM categories";
    $run_cats = mysqli_query($connect, $get_cats);

    while ($row_cats = mysqli_fetch_array($run_cats)) {

$cat_id = $row_cats['cat_id'];
$cat_title = $row_cats['cat_title'];


echo "

        <li><a href='shop.php?cat=$cat_id'>$cat_title</a></li>
    
";
}
}


/// finish getPro functions ///

/// begin getPCats functions ///

function getpcatpro(){
    
    global $connect;
    
    if(isset($_GET['p_cat'])){
        
        $p_cat_id = $_GET['p_cat'];
        $get_p_cat ="SELECT * FROM product_categories WHERE p_cat_id='$p_cat_id'";
        
        $run_p_cat = mysqli_query($connect,$get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        
        $p_cat_title = $row_p_cat['p_cat_title'];
        $p_cat_desc = $row_p_cat['p_cat_desc'];

        $get_products ="SELECT * FROM products WHERE p_cat_id='$p_cat_id'";
        $run_products = mysqli_query($connect,$get_products);
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            echo "
            <div class='box shop'><!-- box Begin -->
                <h4> No Product Found In This Product Category </h4>
                </div>
            ";
            
        }else{
            
            echo "
            
            <div class='box shop'><!-- box Begin -->
                
                    <h1> $p_cat_title </h1>
                    <p> $p_cat_desc </p>
                
                </div>
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
        $pro_location = $row_products['product_location'];
        $pro_title = $row_products['product_title'];
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
                    <p class='price'>R$pro_price</p>
                    <p class='button'>
                    <a class='btn btn-default' href='details.php?pro_id=$pro_id'>View Details</a>
                    <a class='btn btn-primary' href='details.php?pro_id=$pro_id'><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                    </p>
                </div>
            </div>
        </div>
            
            ";
            
        }
        
    }
    
}

/// finish getPCats functions ///

/// begin getCats functions ///

function getcatpro(){
    
    global $connect;
    
    if(isset($_GET['cat'])){
        
        $cat_id = $_GET['cat'];
        
        $get_cat = "SELECT * FROM categories WHERE cat_id='$cat_id'";
        $run_cat = mysqli_query($connect,$get_cat);
        $row_cat = mysqli_fetch_array($run_cat);
        
        $cat_title = $row_cat['cat_title'];
        $cat_desc = $row_cat['cat_desc'];
        $get_cat = "SELECT *FROM products WHERE cat_id='$cat_id' LIMIT 0,6";
        
        $run_products = mysqli_query($connect,$get_cat);
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            
            echo "
            
            <div class='box shop'><!-- box Begin -->
            <h4> No Product Found In This Product Category </h4>
            </div>
            
            ";
            
        }else{
            
            echo "
            
            <div class='box shop'><!-- box Begin -->
                
                    <h1> $cat_title </h1>
                    
                    <p> $cat_desc </p>
                
                </div>
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
            $pro_location = $row_products['product_location'];
            $pro_title = $row_products['product_title'];
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
                    <p class='price'>R$pro_price</p>
                    <p class='button'>
                    <a class='btn btn-default' href='details.php?pro_id=$pro_id'>View Details</a>
                    <a class='btn btn-primary' href='details.php?pro_id=$pro_id'><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                    </p>
                </div>
            </div>
        </div>
            
            ";
            
        }
        
    }
    
}
/// finish getRealIpUser functions ///

function items(){
    
    global $connect;
    
    $ip_add = getRealIpUser();
    
    $get_items = "SELECT * FROM cart WHERE ip_add='$ip_add'";
    
    $run_items = mysqli_query($connect,$get_items);
    
    $count_items = mysqli_num_rows($run_items);
    
    echo $count_items;
    
}

/// finish getRealIpUser functions ///

/// begin total_price functions ///

function total_price(){
    
    global $connect;
    
    $ip_add = getRealIpUser();
    $total = 0;
    $select_cart = "SELECT * FROM cart WHERE ip_add='$ip_add'";
    $run_cart = mysqli_query($connect,$select_cart);
    
    while($record=mysqli_fetch_array($run_cart)){
        
        $pro_id = $record['p_id'];
        $pro_qty = $record['qty'];
        $get_price = "SELECT * FROM products WHERE product_id='$pro_id'";
        
        $run_price = mysqli_query($connect,$get_price);
        
        while($row_price=mysqli_fetch_array($run_price)){
            
            $sub_total = $row_price['product_price']*$pro_qty;
            $total += $sub_total;
            
        }
        
    }
    
    echo "R" . $total;
    
}

/// finish total_price functions ///

?>