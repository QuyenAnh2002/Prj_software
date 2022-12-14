<?php 
    $sql_pro = "SELECT * FROM cart";
    $query_pro = mysqli_query($mysqli, $sql_pro);

    
?>  

<div class="below-container1 cart-page">
    <?php
    while($row_title23 = mysqli_fetch_array($query_pro)){
        $_SESSION["cart"] = $row_title23['soluong_sp']*$row_title23['gia_sp'];
        $subtotal = $_SESSION["cart"]; 
        $totalprice = 0;
        $totalprice += $subtotal; 
        $ship = 20000;
        $total = $totalprice + $ship;
      ?>
      
            <table>
                <tr>

                    <th>Thứ tự</th>
                    <th> Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                   <th> &#160;</th>
                </tr>
                <tr>

                    <div class="border-product">
                        <td>
                            <p>1</p>
                        </td>
                        <td>
                            <div class="cart-info">
                                <img src="./../../admin/modules/quanlisp/upload/<?php echo $row_title23['img_sp'] ?>" width="400" height="500" >
                                <h3><?php echo $row_title23['ten_sp'] ?></h3>
                            </div>
                        </td>

                        <td><h3><?php echo $row_title23['soluong_sp'] ?></h3></td>

                        <td><h3><?php echo number_format($subtotal) ?></h3></td>
                        <form method="POST" enctype="multipart/form-data" action="./page/xuli/anh.php?idc=<?php echo $row_title23['id_sp'] ?>">
                        <td><input type="submit" name = "del" value="Xóa" class = "abc"></td>
                        </form>
                    </div>  
                </tr>
            </table>
            <?php

}

?>
            <div class="total-price">
                <table>
                    <tr>
                        <td> &#160;</td>
                        <td><?php echo number_format($totalprice) ?></td>
                    </tr>
                    <tr>
                        <td>Phí vận chuyển</td>
                        <td>20.000</td>
                    </tr>

                    <tr>
                        <td>Tổng cộng</td>
                        <td><?php echo number_format($total) ?></td>
                    </tr>
                </table>
            </div>

            <div class="buy-now">


        
                <a href="/shoppingcart.html" class = "buy">Mua ngay</a>
            </div>

            
    </div>

