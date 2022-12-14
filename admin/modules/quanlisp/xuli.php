<?php 


include('../../config/connect.php');
$tensp = $_POST['tensp'];
$masp = $_POST['masp'];
$img_product = $_FILES['img_product']['name'];
$img_product_tmp = $_FILES['img_product']['tmp_name'];
$hinhanh = time()."_".$img_product;
$soluongsp = $_POST['soluongsp'];
$giasp = $_POST['giasp'];
$thongtinsp = $_POST['product_detail'];
$noi_bat = $_POST['noi_bat'];





    if(isset($_POST['themsp'])){
        $sql_them = "INSERT INTO db_sanpham(ten_sanpham, ma_sanpham, img_sanpham, soluong_sp, gia_sp, product_detail, noi_bat) 
        VALUE('".$tensp."','".$masp."','".$img_product."','".$soluongsp."','".$giasp."','".$thongtinsp."','".$noi_bat."')";
        mysqli_query($mysqli,$sql_them);
        move_uploaded_file($img_product_tmp, 'upload/' .$img_product);
        header('Location:../../index.php?action=quanlisanpham&query=them');

    }
    if(isset($_POST['suadanhmuc'])){
        $tenloaisp1 = $_POST['tendanhmuc1'];
        $thutu1 = $_POST['thutu1'];
        $id = $_GET['iddanhmuc'];

        $sql_update1 = " UPDATE db_danhmuc WHERE id_danhmuc = '$id' SET ten_danhmuc='$tenloaisp', thutu = '$thutu'  ";
        mysqli_query($mysqli,$sql_update1);
        header('Location:../../index.php?action=quanlisanpham&query=them');

    }

    else{
        $idsp = $_GET['idsp'];
        $sql_xoa = "DELETE FROM db_sanpham WHERE id_sanpham = '".$idsp."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php?action=quanlisanpham&query=them');
    }


?>
