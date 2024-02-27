<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Categorise</title>
    <?php include('../asset/head/head-admin.php');?>
</head>
<body>
    <div class="content">
        <div class="container py-5 shadow">
            <table class="table">
                <h1 align="center">Manage Categorise</h1>
                <thead align="center">
                    <th>Categorise ID</th>
                    <th>Categorise Name</th>
                    <th colspan="3">Action</th>
                </thead>
                <tbody>
                    <form action="config_cate.php" method="post">
                        <input type="hidden" name="cate_id">
                        <td><input type="text"  name="cate_id"     class="form-control" placeholder="Categorise ID" disabled></td>
                        <td><input type="text"  name="cate_name"   class="form-control" placeholder="Categorise ID"></td>
                        <td colspan="3"><button type="submit" name="insert" class="btn btn-secondary form-control">INSERT</button></td>
                    </form>
                </tbody>
                <?php 
                    include('../connect.php');
                    $sql = "SELECT * FROM cate_res";
                    $query = mysqli_query($connect , $sql);
                ?>
                <?php while($result = mysqli_fetch_array($query)) {?>
                <tbody>
                <form action="config_cate.php" method="post">
                        <input type="hidden" name="cate_id" value="<?php echo $result['cate_id']?>">
                        <td><input type="text"  name="cate_id"    class="form-control" value="<?php echo $result['cate_id']?>" disabled></td>
                        <td><input type="text"  name="cate_name"  class="form-control" value="<?php echo $result['cate_name']?>"></td>
                        
                        <td colspan="2"><button type="submit" name="update" class="btn btn-success form-control">UPDATE</button></td>
                        <td colspan="2"><button type="submit" name="delete" class="btn btn-danger  form-control">DELETE</button></td>
                    </form>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>