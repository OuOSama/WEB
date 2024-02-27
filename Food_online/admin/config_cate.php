<?php
    include('../connect.php');

    if(isset($_POST['insert'])){
        $cate_id = $_POST['cate_id'];
        $cate_name = $_POST['cate_name'];

        $sql = "INSERT INTO cate_res(cate_id,cate_name) VALUES ('$cate_id','$cate_name')";
        $query = mysqli_query($connect, $sql);
        if($query){
            echo"<script>alert('add succss'); window.location = 'manage_cate.php';</script>";
        }
    }else if(isset($_POST['update'])){
        $cate_id = $_POST['cate_id'];
        $cate_name = $_POST['cate_name'];

        $sql = "UPDATE cate_res SET cate_name = '$cate_name' WHERE cate_id = '$cate_id' ";
        $query = mysqli_query($connect, $sql);
        if($query){
            echo"<script>alert('update succss'); window.location = 'manage_cate.php';</script>";
        }
    }else if(isset($_POST['delete'])){
        $cate_id = $_POST['cate_id'];

        $sql = "DELETE FROM cate_res WHERE cate_id = '$cate_id' ";
        $query = mysqli_query($connect, $sql);
        if($query){
            echo"<script>alert('delete succss'); window.location = 'manage_cate.php';</script>";
        }
    }
?>