<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("mysql_connect.php"); 
$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "SELECT * FROM admin where account='$id' and password='$pw'";  
$row = mysql_fetch_row(mysql_query($sql));
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>毛線編織網</title>
</head>

<body>
<body background="http://www.checkfun.com.tw/shop/Stores_APP/images/images_115/CAT%E6%8A%93%E6%AF%9B%E7%B7%9A%E5%9C%96.jpg">

<div id="HEADER">
	<h2><FONT FACE="微軟正黑體">毛線編織家</FONT></h2>
</div>
<div id="MAIN_NAV">
	<ul>
		<a href="reading.php"><FONT FACE="微軟正黑體">針織大學</FONT></a>
		<a href="upload.php"><FONT FACE="微軟正黑體">毛絨絨分享區</FONT></a>
		<a href="message.php"><FONT FACE="微軟正黑體">打結了怎麼辦</FONT></a>
		<a href="record.php"><FONT FACE="微軟正黑體">我的足跡</FONT></a>
		<a href="login.php"><FONT FACE="微軟正黑體">My Secret 修改</FONT></a>
		<a href="group.php"><FONT FACE="微軟正黑體">毛絨絨團隊</FONT></a>
		<b><FONT FACE="微軟正黑體">毛怪的家</FONT></b>
		<a href="index.php" style="color:#FF99FF"><FONT FACE="微軟正黑體">回首頁頁</FONT></a>
	</ul>
</div>
<div id="CONTENT">
	<p>
		<h2><FONT FACE="微軟正黑體">毛怪的家</FONT><br/></h2>
		<br/>
		<br/>
		<center>
		<?php
			if (!$row) { 
				echo "<h3>帳號或密碼錯誤，請重新輸入</h3>";
        		echo '<meta http-equiv=REFRESH CONTENT=2;url=manager_login.php>';
			}
			else {
				
				$sql = "SELECT * FROM reading";  
				$result = mysql_query($sql);
											
				if (!$result) { 
					die('Invalid query: ' . mysql_error());
				}
				
				echo "<form name='readingform' method='post' action='admin_reading_edit.php'>";
												
				echo "<table width=800 border=1>";
				echo "<tr align=center>閱讀資料清單</tr>";
				echo "<tr align=center><td>選取</td><td>編號</td><td>類型</td><td>資料名</td></tr>";
					
				while($row = mysql_fetch_array($result)){
					
					echo "<tr align=center><td><input name='select' type='radio' value=".$row['serial']." checked ></td>";
					echo "<td>".$row['serial']."</td>";
					echo "<td>".$row['type']."</td>";
					echo "<td>".$row['name']."</td>";
					echo "</tr>";
				}
				echo "</table>";							
				echo "<input type='submit' name='button' value='新增' />";
				echo "<input type='submit' name='button' value='修改' />";
				echo "<input type='submit' name='button' value='刪除' />";
				echo "</form>";
				
				echo "<br/>";
				$sql = "SELECT * FROM member";
				$result = mysql_query($sql);
											
				if (!$result) { .
					die('Invalid query: ' . mysql_error());
				}
				
				echo "<form name='memberform' method='post' action='admin_member_edit.php'>"; 
												
				echo "<table width=800 border=1>";
				echo "<tr align=center>使用者清單</tr>";
				echo "<tr align=center><td>選取</td><td>帳號</td><td>密碼</td><td>使用者姓名</td><td>Email</td><td>城市</td><td>年齡</td></tr>";
					
				while($row = mysql_fetch_array($result)){
					
					echo "<tr align=center><td><input name='select1' type='radio' value=".$row['account']." checked ></td>";
					echo "<td>".$row['account']."</td>";
					echo "<td>".$row['password']."</td>";
					echo "<td>".$row['username']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['country']."</td>";
					echo "<td>".$row['age']."</td>";
					echo "</tr>";
				}
				echo "</table>";
				echo "<input type='submit' name='button1' value='新增' />"; 
				echo "<input type='submit' name='button1' value='修改' />";
				echo "<input type='submit' name='button1' value='刪除' />";
				echo "</form>";
				
				echo "<br/><br/>";
				$sql = "SELECT * FROM record";
				$result = mysql_query($sql);
											
				if (!$result) {
					die('Invalid query: ' . mysql_error());
				}
				
				echo "<form name='recordform' method='post' action='admin_record_edit.php'>";
												
				echo "<table width=800 border=1>";
				echo "<tr align=center>閱讀紀錄清單</tr>";
				echo "<tr align=center><td>選取</td><td>編號</td><td>帳號</td><td>時間</td><td>評論</td></tr>";
					
				while($row = mysql_fetch_array($result)){
					
					echo "<tr align=center><td><input name='select2' type='radio' value=".$row['serial']."+".$row['account']." checked ></td>";
					echo "<td>".$row['serial']."</td>";
					echo "<td>".$row['account']."</td>";
					echo "<td>".$row['time']."</td>";
					echo "<td>".$row['comments']."</td>";
					echo "</tr>";
				}
				echo "</table>";
				echo "<input type='submit' name='button2' value='新增' />";
				echo "<input type='submit' name='button2' value='修改' />";
				echo "<input type='submit' name='button2' value='刪除' />";
				echo "</form>";
				
			}
		?>
		</center>
		<br/>
		<br/>
	</p>
</div>

</body>
</html>


