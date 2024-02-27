<?php
include('../connect.php');

if (isset($_POST['enable'])) {
    $mem_id = $_POST['mem_id'];

    $sql = "UPDATE member SET mem_check = 'enable' WHERE mem_id = '$mem_id' ";
    $query = mysqli_query($connect, $sql);
    if ($query) {
        echo "<script>alert('enable success'); window.location = 'manage_member.php'; </script>";
    }
}
if (isset($_POST['delete'])) {
    $mem_id = $_POST['mem_id'];

    $sql = "DELETE FROM member WHERE mem_id = '$mem_id' ";
    $query = mysqli_query($connect, $sql);
    if ($query) {
        echo "<script>alert('delete success'); window.location = 'manage_member.php'; </script>";
    }
} else if (isset($_POST['insert'])) {
    $mem_id = $_POST['mem_id'];
    $mem_user     = $_POST['mem_user'];
    $mem_pass     = $_POST['mem_pass'];
    $mem_name     = $_POST['mem_name'];
    $mem_last     = $_POST['mem_last'];
    $mem_status   = $_POST['mem_status'];
    $mem_check    = $_POST['mem_check'];
    $mem_mail     = $_POST['mem_mail'];
    $mem_phone    = $_POST['mem_phone'];
    $mem_address  = $_POST['mem_address'];

    $sql = "INSERT INTO member(mem_id,mem_user,mem_pass,mem_name,mem_last,mem_status,mem_check,mem_mail,mem_phone,mem_address)VALUES ('$mem_id','$mem_user','$mem_pass','$mem_name','$mem_last','$mem_status','$mem_check','$mem_mail','$mem_phone','$mem_address')";
    $query = mysqli_query($connect, $sql);
    if ($query) {
        echo "<script>alert('add member success'); window.location = 'manage_member.php'; </script>";
    }
} else if (isset($_POST['update'])) {
    $mem_id = $_POST['mem_id'];
    $mem_user     = $_POST['mem_user'];
    $mem_pass     = $_POST['mem_pass'];
    $mem_name     = $_POST['mem_name'];
    $mem_last     = $_POST['mem_last'];
    $mem_status   = $_POST['mem_status'];
    $mem_check    = $_POST['mem_check'];
    $mem_mail     = $_POST['mem_mail'];
    $mem_phone    = $_POST['mem_phone'];
    $mem_address  = $_POST['mem_address'];

    $sql = "UPDATE member SET 
                            mem_user    = '$mem_user',
                            mem_pass    = '$mem_pass',
                            mem_name    = '$mem_name',
                            mem_last    = '$mem_last',
                            mem_status  = '$mem_status',
                            mem_check   = '$mem_check',
                            mem_mail    = '$mem_mail',
                            mem_phone   = '$mem_mail',
                            mem_address = '$mem_address'
                            WHERE mem_id = '$mem_id' ";
    $query = mysqli_query($connect, $sql);
    if ($query) {
        echo "<script>alert('update member success'); window.location = 'manage_member.php'; </script>";
    }
} else if(isset($_POST['update_profile'])){
    $mem_id      = $_POST['mem_id'];
    $mem_user    = $_POST['mem_user'];
    $mem_pass    = $_POST['mem_pass'];
    $mem_name    = $_POST['mem_name'];
    $mem_last    = $_POST['mem_last'];
    $mem_mail    = $_POST['mem_mail'];
    $mem_phone   = $_POST['mem_phone'];
    $mem_address = $_POST['mem_address'];

    $sql = "UPDATE member SET 
                            mem_name    = '$mem_name',
                            mem_user    = '$mem_user',
                            mem_pass    = '$mem_pass',
                            mem_name    = '$mem_name',
                            mem_last    = '$mem_last',
                            mem_mail    = '$mem_mail',
                            mem_phone   = '$mem_phone',
                            mem_address = '$mem_address' ";
    if(!empty($_FILES['file']['name'])){
        $image = basename($_FILES['file']['name']);
        $floder = "../asset/uploads/";
        $floder_traget = $floder . $image;
        $file_type = pathinfo($floder_traget,PATHINFO_EXTENSION);
        $accep_type = ['png','pdf','jpg','jpeg','gif'];
        
        if(in_array($file_type, $accep_type) && move_uploaded_file($_FILES['file']['tmp_name'], $floder_traget)){
            $sql .= ", mem_img = '$image' ";
        }
    }
    $sql .= "WHERE mem_id = '$mem_id' ";
    $query = mysqli_query($connect, $sql);
    if($query){
        echo "<script>alert('update member success'); window.location = 'profile.php'; </script>";
    }

}

    // echo"<pre>";
    //     print_r($_POST);
    //     print_r($_FILES['file']);
    // echo"</pre>";