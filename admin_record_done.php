<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	include("mysql_connect.php");
	$serial = $_POST['serial']; 
	$account = $_POST['account'];
	$time = $_POST['time'];
	$comments = $_POST['comments'];
	$button = $_POST['button'];
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>毛線編織網</title>
</head>

<body>

<body background="http://www.checkfun.com.tw/shop/Stores_APP/images/images_115/CAT%E6%8A%93%E6%AF%9B%E7%B7%9A%E5%9C%96.jpg">

<div id="HEADER">
	<h2><FONT FACE="微軟正黑體">毛線編織家</FONT></h2> //標題名稱 by 110113046粘齊讌
</div>
<div id="MAIN_NAV">
	<ul>
		<li><a href="reading.php"><FONT FACE="微軟正黑體">針織大學</FONT></a></li> 
		<li><a href="upload.php"><FONT FACE="微軟正黑體">毛絨絨分享區</FONT></a></li>
		<li><a href="message.php"><FONT FACE="微軟正黑體">打結了怎麼辦</FONT></a></li>
		<li><a href="record.php"><FONT FACE="微軟正黑體">我的足跡</FONT></a></li>
		<li><a href="login.php"><FONT FACE="微軟正黑體">My Secret 修改</FONT></li>
		<li><a href="group.php"><FONT FACE="微軟正黑體">毛絨絨團隊</FONT></a></li>
		<li><b><FONT FACE="微軟正黑體">毛怪的家</FONT></b></li>
		<li><a href="index.php" style="color:#FF99FF"><FONT FACE="微軟正黑體">回首頁頁</FONT></a></li>
	</ul>
</div>
<div id="CONTENT">
	<p>
		<h2>毛怪的家<br/></h2>
		<br/>
		<br/>
		<center>
		<?php
			if($button === "新增"){
				$sql = "INSERT INTO record (serial, account, time, comments) VALUES ('$serial', '$account', '$time', '$comments')";//要insert的value值
				$result = mysql_query($sql);
				if (!$result) { 
					die('Invalid query: ' . mysql_error());
				}
				echo "<h3>資料已新增.....</h3>";
			}
			else if($button === "修改"){
				$sql = "UPDATE record SET serial='$serial', account='$account', time='$time', comments='$comments' WHERE serial='$serial' AND account='$account'";//要update的value值
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
