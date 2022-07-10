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
	if(isset($_POST['submit'])){
		$malop=$_POST["txtmalop"];
		$tenlop=$_POST["txttenlop"];
		$sql="insert into lop(malop,tenlop)values('$malop','$tenlop')";
		$result=mysqli_query($con,$sql);
	if($result)
		//echo "Thêm mới thành công";
		header('location:hienthilop.php');
	else
		echo "thêm mới thất bại";
	}
	?>
	<form action="" method="post">
		<p align="center">Thêm Mới lớp</p>
	<table align="center">
		<tr>
			<td>Mã lớp</td>
			<td><input type="text" name="txtmalop" /></td>
		</tr>
		<tr>
			<td>Tên lớp</td>
			<td><input type="text" name="txttenlop" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Thêm mới" /><input type="reset" value="Huỷ"/> </td>
		</tr>
	</table>
	</form>
</body>
</html>
