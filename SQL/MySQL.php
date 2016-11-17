<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="test";

    $conn=new mysqli($servername,$username,$password,$dbname);

    if (mysqli_connect_error()) {
        die("数据库连接失败: " . mysqli_connect_error());
    }

    echo '连接成功';

    $sql="CREATE TABLE MyData1(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,name VARCHAR(60) NOT NULL,title VARCHAR(60))";

    if(mysqli_query($conn, $sql)){
        echo "数据表创建成功";
    }else{
        echo "数据表创建错误".mysqli_error($conn);
    }

    mysqli_close($conn);
?>