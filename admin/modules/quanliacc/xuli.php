<?php 
    session_start();
       
 include('../../config/connect.php');   
  /*  $txtusername = $_POST['txtusername'];
    $txtpassword = $_POST['txtpassword'];
    $retxtpassword = $_POST['txtrepassword'];*/

    #login
    $txtusername1 = $_POST['txtusername1'];
    $txtpassword1 = $_POST['txtpassword1'];
    


    if(isset($_POST['register'])){
        if($retxtpassword !=  $txtpassword){
            echo '<script>alert("mk k khop")</script>';
            header('Location:../../login.php');
        }
        $sql_them = "INSERT INTO db_acc(name_acc, pass_acc) VALUE('".$txtusername."','".$txtpassword."')";
        mysqli_query($mysqli,$sql_them);
        header('Location:../../login.php');

    }
    elseif(isset($_POST['login'])){
        $sql = "SELECT * FROM  db_acc WHERE name_acc ='".$txtusername1."' AND pass_acc ='".$txtpassword1."' LIMIT 1 ";
        $row = mysqli_query($mysqli, $sql);
        $num_count = mysqli_num_rows($row);
        if ($num_count ==0){

            echo "Tên đăng nhập hoac mat khau khong chinh xac. vui long thu lai. <a href='javascript: history.go(-1)'>Thử lại</a>";
            exit;
            header('Location:../../login.php');
        }


        else{
            if($txtusername1 == "admin" && $txtpassword1 = "admin" ){
                header('Location:../../index.php');
            }
            else{
            $_SESSION['login'] =  $txtusername1;
            header('Location:../../../index.php');
        }
        }

    }

    
?>