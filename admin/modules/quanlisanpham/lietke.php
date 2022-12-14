

<h3>Hiển thị danh mục sản phẩm</h3>
<?php
    
    $sql_lietke_danhmucsp= "SELECT * FROM db_danhmuc ORDER BY thutu ASC";
    $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);



?>
<table class = "tblietke">
  <tr>
    <th>ID: </th>
    <th>Tên danh mục</th>
    <th>Quản lí</th>

  </tr>
    <?php 
        $i  = 0;
        while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
            $i++;
     
    
    ?>


  <tr>
    <td><?php echo $i ?>   </td>
 
    <td><?php echo $row['ten_danhmuc']?></td>
    <td>
      <a href = "modules/quanlisanpham/xuli.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa | 
      <a href = "?action=quanlidanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>"> Sửa </a>
    </td>
   
  </tr>
  <?php } ?> 
</table>  