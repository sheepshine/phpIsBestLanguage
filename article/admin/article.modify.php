<?php
	require('../connect.php');

	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from article where id=$id");
	$data=mysqli_fetch_assoc($query);


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <form id="form1" name='form1' method="post" action="article.modify.handle.php">
    	<input type="hidden" value="<?php echo $data['id'] ?>" name="id" />
    	<input type="text" value="<?php echo $data['title'] ?>" name="title" placeholder="标题" />
    	<input type="text" value="<?php echo $data['description'] ?>" name="description" placeholder="简介" />
    	<textarea type="text" name="content" placeholder="简介"><?php echo $data['content'] ?></textarea> 
    	<button type="submit">提交</button>
    </form>
</body>
</html>