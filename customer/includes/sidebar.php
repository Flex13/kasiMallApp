<!-- panel panel-default sidebar-menu Begin -->
<div class="panel card sidebar-menu">
    <!-- panel-heading Begin -->
    <div class="header-card">
            <center>
                <!--  center  Begin  -->
                <img src="customer_images/avatar.png" class="img-fluid" alt="kasi Profile">
            </center><!--  center  Finish  -->
            <br />
            <h3 align="center" class="panel-title">
                <!--  panel-title  Begin  -->
                Name: Sibanye Bukani
            </h3><!--  panel-title  Finish -->
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
