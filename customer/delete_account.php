<?php 

$c_email = $_SESSION['customer_email'];

if(isset($_POST['Yes'])){
    
    $delete_customer = "DELETE FROM customers WHERE customer_email='$c_email'";
    
    $run_delete_customer = mysqli_query($connect,$delete_customer);
    
    if($run_delete_customer){
        
        session_destroy();
        
        echo "<script>alert('Successfully delete your account, feel sorry about this. Good Bye')</script>";
        
        echo "<script>window.open('../index.php','_self')</script>";
        
    }
    
}

if(isset($_POST['No'])){
    
    echo "<script>window.open('my_account.php?my_orders','_self')</script>";
    
}

?>

<center>
    <!--  center Begin  -->
    <h1> Do You Really Want to Delete Your Account</h1>
    <form action="" method="post" class="my-3">
    <input type="submit" name="Yes" value="Yes, I want to Delete" class="btn btn-danger mx-2">
    <input type="submit" name="No" value="No, I don't want to Delete" class="btn btn-primary mx-2">

    </form><!-- form Finish -->
</center><!--  center Finish  -->