

<h3>Hiển thị sản phẩm</h3>
<?php
    
    $sql_lietke_sp= "SELECT * FROM db_sanpham ORDER BY id_sanpham ASC";
    $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);



?>
<table class = "tblietke1">
  <tr>
    <th>ID: </th>
    <th>Tên Sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Giá</th>
    <th>Số lượng</th>
    <th>Mã sản phẩm</th>
    <th>Nội Dung</th>
    <th>Nổi Bật</th>

  </tr>
    <?php 
        $i  = 0;
        while($row = mysqli_fetch_array($query_lietke_sp)){
            $i++;
     
    
    ?>


  <tr>
    <td><?php echo $i ?>   </td>
 
    <td><?php echo $row['ten_sanpham']?></td>

    <td><img src = "/admin/modules/quanlisp/upload/<?php echo $row['img_sanpham']?>" width="150" height="200"></td>


    <td><?php echo $row['gia_sp']?></td>
    <td><?php echo $row['soluong_sp']?></td>
    <td><?php echo $row['ma_sanpham']?></td>    
    <td><?php echo $row['product_detail']?></td>
    <td><?php echo $row['noi_bat']?>
          
  </td>
    <td>
      <a href = "modules/quanlisp/xuli.php?idsp=<?php echo $row['id_sanpham'] ?>">Xóa | 
      <a href = "?action=quanlisanpham&query=sua&idsp=<?php echo $row['id_sanpham'] ?>"> Sửa </a>
    </td>
   
  </tr>
  <?php } ?> 
</table>  