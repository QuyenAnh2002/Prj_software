





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/admin/cssadmin/style.css">
    <title>login</title>
</head>
<body>
<div class="header-login">
    <div class="container-login">
        <div class = "navbar">
            <div class = "logo">
                <img src = "../image/logo.png" width="125px" height="100px">
            </div>
            <div class="title-login">
                <h1>Đăng nhập</h1>
            </div>
        </div>
        <div class="row-login">
            <div class="col2">
                <img src = "../image/bgr1.png">
            </div>
            <div class="form-box">
                <div class="button-box">
                    <div id = "btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Đăng nhập</button>
                    <button type="button" class="toggle-btn" onclick="register()">Đăng kí</button>
                </div>
                <form method = "POST" id = "register" class = "input-group" action="/admin/modules/quanliacc/xulire.php" >
                    <input type="text" class =  "input-field" placeholder="Tên đăng nhập"name="txtusername" required size = "20">
                    <input type="password" class =  "input-field" placeholder="Mật khẩu" required name="txtpassword" size = "6">
                    <input type="password" class =  "input-field" placeholder="Xác nhận mật khẩu" required name="txtrepassword" size = "6">
                    <button type ="submit" class = "submit-btn" name="register">Đăng kí</button>
                    


                </form>
 
                <form id = "login" class = "input-group" method = "POST" action="/admin/modules/quanliacc/xuli.php">
                    <input type="text" class =  "input-field" placeholder="Tên đăng nhập" required name="txtusername1" >
                    <input type="password" class =  "input-field" placeholder="Mật khẩu" required name="txtpassword1">
                    <button type ="submit" class = "submit-btn" name="login">Đăng nhập</button>
                </form>
                
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"> </script>


<script>
        var x = document.getElementById("login")
        var y = document.getElementById("register")
        var z = document.getElementById("btn")

        function register(){
            x.style.left = "-400px";
            y.style.left = "15px";
            z.style.left = "110px";


        }

        function login(){
            x.style.left = "0px";
            y.style.left = "450px";
            z.style.left = "0";


        }
    </script>

</body>
</html>

