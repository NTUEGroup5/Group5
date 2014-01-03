<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	include("mysql_connect.php");  
	$account = $_POST['account']; 
	$password = $_POST['pw'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$country = $_POST['country'];
	$age = $_POST['age'];
	$button = $_POST['button'];
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>毛線編織網</title>
</head>

<body>
<div id="HEADER">
	<h2><FONT FACE="微軟正黑體">毛線編織家</FONT></h2>
</div>
<div id="MAIN_NAV">
	<ul>
		<a href="reading.php"><FONT FACE="微軟正黑體">針織大學</FONT></a>
		<a href="upload.php"><FONT FACE="微軟正黑體">毛絨絨分享區</FONT></a>
		<a href="message.php"><FONT FACE="微軟正黑體">打結了怎麼辦</FONT></a>
		<a href="record.php"><FONT FACE="微軟正黑體">我的足跡</FONT></a>
		<a href="login.php"><FONT FACE="微軟正黑體">My Secret 修改</FONT>
		<a href="group.php"><FONT FACE="微軟正黑體">毛絨絨團隊</FONT></a>
		<b><FONT FACE="微軟正黑體">毛怪的家</FONT></b>
		<a href="index.php" style="color:#FF99FF"><FONT FACE="微軟正黑體">回首頁頁</FONT></a>
	</ul>
</div>
<div id="CONTENT">
	<p>
		<h2>管理者專區<br/></h2>
		<br/>
		<br/>
		<center>
		<?php   
			if($button === "新增"){ 
				$sql = "INSERT INTO member (account, password, username, email, country, age) VALUES ('$account', '$password', '$username', '$email', '$country', '$age')"; //要insert的value值
				$result = mysql_query($sql);
				if (!$result) { /
					die('Invalid query: ' . mysql_error());
				}
				echo "<h3>資料已新增.....</h3>";
			}
			else if($button === "修改"){  
				$sql = "UPDATE member SET account='$account', password='$password', username='$username', email='$email', country='$country', age='$age' WHERE account='$account'";//要update的value值
				$result = mysql_query($sql);
				if (!$result) { 
					die('Invalid query: ' . mysql_error());
				}
				echo "<h3>資料已修改.....</h3>";
			}	
						
		?>
		</center>
	</p>	
</div>
</body>
</html>
