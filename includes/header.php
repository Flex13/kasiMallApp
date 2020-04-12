<?php 
include("includes/db.php");
include("functions/functions.php");
include("functions/mail.php");
?>

<?php 

if(isset($_GET['pro_id'])){
    
    $product_id = $_GET['pro_id'];
    $get_product = "SELECT * FROM products WHERE product_id='$product_id'";
    
    $run_product = mysqli_query($connect,$get_product);
    $row_product = mysqli_fetch_array($run_product);
    
    $p_cat_id       = $row_product['p_cat_id'];
    $pro_title      = $row_product['product_title'];
    $pro_price      = $row_product['product_price'];
    $pro_desc       = $row_product['product_desc'];
    $pro_img1       = $row_product['product_img1'];
    $pro_img2       = $row_product['product_img2'];
    $pro_img3       = $row_product['product_img3'];

    $get_p_cat = "SELECT * FROM product_categories where p_cat_id='$p_cat_id'";
    
    $run_p_cat = mysqli_query($connect,$get_p_cat);
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    $p_cat_title = $row_p_cat['p_cat_title'];
    
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awsome/css/all.min.css" />
    <link rel="stylesheet" href="styles/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="styles/style.css" />
    <script defer src="font-awsome/js/all.js"></script>
    <script src="https://kit.fontawesome.com/f9b723c806.js" crossorigin="anonymous"></script>
    <title>Kasi Mall Online</title>
</head>
