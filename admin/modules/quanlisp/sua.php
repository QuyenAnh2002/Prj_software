<?php
    $sql_sua_sp= "SELECT * FROM db_sanpham WHERE id_sanpham =' $_GET[idsp]' LIMIT 1" ;
    $query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);

?>
<?php
echo "hehe";
?>

<table  border = "1px"width = "40%" style = "border-collapse: collapse">
<form method="POST" action="modules/quanlisp/xuli.php?idsp =<?php echo $_GET['idsp']?>">

<?php  
while ($dong1 = mysqli_fetch_array($query_sua_sp)){
?>
    <tr>
        <th >Sửa Thong tin sản phẩm</th>
    </tr>
    <tr>  
        <td  style = "text-align: center">Tên sản phẩm</td>
        <td ><input type="text" value= "<?php echo $dong1['ten_sanpham'] ?>" name="tensp"></td>
    </tr>

    <tr>
        <td style = "text-align: center">Mã sản phẩm</td>
    
        <td><input type="text" value= "<?php echo $dong1['ma_sanpham'] ?>" name="masp"></td>
    </tr>
    <tr>
        <td style = "text-align: center">Số lượng sản phẩm</td>
    
        <td><input type="text" value= "<?php echo $dong1['soluong_sp'] ?>"name="soluongsp"></td>
    </tr>
    <tr>  
        <td  style = "text-align: center">Giá sản phẩm</td>
        <td ><input type="text" value= "<?php echo $dong1['gia_sp'] ?>" name="giasp"></td>
    </tr>

    <tr>  
        <td  style = "text-align: center">Hình ảnh sản phẩm</td>
        <td ><input type="file" value= "<?php echo $dong1['img_sanpham'] ?>" name="img_product"></td>
    </tr>
    <tr>  
        <td  style = "text-align: center">Thông tin sản phẩm</td>
        <td ><textarea rows = "5" cols = "50" value= "<?php echo $dong1['product_detail'] ?>" name="product_detail"></textarea></td>
    </tr>


    <tr>
        
        <td class = "submitthem" colspan="5"><input type="submit" name = "themsp" value="Thêm sản phẩm"></td>
    </tr>
    <?php
    }
    ?>
  </form>
</table>