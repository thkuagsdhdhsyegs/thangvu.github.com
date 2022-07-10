<?php
include_once("ketnoibangqlysv.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Trang Menu</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body background="images/5.jpg">
    <table align='center' cellpadding='3px' cellspacing='0' border='1'>
		<caption><td bgcolor="#FBFBFB" align="center"><font size="+5">MENU</font></td></caption>
        <tr>
            <td colspan=5>
                <form action="hienthilop.php" method="post"><input type="submit" value="Cập nhật bảng lớp"></form>
            </td>
        </tr>
        <tr>
            <td colspan=5>
                <form action="hienthibangqlysv.php" method="post"><input type="submit" value="Cập nhật bảng sinh viên"></form>
            </td>
        </tr>
    </table>
</body>

</html>