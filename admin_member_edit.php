<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	include("mysql_connect.php");
	$account = $_POST['select1']; 
	$button = $_POST['button1'];  
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>毛線編織家</title>
</head>

<body>

<body background="http://www.checkfun.com.tw/shop/Stores_APP/images/images_115/CAT%E6%8A%93%E6%AF%9B%E7%B7%9A%E5%9C%96.jpg">

<div id="HEADER">
	<h2><FONT FACE="微軟正黑體">毛線編織家</h2>
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
				<form name="form" method="post" action="admin_member_done.php">
					<p>
					帳號：<input type="text" name="account" /> <br>
					密碼：</h1><input type="text" name="pw" /> <br>
					使用者姓名：</h1><input type="text" name="username" /> <br>
					Email：</h1><input type="text" name="email" /> <br>
					城市：</h1><input type="text" name="country" /> <br>
					年齡：</h1><input type="text" name="age" /> <br>
					</p>
					<input type="submit" name="button" value="新增" />
					<p>
					</p>
				</form>
		<?php
			}
			else if($button === "修改"){
				$sql = "SELECT * FROM member WHERE account='$account'";
				$result = mysql_query($sql);
											
				if (!$result) { 
					die('Invalid query: ' . mysql_error()); 
				}
				else{
				$row = mysql_fetch_array(mysql_query($sql)); 
		?>
					<form name="form" method="post" action="admin_member_done.php"> 
						<p>
						帳號：<input type="text" name="account" value="<?php echo $row['account']; ?>" /> <br>
						密碼：</h1><input type="text" name="pw" value="<?php echo $row['password']; ?>"/> <br>
						使用者姓名：</h1><input type="text" name="username" value="<?php echo $row['username']; ?>" /> <br>
						Email：</h1><input type="text" name="email" value="<?php echo $row['email']; ?>" /> <br>
						城市：</h1><input type="text" name="country" value="<?php echo $row['country']; ?>" /> <br>
						年齡：</h1><input type="text" name="age" value="<?php echo $row['age']; ?>" /> <br>
						</p>
						<input type="submit" name="button" value="修改" />
						<p>
						</p>
					</form>
		<?php
				}
			}
			else if($button === "刪除"){ 
				$sql = "DELETE FROM member WHERE account='$account'"; 
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
