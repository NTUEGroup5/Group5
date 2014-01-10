<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>毛線編織網</title>
</head>

<body>
<body background="http://www.checkfun.com.tw/shop/Stores_APP/images/images_115/CAT%E6%8A%93%E6%AF%9B%E7%B7%9A%E5%9C%96.jpg">
//背景圖 by 陳明欣
<div id="HEADER">
	<h2><FONT FACE="微軟正黑體">毛線編織家</FONT></h2>
</div>

<div id="MAIN_NAV">
	<ul>
		<a href="reading.php"><FONT FACE="微軟正黑體">針織大學</FONT></a>
		<b><FONT FACE="微軟正黑體">毛茸茸分享區</FONT></b>
		<a href="message.php"><FONT FACE="微軟正黑體">打結了怎麼辦</FONT></a>
		<a href="record.php"><FONT FACE="微軟正黑體">我的足跡</FONT></a>
		<a href="login.php"><FONT FACE="微軟正黑體">My Secret 修改</FONT></a>
		<a href="group.php"><FONT FACE="微軟正黑體">毛茸茸團隊</FONT></a>
		<a href="manager_login.php"><FONT FACE="微軟正黑體">毛怪的家</FONT></a>
		<a href="index.php" style="color:#FF99FF"><FONT FACE="微軟正黑體">回首頁頁</FONT></a>
	</ul>
</div>
<div id="CONTENT"> 
	<p>
		<center>
		    <p align="center"><img src="design/uploadtitle.jpg"></p>
    <?php
      
      $upload_dir =  "./upload files/";
			
      for ($i = 0; $i <= 3; $i++)
      {		
        
        if ($_FILES["myfile"]["name"][$i] != "")
        {
          
          $upload_file = $upload_dir . iconv("UTF-8", "Big5", $_FILES["myfile"]["name"][$i]);
          move_uploaded_file($_FILES["myfile"]["tmp_name"][$i], $upload_file);
					
          		
          echo "檔案名稱：" . $_FILES["myfile"]["name"][$i] . "<br>";	
          echo "暫存檔名：" . $_FILES["myfile"]["tmp_name"][$i] . "<br>";
          echo "檔案大小：" . $_FILES["myfile"]["size"][$i] . "<br>";
          echo "檔案種類：" . $_FILES["myfile"]["type"][$i] . "<br>";						
          echo "<hr>"; 
        }
		  
          
      } 
	  echo "<p><a href='JavaScript:history.back()'>繼續上傳</a></p>";
    ?>
		
	</p>
</div>
</body>
