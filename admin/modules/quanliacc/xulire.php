<?php 
    session_start();
include('../../config/connect.php');   
    $txtusername = $_POST['txtusername'];
    $txtpassword = $_POST['txtpassword'];
    $retxtpassword = $_POST['txtrepassword'];
    if(isset($_POST['register'])){
        if($retxtpassword !=  $txtpassword){
            echo ". Mat khau khong khop. xin vui long thu lai. <a href='javascript: history.go(-1)'>Thử lại</a>";
            exit;
            header('Location:../../login.php');
        }
        else{
        $sql_them = "INSERT INTO db_acc(name_acc, pass_acc) VALUE('".$txtusername."','".$txtpassword."')";
        mysqli_query($mysqli,$sql_them);
        header('Location:../../login.php');
    }
    }


    ?>