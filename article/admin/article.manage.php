<?php
	require_once("../connect.php");

	$sql="select * from article order by dateline desc";
	$query=mysqli_query($conn,$sql);
	if($query&&mysqli_num_rows($query)){
		while($row=mysqli_fetch_assoc($query)){
			$data[]=$row;
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		if(!empty($data)){
			foreach($data as $value){
			
	?>
	<li>
		<h2><?php echo $value['title']; ?></h2>
		<a href="article.del.handle.php?id=<?php echo $value['id'] ?>">删除</a>
		<a href="article.modify.php?id=<?php echo $value['id'] ?>">编辑</a>
	</li>
	<?php
			}
		}
	?>
</body>
</html>