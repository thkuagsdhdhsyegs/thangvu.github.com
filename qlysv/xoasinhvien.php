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
	if(isset($_REQUEST['masv']) and $_REQUEST['masv']!="")
	$masv=$_GET["masv"];
	$sql="delete from sinhvien where masv='$masv'";
	$result=mysqli_query($con,$sql);
	if($result)
   	echo "Xoá thành công!";
  	else 
   	echo "Thất bại! " ;
	header('location:hienthibangqlysv.php');
	?>
</body>
</html>
