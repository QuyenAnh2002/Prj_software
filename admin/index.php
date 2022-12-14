<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="/admin/cssadmin/style.css">
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Admin</h1>
    <div class="wapper">
    <?php 
        include('config/connect.php');    
        include('modules/header.php');
        include('modules/menu.php');
        include('modules/main.php');
        include('modules/footer.php');
    ?>
    </div>
</body>
</html>