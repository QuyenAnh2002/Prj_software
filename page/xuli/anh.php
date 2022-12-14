
<?php

include('../../admin/config/connect.php');  
$id = $_GET['idc'];

if(isset($_POST['del'])){
    $sql_xoa = "DELETE FROM cart WHERE id_sp = '".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header("Location:../../detail?quanli=giohang");      
        }


        ?>