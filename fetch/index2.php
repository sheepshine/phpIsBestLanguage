<?php
    $conn=mysqli_connect("localhost","root","","test");

    //$query=mysqli_query($conn,"select * from mydata");

    mysqli_query($conn,'set names utf8');

    $query=mysqli_query($conn,"select count(*) from mydata");

    $arr=mysqli_fetch_row($query);

    echo $arr[0]."<br>";


    echo mysqli_fetch_array($query);

    if($query2=mysqli_query($conn,'update mydata set title=\'前端1\' where name="yang"')){
        echo '修改成功<br>';
        echo '修改的数据条数为'.mysqli_affected_rows($conn);
    }else{
        echo mysqli_error($conn);
    }

?>