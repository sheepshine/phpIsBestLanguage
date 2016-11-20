<?php
	require('../connect.php');
	$id=$_GET['id'];
	$sql="delete from article where id=$id";
    
	$query=mysqli_query($conn,$sql);

    if($query){
        echo '删除成功';
    }else{
        echo mysqli_error($conn);
    }
?>
