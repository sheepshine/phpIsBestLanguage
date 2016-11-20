<?php
	require_once('../connect.php');

	if($_POST['title']&&empty($_POST['title'])){
		echo '标题不能为空';
		echo "<script>alert('标题不能为空');window.location.href='article.add.php'</script>";
	}
	$id=$_POST['id'];
	$title=$_POST['title'];
	$description=$_POST['description'];
	$content=$_POST['content'];
	$dateline=time();
	$sql="update article set title=$title,description=$description,content=$content,dateline=$dateline where id=$id";

	$query=mysqli_query($conn,$sql);

	if($query){
		echo '修改成功';
	}else{
		echo mysqli_error($conn);
	}
?>
