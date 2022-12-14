<div class="clear">

</div>

<?php 
    if(isset($_GET['quanli'])){
        $tam = $_GET['quanli'];
    }
    else{
        $tam = '';
    }
    if($tam == 'chitietsanpham'){
   
 
    include("./page/xuli/product_detail.php");}

    elseif($tam == "giohang"){
        include("./page/xuli/cart.php");
    }
    elseif($tam == "sp"){
        include("./page/xuli/product.php");
    }

    else{
    }


?>