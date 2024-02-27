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
                <a href="manage_rest.php" class="nav-link">Restaurant</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Member</a>
                <ul class="dropdown-menu">
                    <li><a href="allow_member.php"  class="nav-link dropdown-item">Allow Member</a></li>
                    <li><a href="manage_member.php" class="nav-link dropdown-item">Manage Member</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="manage_cate.php" class="nav-link">Categorise</a>
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