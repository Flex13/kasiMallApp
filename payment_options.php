
<?php 
    
    $session_email = $_SESSION['customer_email'];
    
    $select_customer = "SELECT * FROM customers WHERE customer_email='$session_email'";
    
    $run_customer = mysqli_query($connect,$select_customer);
    
    $row_customer = mysqli_fetch_array($run_customer);
    
    $customer_id = $row_customer['customer_id'];
    
    ?>

<div class="panel product-box"><!-- box Begin -->
    
    <h1 class="text-center">Payment Options For You</h1>  
    
     <p class="lead text-center"><!-- lead text-center Begin -->
         
     <a href="order.php?c_id=<?php echo $customer_id ?>"> Offline Payment </a>
         
     </p><!-- lead text-center Finish -->
     
     <center><!-- center Begin -->
         
        <p class="lead"><!-- lead Begin -->
            
            <a href="#">
                
                Paypall Payment
                
                <!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center">
                    <tr>
                        <td align="center"></td>
                    </tr>
                    <tr>
                        <td align="center">
                            <a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_111x69.jpg" class="img-fluid" border="0" alt="PayPal Logo"></a>
                        </td>
                    </tr>
                </table><!-- PayPal Logo -->
                
            </a>
            
        </p> <!-- lead Finish -->
         
     </center><!-- center Finish -->
    
</div><!-- box Finish -->