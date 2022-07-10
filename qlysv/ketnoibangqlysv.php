<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>
	<?php
	$servername="localhost";
	$username="root";
	$password="";
	$databasename="qlsv";
	$con=mysqli_connect($servername,$username,$password,$databasename);
	if(!$con)
		echo "kết nối không thành công"
	?>
</body>
</html>
