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
		$masv=$_POST["txtmasv"];
		$hoten=$_POST["txthoten"];
		$ngaysinh=$_POST["txtngaysinh"];
		$quequan=$_POST["txtquequan"];
		$dienthoai=$_POST["txtdienthoai"];
		$email=$_POST["txtemail"];
		$malop=$_POST["txtmalop"];
		$anh=$_POST["txtanh"];
		$sql="update sinhvien set hoten='$hoten',ngaysinh='$ngaysinh',quequan='$quequan',dienthoai='$dienthoai',
		email='$email',malop='$malop',anh='$anh' where masv='$masv'";
		$result=mysqli_query($con,$sql);
		if($result)
			//echo "Sửa thành công";
			header('location:hienthibangqlysv.php');
			else
			echo "Sửa thất bại";
	}
	$masv=$_GET["masv"];
		$sql="select * from sinhvien where masv='$masv'";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($result);
		$masv = $row["masv"];
		$hoten=$row["hoten"];
		$ngaysinh=$row["ngaysinh"];
		$quequan=$row["quequan"];
		$dienthoai=$row["dienthoai"];
		$email=$row["email"];
		$malop=$row["malop"];
		$anh=$row["anh"];
	
	?>
	<form action="" method="post">
		<p align="center">Sửa Sinh Viên</p>
	<table align="center">
		<tr>
			<td>Mã sinh viên</td>
			<td><input type="text" name="txtmasv"value="<?php echo $row["masv"]?>"></td>
		</tr>
		<tr>
			<td>Họ Tên</td>
			<td><input type="text" name="txthoten" value="<?php echo $row["hoten"]?>"></td>
		</tr>
		<tr>
			<td>Ngày sinh</td>
			<td><input type="date" name="txtngaysinh" value="<?php echo $row["ngaysinh"]?>" ></td>
		</tr>
		<tr>
			<td>Quê Quán</td>
			<td><input type="text" name="txtquequan" value="<?php echo $row["quequan"]?>" ></td>
		</tr>
		<tr>
			<td>Điện thoại</td>
			<td><input type="text" name="txtdienthoai" value="<?php echo $row["dienthoai"]?>" ></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="txtemail" value="<?php echo $row["email"]?>" ></td>
		</tr>
		<tr>
			<td>Mã lớp</td>
			<td><input type="text" name="txtmalop" value="<?php echo $row["malop"]?>" ></td>
		</tr>
		<tr>
			<td>Ảnh</td>
			<td><input type="text" name="txtanh" value="<?php echo $row["anh"]?>" ></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Sửa" /><input type="reset" value="Huỷ"/> </td>
		</tr>
	</table>
	</form>
</body>
</html>
