<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	include("mysql_connect.php");
	$serial = $_POST['select']; 
	$button = $_POST['button'];
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>毛線編織家</title>
</head>

<body>

<body background="http://www.checkfun.com.tw/shop/Stores_APP/images/images_115/CAT%E6%8A%93%E6%AF%9B%E7%B7%9A%E5%9C%96.jpg">

<div id="HEADER">
	<h2><FONT FACE="微軟正黑體">毛線編織家</FONT></h2> 標題名稱 by 110113046粘齊讌
</div>
<div id="MAIN_NAV">
	<ul>
		<li><a href="reading.php"><FONT FACE="微軟正黑體">針織大學</FONT></a></li> 
		<li><a href="upload.php"><FONT FACE="微軟正黑體">毛茸茸分享區</FONT></a></li>
		<li><a href="message.php"><FONT FACE="微軟正黑體">打結了怎麼辦</FONT></a></li>
		<li><a href="record.php"><FONT FACE="微軟正黑體">我的足跡</FONT></a></li>
		<li><a href="login.php"><FONT FACE="微軟正黑體">毛茸茸團隊</FONT></li>
		<li><a href="group.php"><FONT FACE="微軟正黑體">毛怪的家</FONT></a></li>
		<li><b><FONT FACE="微軟正黑體">管理者專區</FONT></b></li>
		<li><a href="index.php" style="color:#FF99FF"><FONT FACE="微軟正黑體">回首頁</FONT></a></li>
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
		?>
				<form name="form" method="post" action="admin_reading_done.php">
					<p>
					序號：<input type="text" name="serial" /> <br>
					類型：</h1><input type="text" name="type" /> <br>
					材料名：</h1><input type="text" name="name" /> <br>
					檔名：</h1><input type="text" name="content" /> <br>
					</p>
					<input type="submit" name="button" value="新增" />
					<p>
					</p>
				</form>
		<?php
			}
			else if($button === "修改"){
				$sql = "SELECT * FROM reading WHERE serial='$serial'";
				$result = mysql_query($sql);
											
				if (!$result) { 
					die('Invalid query: ' . mysql_error());
				}
				else{
					$row = mysql_fetch_array(mysql_query($sql)); 
		?>
					<form name="form" method="post" action="admin_reading_done.php">
						<p>
						序號：<input type="text" name="serial" value="<?php echo $row['serial']; ?>" /> <br>
						類型：</h1><input type="text" name="type" value="<?php echo $row['type']; ?>" /> <br>
						材料名：</h1><input type="text" name="name" value="<?php echo $row['name']; ?>" /> <br>
						檔名：</h1><input type="text" name="content" value="<?php echo $row['content']; ?>" /> <br>
						</p>
						<input type="submit" name="button" value="修改" />
						<p>
						</p>
					</form>
		<?php
				}
			}
			else if($button === "刪除"){
				$sql = "DELETE FROM reading WHERE serial='$serial'";//
				$result = mysql_query($sql);
											
				if (!$result) {
					die('Invalid query: ' . mysql_error());
				}
				else{
					echo "<h3>資料已刪除.....</h3>";
				}
			}	
		?>
		</center>
	</p>	
</div>
</body>
</html>
