<div class="themqlsp">
<table class = "tbthem">
<form method="POST" action="modules/quanlisp/xuli.php" enctype="multipart/form-data">
    <tr>
        <h3 >Thêm thông tin sản phẩm</h3>
    </tr>
    <tr>  
        <td  style = "text-align: center">Tên sản phẩm</td>
        <td ><input type="text" name="tensp"></td>
    </tr>

    <tr>
        <td style = "text-align: center">Mã sản phẩm</td>
    
        <td><input type="text" name="masp"></td>
    </tr>
    <tr>
        <td style = "text-align: center">Số lượng sản phẩm</td>
    
        <td><input type="text" name="soluongsp"></td>
    </tr>
    <tr>  
        <td  style = "text-align: center">Giá sản phẩm</td>
        <td ><input type="text" name="giasp"></td>
    </tr>

    <tr>  
        <td  style = "text-align: center">Hình ảnh sản phẩm</td>
        <td ><input type="file" name="img_product"></td>
    </tr>
    <tr>  
        <td  style = "text-align: center">Thông tin sản phẩm</td>
        <td ><textarea rows = "5" cols = "50" name="product_detail"></textarea></td>
    </tr>

    <tr>
        <td>Nổi bật</td>
        <td><select name="noi_bat" id="">
            <option value="Có">Có</option>
            <option value="Không">Không</option>
        </select></td>
    </tr>


    <tr>
        
        <td class = "submitthem" colspan="2"><input type="submit" name = "themsp" value="Thêm sản phẩm"></td>
    </tr>
  </form>
</table>   
</div> 