<?php
include_once("ketnoibangqlysv.php");
?>
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
	if(isset($_REQUEST['malop']) and $_REQUEST['malop']!="")
	$malop=$_GET["malop"];
	$sql="delete from lop where malop='$malop'";
	$result=mysqli_query($con,$sql);
	if($result)
   	echo "Xoá thành công!";
  	else 
   	echo "Thất bại! " ;
	header('location:hienthilop.php');
	?>
</body>
</html>
