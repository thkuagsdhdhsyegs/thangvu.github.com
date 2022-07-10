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
	<table align="center" cellpadding="3px" cellspacing="0" border="1">
	<caption>Danh sách Sinh Vien</caption>
		<tr>
		<th>STT</th>
		<th>Mã Sinh Viên</th>
		<th>Họ Tên</th>
		<th>Ngày Sinh</th>
		<th>Quê Quán</th>
		<th>Điện Thoại</th>
		<th>Email</th>
		<th>Mã Lớp</th>
		<th>Ảnh</th>
		</tr>
		<?php
		$sql="select * from sinhvien";
		$result=mysqli_query($con,$sql);
		$i=1;
		while($row=mysqli_fetch_array($result)){
			echo"<tr>";
				echo"<td>$i</td>";
				echo"<td>".$row["masv"]."</td>";
				echo"<td>".$row["hoten"]."</td>";
				echo"<td>".$row["ngaysinh"]."</td>";
				echo"<td>".$row["quequan"]."</td>";
				echo"<td>".$row["dienthoai"]."</td>";
				echo"<td>".$row["email"]."</td>";
				echo"<td>".$row["malop"]."</td>";
				echo"<td><img src='images/".$row["anh"]."'width='150px' height='150px'/><td>";
				echo"<td><a href='suasinhvien.php? masv=$row[masv]'>Sửa</a></td>";
				echo"<td><a href='xoasinhvien.php? masv=$row[masv]'>Xóa</a></td>";
			echo"</tr>";
			$i++;
		}
		?>
		<tr><td colspan="5"><form action="themmoisinhvien.php" method="post"><input type="submit" value="Thêm mới"></form></td></tr>
	</table>
</body>
</html>
