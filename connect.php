<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("mysql_connect.php");
$id = $_POST['id'];
$pw = $_POST['pw'];
$b = $_POST['button'];

$sql = "SELECT * FROM member where account='$id' and password='$pw'";
$row = mysql_fetch_array(mysql_query($sql));
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>毛線編織網</title>
</head>

<body>

<body background="http://www.checkfun.com.tw/shop/Stores_APP/images/images_115/CAT%E6%8A%93%E6%AF%9B%E7%B7%9A%E5%9C%96.jpg">

<div id="HEADER">
	<h2><FONT FACE="微軟正黑體">毛線編織家</FONT><</h2>
</div>
<div id="MAIN_NAV">
	<ul>
		<li><a href="reading.php"><FONT FACE="微軟正黑體">針織大學</FONT><</a></li>  
		<li><a href="upload.php"><FONT FACE="微軟正黑體">毛絨絨分享區</FONT><</a></li>
		<li><a href="message.php"><FONT FACE="微軟正黑體">打結了怎麼辦</FONT><</a></li>
		<li><a href="record.php"><FONT FACE="微軟正黑體">我的足跡</FONT><</a></li>
		<li><b><FONT FACE="微軟正黑體">My Secret 修改</FONT><</b></li>
		<li><a href="group.php"><FONT FACE="微軟正黑體">毛絨絨團隊</FONT><</a></li>
		<li><a href="manager_login.php"><FONT FACE="微軟正黑體">毛怪的家</FONT><</a></li>
		<li><a href="index.php" style="color:#FF99FF"><FONT FACE="微軟正黑體">回首頁頁</FONT><</a></li>
	</ul>
</div>
<div id="CONTENT">
	<p>
	
		<center>
		<h2>My Secret 修改<br/></h2>
		<br/>
		<br/>
		
		<?php
			if (!$row) { 
				echo "<h3>帳號或密碼錯誤，請重新輸入</h3>";
        		echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
			}
			else {
		?>
				<form name="form" method="post" action="member_update.php"> <
					<p>
					帳號：<input type="text" name="account" value="<?php echo $row['account']; ?>" disabled="true"/> <br>
					<input type="hidden" name="account" value="<?php echo $row['account']; ?>"/>  
					密碼(留空表示不修改)：</h1><input type="password" name="pw" /> <br>
					確認密碼：</h1><input type="password" name="pwconfirm" /> <br>
					使用者姓名：</h1><input type="text" name="username" value="<?php echo $row['username']; ?>" /> <br>
					Email：</h1><input type="text" name="email" value="<?php echo $row['email']; ?>" /> <br>
					城市：</h1><input type="text" name="country" value="<?php echo $row['country']; ?>" /> <br>
					年齡：</h1><input type="text" name="age" value="<?php echo $row['age']; ?>" /> <br>
					</p>
					<input type="submit" name="button" value="修改" />
					<input type="button" value="回上一頁" onclick="javascript:history.back(1)" />
					<p>
					</p>
				</form>
				
		<?php
			}
		?>
		</center>
		<br/>
		<br/>
	</p>
</div>

</body>
</html>


