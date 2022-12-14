
<?php 
    session_start();
    include('../../admin/config/connect.php');  
    $id = $_GET['id'];
    $sql_them1 = "SELECT * FROM db_sanpham WHERE id_sanpham = '$id' LIMIT 1";
    $query_them1 = mysqli_query($mysqli,  $sql_them1);
    $soluongsp = $_POST['soluongsp'];
    $size = $_POST['size'];
    $sql_them12 = "SELECT * FROM cart WHERE id_sanpham = '$id'";
    $query_them12 = mysqli_query($mysqli,  $sql_them12);
    while($row_pro12 = mysqli_fetch_array($query_them1 )){
        $tensp = $row_pro12['ten_sanpham'];
        $masp = $row_pro12['ma_sanpham'];
        $imgsp = $row_pro12['img_sanpham'];
        $giasp = $row_pro12['gia_sp'];

        
        if(isset($_POST['buy'])){
            if ($soluongsp >= 1){
                if ($size == 'xxl' or $size == 'xl' or $size == 'l'or $size == 'm'or $size == 's'){
                $sql_them_cart = "INSERT INTO cart(ten_sp, ma_sp, img_sp, soluong_sp, gia_sp, size) 
                VALUE('".$tensp."','".$masp."','".$imgsp."','".$soluongsp."','".$giasp."','".$size."')";
                mysqli_query($mysqli,$sql_them_cart);}}
                header("Location:../../detail?quanli=giohang");      
        }
        
    
    ?>


    <?php 

    } ?>