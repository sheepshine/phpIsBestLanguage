<?php
   $servername="localhost";
    $username="root";
    $password="";
    $dbname="test";

    $conn=new mysqli($servername,$username,$password,$dbname);

    if(!$conn){
        die("连接失败".mysqli_connect_error());
    }

    $sql="INSERT INTO mydata(name,title) VALUES('yangchaoben','jser');";
    $sql .="INSERT INTO mydata(name,title) VALUES('sheepshine','nodejs');";
    $sql .="INSERT INTO mydata(name,title) VALUES('yang','php');";
   
    // if(mysqli_query($conn,$sql)){
    //     echo "添加成功";
    // }else{
    //     echo "失败".mysqli_connect_error();
    // }

    if(mysqli_multi_query($conn,$sql)){
        echo "新增记录成功";
    }else{
        echo mysqli_error($conn);
    }


?>