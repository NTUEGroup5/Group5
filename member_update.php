<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	include("mysql_connect.php"); 
	$id = $_POST['account']; 
	$pw = $_POST['pw'];
	$pwconfirm = $_POST['pwconfirm'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$country = $_POST['country'];
	$age = $_POST['age'];
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
		<b><FONT FACE="微軟正黑體">My Secret 修改</FONT></b>
		<a href="group.php"><FONT FACE="微軟正黑體">毛絨絨團隊</FONT></a>
		<a href="manager_login.php"><FONT FACE="微軟正黑體">毛怪的家</FONT></a>
		<a href="index.php" style="color:#FF99FF"><FONT FACE="微軟正黑體">回首頁頁</FONT></a>
	</ul>
</div>
<div id="CONTENT">
	<p>
		<h2>My Secret 修改<br/></h2>
		<br/>
		<br/>
		<center>
		<?php
			if($username == null){  
				echo "<h3>使用者名稱為空白，請重新輸入</h3>";  
				echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
			}
			else if($email == null){  
				echo "<h3>Email為空白，請重新輸入</h3>";
				echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
			}
			else if($country == null){  
				echo "<h3>城市為空白，請重新輸入</h3>";
				echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
			}
			else if($age == null){  
				echo "<h3>年齡為空白，請重新輸入</h3>";
				echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
			}
			else{
				if($pw == null){ 
					$sql = "UPDATE member SET username='$username', email='$email', country='$country', age='$age' WHERE account='$id'"; //更新相關資料
					$result = mysql_query($sql);
				
					if (!$result) {
						die('Invalid query: ' . mysql_error()); 
					}
					echo "<h3>修改成功!</h3>";
					echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
				}
				else{
					if($pw != $pwconfirm){ 
						echo "<h3>密碼輸入有誤，請重新輸入</h3>";
						echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
					}
					else{
						$sql = "UPDATE member SET password='$pw', username='$username', email='$email', country='$country', age='$age' WHERE account='$id'";
						$result = mysql_query($sql);
						
						if (!$result) { 
							die('Invalid query: ' . mysql_error());
						}
						echo "<h3>修改成功!</h3>";
						echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
					}
				}
			}		
		?>
		</center>
	</p>	
</div>

</body>
</html>
