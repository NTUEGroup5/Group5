<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	include("mysql_connect.php");
	$serial = $_POST['select2']; 
	$button = $_POST['button2'];
	
	$serial_array = explode("+",$serial); 
	$serial_number = $serial_array[0];   
	$account = $serial_array[1];         
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
			/* reading */
			if($button === "新增"){ 
		?>
				<form name="form" method="post" action="admin_record_done.php">
					<p>
						序號：<input type="text" name="serial" /> <br>
						帳號：</h1><input type="text" name="account" /> <br>
						時間：</h1><input type="text" name="time" /> <br>
						評論：</h1><input type="text" name="comments" /> <br>
					</p>
					<input type="submit" name="button" value="新增" />
					<p>
					</p>
				</form>
		<?php
			}
			else if($button === "修改"){
				
				$sql = "SELECT * FROM record WHERE serial='$serial_number' AND account='$account'"; 
				$result = mysql_query($sql);
											
				if (!$result) { 
					die('Invalid query: ' . mysql_error());
				}
				else{
					$row = mysql_fetch_array(mysql_query($sql));
		?>
					<form name="form" method="post" action="admin_record_done.php">
						<p>
						序號：<input type="text" name="serial" value="<?php echo $row['serial']; ?>" /> <br>
						帳號：</h1><input type="text" name="account" value="<?php echo $row['account']; ?>" /> <br>
						時間：</h1><input type="text" name="time" value="<?php echo $row['time']; ?>" /> <br>
						評論：</h1><input type="text" name="comments" value="<?php echo $row['comments']; ?>" /> <br>
						</p>
						<input type="submit" name="button" value="修改" />
						<p>
						</p>
					</form>
		<?php
				}
			}
			else if($button === "刪除"){
				$sql = "DELETE FROM record WHERE serial='$serial_number' AND account='$account'";
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

</body>
</html>
