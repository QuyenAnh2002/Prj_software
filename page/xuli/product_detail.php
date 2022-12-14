<?php 
   
    $id = $_GET['id'];
    $sql_chitiet = "SELECT * FROM db_sanpham WHERE id_sanpham = '$id' LIMIT 1";
    $query_chitiet = mysqli_query($mysqli, $sql_chitiet);
    
    while($row_pro1 = mysqli_fetch_array( $query_chitiet)){
    ?>
<form method="POST" enctype="multipart/form-data" action="/page/xuli/shoppingcart.php?id=<?php echo $row_pro1['id_sanpham'] ?>">
    <!-----------Product Details --- ---------->
    <div class = "below-container1 single-product">
        <div class="row-product">
            <div class="col2-product">
                <img src = "./../../admin/modules/quanlisp/upload/<?php echo $row_pro1['img_sanpham'] ?>" width="400" height="500" >
            </div>
            <div class="col2-product">
                <h1><?php echo $row_pro1['ten_sanpham'] ?></h1>
                <h3><?php echo $row_pro1['gia_sp'] ?></h3> 
                <select name = "size" >
                    <option>Select Size</option>
                    <option value="xxl">XXL</option>
                    <option value="xl">XL</option>
                    <option value="l">L</option>
                    <option value="m">M</option>
                    <option value="s">S</option>
                </select>

                    <input type = "text" name = "soluongsp">

                  <input type="submit" name = "buy" value="Mua ngay" class = "buy">
                <h2>Chi tiết sản phẩm</h2>
                <p><?php echo $row_pro1['product_detail'] ?></p>
                <?php 
          }
            ?>
            </div>




        </div>
    </div>
</form>
