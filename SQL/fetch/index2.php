<?php
    $conn=mysqli_connect("localhost","root","","test");

    //$query=mysqli_query($conn,"select * from mydata");

    $query=mysqli_query($conn,"select count(*) from mydata");

    $arr=mysqli_fetch_row($query);

    echo $arr[0]."<br>";


    echo mysqli_fetch_array($query);

    if($query2=mysqli_query($conn,"update mydata set title=niubi where name=yang")){
        echo '修改成功';
    }else{
        echo mysqli_error();
    }

?>