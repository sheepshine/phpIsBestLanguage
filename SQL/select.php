<?php
   $servername="localhost";
    $username="root";
    $password="";
    $dbname="test";

    $conn=new mysqli($servername,$username,$password,$dbname);

    if(!$conn){
        die("连接失败".mysqli_connect_error());
    }

    $sql="SELECT name,title FROM mydata";

    $result=$conn->query($sql);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            echo $row["name"].$row["title"]."<br>";
        }
    }else{
        echo "暂无数据";
    }




?>