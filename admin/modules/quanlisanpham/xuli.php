<?php 


include('../../config/connect.php');
$tenloaisp = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];
$tenloaisp1 = $_POST['tendanhmuc1'];
$thutu1 = $_POST['thutu1'];

    if(isset($_POST['themdanhmuc'])){
        $sql_them = "INSERT INTO db_danhmuc(ten_danhmuc, thutu) VALUE('". $tenloaisp."','".$thutu."')";
        mysqli_query($mysqli,$sql_them);
        header('Location:../../index.php?action=quanlidanhmucsanpham&query=them');

    }
    if(isset($_POST['suadanhmuc'])){
        $tenloaisp1 = $_POST['tendanhmuc1'];
        $thutu1 = $_POST['thutu1'];
        $id = $_GET['iddanhmuc'];

        $sql_update1 = " UPDATE db_danhmuc WHERE id_danhmuc = '$id' SET ten_danhmuc='$tenloaisp', thutu = '$thutu'  ";
        mysqli_query($mysqli,$sql_update1);
        header('Location:../../index.php?action=quanlidanhmucsanpham&query=them');

    }

    else{
        $id = $_GET['iddanhmuc'];
        $sql_xoa = "DELETE FROM db_danhmuc WHERE id_danhmuc = '".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php?action=quanlidanhmucsanpham&query=them');
    }


?>
