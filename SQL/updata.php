<?php
   $servername="localhost";
    $username="root";
    $password="";
    $dbname="test";

    $conn=new mysqli($servername,$username,$password,$dbname);

    if(!$conn){
        die("连接失败".mysqli_connect_error());
    }

    

  mysqli_query($conn,"UPDATE mydata SET title='php' WHERE name='yangchaoben'");

    // if($result->num_rows>0){
    //     while($row=$result->fetch_assoc()){
    //         echo $row["name"].$row["title"]."<br>";
    //     }
    // }else{
    //     echo "暂无数据";
    // }




?>