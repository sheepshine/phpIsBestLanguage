<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
       
        <?php
            session_start();
            $_SESSION["username"]=$_POST["username"];
            $_SESSION["pwd"]=$_POST["password"];
            if($_SESSION["username"]==""){
                echo "<script>alert('请通过正确途径登录');history.back()</script>";
            }
        ?>
        <div>username:<?php echo $_SESSION["username"] ?></div>
        <div><?php
            if($_SESSION["pwd"]=="111"){
                echo "管理员牛逼";
            }
            else{
                echo "你好普通用户";
            }
         ?><div>
    </body>
</html>

