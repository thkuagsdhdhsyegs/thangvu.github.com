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
	if(isset($_POST["submit"])){
		$malop=$_POST["txtmalop"];
		$tenlop=$_POST["txttenlop"];
		$sql="update lop set tenlop='$tenlop' where malop='$malop'";
		$result=mysqli_query($con,$sql);
		if($result)
			//echo "Sửa thành công";
			header('location:hienthilop.php');
			else
			echo "Sửa thất bại";
	}
	$malop=$_GET["malop"];
	$sql="select * from lop where malop='$malop'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	$malop=$row["malop"];
	$tenlop=$row["tenlop"];
	?>
	<form action="" method="post">
		<p align="center">Sửa lớp</p>
	<table align="center">
		<tr>
			<td>Mã lớp</td>
			<td><input type="text" name="txtmalop" value="<?php echo $row["malop"]?>"></td>
		</tr>
		<tr>
			<td>Tên lớp</td>
			<td><input type="text" name="txttenlop" value="<?php echo $row["tenlop"]?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Sửa" /><input type="reset" value="Huỷ"/> </td>
		</tr>
	</table>
	</form>
</body>
</html>
