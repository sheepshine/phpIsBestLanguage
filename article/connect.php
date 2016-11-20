<?php
    require_once('config.php');
    $conn=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);

    if(!$conn){
       echo mysqli_error();
    }

    mysqli_query($conn,'set names utf8');
    

?>