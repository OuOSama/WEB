<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <?php include('../asset/head/head-admin.php');?>
</head>
<body>
    <?php
        include('../connect.php');
        $sql = "SELECT * FROM member WHERE mem_id = ' " . $_SESSION['mem_id'] . " ' ";
        $query = mysqli_query($connect, $sql);
        $result = mysqli_fetch_array($query);   
    ?>
    <div class="content">
        <div class="container bg-light shadow bg-body p-5 mb-5">
            <h1 align="center">Profile</h1>
            <form action="config.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="mem_id" value="<?php echo $result['mem_id']?>">
                <center>
                    <img src="../asset/uploads/<?php echo $result['mem_img']?>" class="img-fluid" width="505%" height="50%" style="height:200px; width:200px; object-fit:cover;">
                </center>
                <input type="text" name="mem_user"  class="form-control my-4"  value="<?php echo $result['mem_user']?>">
                <input type="text" name="mem_pass"  class="form-control my-4"  value="<?php echo $result['mem_pass']?>">
                <input type="text" name="mem_name"  class="form-control my-4"  value="<?php echo $result['mem_name']?>">
                <input type="text" name="mem_last"  class="form-control my-4"  value="<?php echo $result['mem_last']?>">
                <input type="text" name="mem_mail"  class="form-control my-4"  value="<?php echo $result['mem_mail']?>">
                <input type="text" name="mem_phone" class="form-control my-4"  value="<?php echo $result['mem_phone']?>">
                <textarea name="mem_address" class="form-control" rows="4"><?php echo $result['mem_address']?></textarea>
                <input type="text" name="mem_status" class="form-control my-4" value="<?php echo $result['mem_status']?>" disabled>
                <center>
                    <label>Your Picture</label>
                </center>
                <input  type="file"   name="file" class="form-control my-4">
                <button type="submit" name="update_profile" class="btn btn-lg btn-success form-control">Update profile</button>
            </form>
        </div>
    </div>
</body>
</html>