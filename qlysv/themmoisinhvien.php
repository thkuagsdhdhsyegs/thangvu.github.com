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
		$masv=$_POST["txtmasv"];
		$hoten=$_POST["txthoten"];
		$ngaysinh=$_POST["txtngaysinh"];
		$quequan=$_POST["txtquequan"];
		$dienthoai=$_POST["txtdienthoai"];
		$email=$_POST["txtemail"];
		$malop=$_POST["txtmalop"];
		$anh=$_POST["txtanh"];
		$sql="insert into sinhvien(masv,hoten,ngaysinh,quequan,dienthoai,email,malop,anh)values('$masv','$hoten',
		'$ngaysinh','$quequan','$dienthoai','$email','$malop','$anh')";
		$result=mysqli_query($con,$sql);
	if($result)
		//echo "Thêm mới thành công";
		header('location:hienthibangqlysv.php');
	else
		echo "thêm mới thất bại";
	}
	?>
	<form action="" method="post">
		<p align="center">Thêm Mới Sinh Viên</p>
	<table align="center">
		<tr>
			<td>Mã sinh viên</td>
			<td><input type="text" name="txtmasv" /></td>
		</tr>
		<tr>
			<td>Họ Tên</td>
			<td><input type="text" name="txthoten" /></td>
		</tr>
		<tr>
			<td>Ngày sinh</td>
			<td><input type="date" name="txtngaysinh" /></td>
		</tr>
		<tr>
			<td>Quê Quán</td>
			<td><input type="text" name="txtquequan" /></td>
		</tr>
		<tr>
			<td>Điện thoại</td>
			<td><input type="text" name="txtdienthoai" /></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="txtemail" /></td>
		</tr>
		<tr>
			<td>Mã lớp</td>
			<td><input type="text" name="txtmalop" /></td>
		</tr>
		<tr>
			<td>Anh</td>
			<td><input type="text" name="txtanh" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Thêm mới" /><input type="reset" value="Huỷ"/> </td>
		</tr>
	</table>
	</form>
</body>
</html>
