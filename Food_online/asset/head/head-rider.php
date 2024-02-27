<?php
    session_start();
    if(!$_SESSION['mem_id']){
        header('location: ../index.php');
    } else { ?>
 <?php include('../connect.php');?>   
<header>
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <script src="../asset/js/bootstrap.bundle.js"></script>
    
    <nav class="navbar navbar-expand-lg bg-light shadow p-3 mb-5">
        <div class="container-fluid">
            <a class="navbar-brand">Food online</a>
        </div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a href="restaurant.php" class="nav-link">Restaurant</a>
            </li>
            <li class="nav-item">
                <a href="order.php" class="nav-link">Order</a>
            </li>
            <li class="nav-item">
                <a href="address.php" class="nav-link">address</a>
            </li>
            <li class="nav-item">
                <a href="payment.php" class="nav-link">Payment</a>
            </li>
            <li class="nav-item">
                <a href="profile.php" class="nav-link">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active"><?php echo strtoupper(($_SESSION['mem_name']))?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active"><?php echo strtoupper(($_SESSION['mem_last']))?></a>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="nav-link">Logout</a>
            </li>
        </ul>
    </nav>

</header>
<?php } ?>