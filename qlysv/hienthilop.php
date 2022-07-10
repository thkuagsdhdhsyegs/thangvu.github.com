<?php
include_once("ketnoibangqlysv.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Lớp</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>
	<table align="center" cellpadding="3px" cellspacing="0" border="1">
	<caption>Danh sách lớp</caption>
		<tr>
		<th>STT</th>
		<th>Mã lớp</th>
		<th>Tên lớp</th>
		<th>Sửa</th>
		<th>Xóa</th>
		</tr>
		<?php
		$sql="select * from lop";
		$result=mysqli_query($con,$sql);
		$i=1;
		while($row=mysqli_fetch_array($result)){
			echo"<tr>";
				echo"<td>$i</td>";
				echo"<td>".$row["malop"]."</td>";
				echo"<td>".$row["tenlop"]."</td>";
				echo"<td><a href='sualop.php? malop=$row[malop]'>Sửa</a></td>";
				echo"<td><a href='xoalop.php? malop=$row[malop]'>Xóa</a></td>";
			echo"</tr>";
			$i++;
		}
		?>
		<tr><td colspan="5"><form action="themmoilop.php" method="post"><input type="submit" value="Thêm mới"></form></td></tr>
	</table>
</body>
</html>
