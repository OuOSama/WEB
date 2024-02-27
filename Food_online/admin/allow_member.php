<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allow Member</title>
    <?php include('../asset/head/head-admin.php');?>
</head>
<body>
    <div class="content">
        <div class="container py-5 shadow">
            <table class="table">
                <h1 align="center">Enable Member</h1>
                <thead align="center">
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Status</th>
                    <th colspan="3">Action</th>
                </thead>
                <?php 
                    include('../connect.php');
                    $sql = "SELECT * FROM member WHERE mem_check = 'disable' ";
                    $query = mysqli_query($connect , $sql);
                ?>
                <?php while($result = mysqli_fetch_array($query)) {?>
                <tbody>
                <form action="config.php" method="post">
                        <input type="hidden" name="mem_id" value="<?php echo $result['mem_id']?>">
                        <td><?php echo $result['mem_name']?></td>
                        <td><?php echo $result['mem_last']?></td>
                        <td><?php echo $result['mem_status']?></td>
                        
                        <td colspan="2"><button type="submit" name="enable" class="btn btn-success form-control">ENABLE</button></td>
                        <td colspan="2"><button type="submit" name="delete" class="btn btn-danger  form-control">DELETE</button></td>
                    </form>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>