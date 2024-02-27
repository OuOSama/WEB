<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Member</title>
    <?php include('../asset/head/head-admin.php');?>
</head>
<body>
    <div class="content">
        <div class="container py-5 shadow">
            <table class="table">
                <h1 align="center">Manage Member</h1>
                <thead align="center">
                    <th>User</th>
                    <th>Password</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Check</th>
                    <th>Address</th>
                    <th colspan="4">Action</th>
                </thead>
                <tbody>
                    <form action="config.php" method="post">
                        <input type="hidden" name="mem_id">
                        <td><input type="text"   name="mem_user"   class="form-control" placeholder="User"></td>
                        <td><input type="text"   name="mem_pass"   class="form-control" placeholder="password"></td>
                        <td><input type="text"   name="mem_name"   class="form-control" placeholder="First name"></td>
                        <td><input type="text"   name="mem_last"   class="form-control" placeholder="Last name"></td>
                        <td><input type="email"  name="mem_mail"   class="form-control" placeholder="Email"></td>
                        <td><input type="tel"    name="mem_phone"  class="form-control" placeholder="Phone"></td>
                        <td>
                            <select name="mem_status" class="form-select">
                                <option value="user" >User</option>
                                <option value="rider">Rider</option>
                                <option value="rest" >Restaurant</option>
                            </select>
                        </td>
                        <td>
                            <select name="mem_check" class="form-select">
                                <option value="enable" >Enable</option>
                                <option value="disable">Disable</option>
                            </select>
                        </td>
                        <td><input type="text"  name="mem_address"  class="form-control" placeholder="Address"></td>
                        <td colspan="4"><button type="submit" name="insert" class="btn btn-secondary form-control">INSERT</button></td>
                    </form>
                </tbody>
                <?php 
                    include('../connect.php');
                    $sql = "SELECT * FROM member WHERE mem_check = 'enable' ";
                    $query = mysqli_query($connect , $sql);
                ?>
                <?php while($result = mysqli_fetch_array($query)) {?>
                <tbody>
                <form action="config.php" method="post">
                        <input type="hidden" name="mem_id" value="<?php echo $result['mem_id']?>">
                        <td><input type="text"   name="mem_user"   class="form-control" value="<?php echo $result['mem_user']?>"></td>
                        <td><input type="text"   name="mem_pass"   class="form-control" value="<?php echo $result['mem_pass']?>"></td>
                        <td><input type="text"   name="mem_name"   class="form-control" value="<?php echo $result['mem_name']?>"></td>
                        <td><input type="text"   name="mem_last"   class="form-control" value="<?php echo $result['mem_last']?>"></td>
                        <td><input type="email"  name="mem_mail"   class="form-control" value="<?php echo $result['mem_mail']?>"></td>
                        <td><input type="tel"    name="mem_phone"  class="form-control" value="<?php echo $result['mem_phone']?>"></td>
                        <td>
                            <select name="mem_check" class="form-select">
                                <option value="<?php echo $result['mem_status']?>"><?php echo $result['mem_status']?></option>
                                <option value="enable" >Enable</option>
                                <option value="disable">Disable</option>
                            </select>
                        </td>
                        <td>
                            <select name="mem_status" class="form-select">
                                <option value="<?php echo $result['mem_check']?>"><?php echo $result['mem_check']?></option>
                                <option value="user" >User</option>
                                <option value="rider">Rider</option>
                                <option value="rest" >Restaurant</option>
                            </select>
                        </td>
                        <td><input type="text"  name="mem_address"  class="form-control" value="<?php echo $result['mem_address']?>"></td>
                        <td colspan="2"><button type="submit" name="update" class="btn btn-success form-control">UPDATE</button></td>
                        <td colspan="2"><button type="submit" name="delete" class="btn btn-danger form-control">DELETE</button></td>
                    </form>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>