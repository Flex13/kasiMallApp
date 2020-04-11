
<?php


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
                    <p class='button'><a class='btn btn-default' href='details.php?pro_id=$pro_id'>View Details</a>
                    <a class='btn btn-primary' href='details.php?pro_id=$pro_id'><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                    </p>
                </div>
            </div>
        </div>
        ";
    }
}

?>