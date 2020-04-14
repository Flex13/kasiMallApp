<!-- panel panel-default sidebar-menu Begin -->
<div class="panel card sidebar-menu">
    <!-- panel-heading Begin -->
    <div class="header-card">
    <?php 
        
        $customer_session = $_SESSION['customer_email'];
        $get_customer = "SELECT * FROM customers WHERE customer_email='$customer_session'";
        
        $run_customer = mysqli_query($connect,$get_customer);
        $row_customer = mysqli_fetch_array($run_customer);
        $customer_image = $row_customer['customer_image'];
        $customer_name = $row_customer['customer_name'];
        
        if(!isset($_SESSION['customer_email'])){
            
        }else{
            
            echo "
            
                <center>
                
                    <img src='customer_images/$customer_image' class='img-fluid' >
                
                </center>
                
                <br/>
                
                <h3 class='panel-title' align='center'>
                
                    Name: $customer_name
                
                </h3>
            
            ";
            
        }
        
        ?>
        </div>
        <!-- panel-heading Finish -->
        <!-- panel-body Begin -->
        <div class="card-body">
            <!-- nav nav-pills nav-stacked category-menu Begin -->
            <ul class="nav nav-pills flex-column category-menu">
            <li class="<?php if(isset($_GET['my_orders'])){ echo "active"; } ?>">
                <a href="my_account.php?my_orders">
                    <i class="fa fa-list"></i> My Orders
                </a>
            </li>
            <li class="<?php if(isset($_GET['pay_offline'])){ echo "active"; } ?>">
                <a href="my_account.php?pay_offline">
                    <i class="fa fa-bolt"></i> Pay Offline
                </a>
            </li>
            
            <li class="<?php if(isset($_GET['edit_account'])){ echo "active"; } ?>">
                <a href="my_account.php?edit_account">
                    <i class="fa fa-user-edit"></i> Edit Account
                </a>
            </li>
            
            <li class="<?php if(isset($_GET['change_pass'])){ echo "active"; } ?>">
                <a href="my_account.php?change_pass">
                    <i class="fa fa-user"></i> Change Password
                </a>
                
            </li>
            
            <li class="<?php if(isset($_GET['delete_account'])){ echo "active"; } ?>">
                <a href="my_account.php?delete_account">
                    <i class="fa fa-trash"></i> Delete Account
                </a>
            </li>
            
            <li>
                <a href="logout.php">
                    <i class="fa fa-sign-out-alt"></i> Log Out
                </a>
            </li>
            </ul>
            <!-- nav nav-pills nav-stacked category-menu Finish -->
        </div>
        <!-- panel-body Finish -->
    </div>
    <!-- panel panel-default sidebar-menu End -->
