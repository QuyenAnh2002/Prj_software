
<div class = "below-container1">
    <div class = "row row2">
        <h2>Sản phẩm nổi bật</h2>
    </div>
<?php

    $sql_pro = "SELECT * FROM db_sanpham ORDER BY id_sanpham ASC";
    $query_pro = mysqli_query($mysqli, $sql_pro);
    $row_title = mysqli_fetch_array($query_pro);
    

?>
<div class="col41" id = "a">

            <?php while($row_pro = mysqli_fetch_array($query_pro)){
                if($row_pro['noi_bat'] == 'Có'){
            ?>
           <div class="product2">
            <a href="detail.php?quanli=chitietsanpham&id=<?php echo $row_pro['id_sanpham'] ?>" name = "link"><img src = "./../admin/modules/quanlisp/upload/<?php echo $row_pro['img_sanpham'] ?>"width="300" height="400" ></a>
            <h4><?php echo $row_pro['ten_sanpham'] ?></h4>
            <p><?php echo $row_pro['gia_sp'] ?></p>
            <span class = "buy"><a href="detail.php?quanli=chitietsanpham&id=<?php echo $row_pro['id_sanpham'] ?>">Buy Now</span></a></div> 
            <?php 
        }   }
            ?>

</div>
</div>