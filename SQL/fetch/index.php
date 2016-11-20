<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="test";

    $conn=new mysqli($servername,$username,$password,$dbname);

    if(!$conn){
        die("连接失败".mysqli_connect_error());
    }else{
        echo "连接成功";
    }
    //$query = mysqli_query($conn,"INSERT INTO mydata (name, title)VALUES ('hehe','222222')");
    $query = mysqli_query($conn,"select * from mydata");
    var_dump($query);
    
    // while($row=mysqli_fetch_row($query)){
    //     print_r($row);
    // }

    // while($row=mysqli_fetch_array($query,MYSQL_ASSOC)){
    //     print_r($row);
    //     echo $row['name']."<br>";
    // }

    // while($row=mysqli_fetch_aSSOC($query)){
    //     print_r($row);
    //     echo $row['name']."<br>";
    // }

    $arr=mysqli_fetch_object($query);

    print_r($arr)

?>