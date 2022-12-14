<div class="clear">

</div>

<?php 
    if(isset($_GET['action']) && ($_GET['query'])){
        $tam = $_GET['action'];
        $query = $_GET['query'];
    }
    else{
        $tam = '';
        $query = '';
    }
    if($tam == 'quanlidanhmucsanpham' && $query == 'them'){
        include("modules/quanlisanpham/them.php");
        include("modules/quanlisanpham/lietke.php");

    }
    elseif($tam == 'quanlidanhmucsanpham' && $query == 'sua'){
        include("modules/quanlisanpham/sua.php");
    }


    elseif($tam == 'quanlisanpham' && $query == 'them'){
        include("modules/quanlisp/them.php");
        include("modules/quanlisp/lietke.php");
    }

    elseif($tam == 'quanlisanpham' && $query == 'sua'){
        include("modules/quanlisp/sua.php");
    }

    elseif($tam == 'quanliacc' && $query == 'them'){
        include("modules/quanlisp/sua.php");
    }
    elseif($tam == 'quanlidanhmucbaiviet' && $query == 'them'){
        header("Location:login.php");
    
    }
    else{
        include('modules/dashboard.php');
    }
   
?>