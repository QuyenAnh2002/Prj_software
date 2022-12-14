

<h3>Hiển thị danh mục sản phẩm</h3>
<?php

    
 include('../../config/connect.php');   
    $sql_lietke_acc= "SELECT * FROM db_acc ORDER BY id_acc ASC";
    $query_lietke_acc = mysqli_query($mysqli,$sql_lietke_acc);



?>
<table class = "tblietke">
  <tr>
    <th>ID: </th>
    <th>Tên đăng nhập</th>
    <th>password</th>

  </tr>
    <?php 
        $i  = 0;
        while($row = mysqli_fetch_array($query_lietke_acc)){
            $i++;
     
    
    ?>


  <tr>
    <td><?php echo $i ?>   </td>
 
    <td><?php echo $row['name_acc']?></td>
    <td><?php echo $row['pass_acc']?></td>
    <td>
      <a href = "modules/quanliacc/xuli.php?idacc=<?php echo $row['id_acc'] ?>">Xóa | 
    </td>
   
  </tr>
  <?php } ?> 
</table>  