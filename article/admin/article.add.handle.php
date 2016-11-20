<?php
	require_once('../connect.php');

	if($_POST['title']&&empty($_POST['title'])){
		echo '标题不能为空';
		echo "<script>alert('标题不能为空');window.location.href='article.add.php'</script>";
	}
	$title=$_POST['title'];
	$description=$_POST['description'];
	$content=$_POST['content'];
	$dateline=time();
	$sql="insert into article(title,description,content,dateline) values('$title','$description','$content',$dateline)";

	$query=mysqli_query($conn,$sql);

	if($query){
		echo '新增成功';
	}else{
		echo mysqli_error($conn);
	}
?>
