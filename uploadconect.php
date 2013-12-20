

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("mysql_connect.php");  
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>毛線編織網</title>
</head>

<body>
<div id="HEADER">
	<h2>毛線編織家</h2>
</div>
<div id="MAIN_NAV">
	<ul>
		<li><a href="reading.php">針織大學</a></li>  
		<li><b>毛茸茸分享區</b></li>
		<li><a href="message.php">打結了怎麼辦</a></li>
		<li><a href="record.php">我的足跡</a></li>
		<li><a href="login.php">My Secret 修改</a></li>
		<li><a href="group.php">毛茸茸團隊</a></li>
		<li><a href="manager_login.php">毛怪的家</a></li>
		<li><a href="index.php" style="color:#FF99FF">回首頁</a></li>
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
<div id="FOOTER">	
	<p>
		<br/><br/><br/><br/><br/><br/>
		<h2><center><br/>Author by <i>Yi-Chan Kao</i> & <i>Gung-Si Chen</i> </center></h2>
	</p>
</div>
</body>
