<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>毛線編織網</title>  //欄位內容注意文字提醒
    <script type="text/javascript">
      function check_data()
      {
        if (document.myForm.author.value.length == 0)
          alert("作者欄位不可以空白哦！");
        else if (document.myForm.subject.value.length == 0)
          alert("主題欄位不可以空白哦！");
        else if (document.myForm.content.value.length == 0)
          alert("內容欄位不可以空白哦！");
        else
          myForm.submit();
      }
    </script>

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
		<b><FONT FACE="微軟正黑體">打結了怎麼辦</FONT></b>
		<a href="record.php"><FONT FACE="微軟正黑體">我的足跡</FONT></a>
		<a href="login.php"><FONT FACE="微軟正黑體">My Secret 修改</FONT></a>
		<a href="group.php"><FONT FACE="微軟正黑體">毛絨絨團隊</FONT></a>
		<a href="manager_login.php"><FONT FACE="微軟正黑體">毛怪的家</FONT></a>
		<a href="index.php" style="color:#FF99FF"><FONT FACE="微軟正黑體">回首頁頁</FONT></a>
	</ul>
</div>
<div id="CONTENT"> 
	<p align="center"><img src="messagepicture\fig.jpg"></p>
    <?php
      require_once("dbtools.inc.php");
			
      
      $records_per_page = 5;

      
      if (isset($_GET["page"]))
        $page = $_GET["page"];
      else
        $page = 1;

      
      $link = create_connection();
			
      
      $sql = "SELECT * FROM message ORDER BY date DESC";	
      $result = execute_sql("group5", $sql, $link);

      
      $total_records = mysql_num_rows($result);

      
      $total_pages = ceil($total_records / $records_per_page);

      
      $started_record = $records_per_page * ($page - 1);

      
      mysql_data_seek($result, $started_record);

      
      $bg[0] = "#D9D9FF";
      $bg[1] = "#FFCAEE";
      $bg[2] = "#FFFFCC";
      $bg[3] = "#B9EEB9";
      $bg[4] = "#B9E9FF";

      echo "<table width='800' align='center' cellspacing='3'>";

      
      $j = 1;
      while ($row = mysql_fetch_assoc($result) and $j <= $records_per_page)
      {
        echo "<tr bgcolor='" . $bg[$j - 1] . "'>";
        echo "<td width='120' align='center'>
              <img src='messagepicture/" . mt_rand(0, 9) . ".gif'></td>";
        echo "<td>作者：" . $row["author"] . "<br>";
        echo "主題：" . $row["subject"] . "<br>";
		echo "性別:".$row["gender"] . "<br>";
        echo "時間：" . $row["date"] . "<hr>";
        echo $row["content"] . "</td></tr>";
        $j++;
      }
      echo "</table>" ;

      
      echo "<p align='center'>";

      if ($page > 1)
        echo "<a href='message.php?page=". ($page - 1) . "'>上一頁</a> ";

      for ($i = 1; $i <= $total_pages; $i++)
      {
        if ($i == $page)
          echo "$i ";
        else
          echo "<a href='message.php?page=$i'>$i</a> ";
      }

      if ($page < $total_pages)
        echo "<a href='message.php?page=". ($page + 1) . "'>下一頁</a> ";
      echo "</p>";

      
      mysql_free_result($result);
      mysql_close($link);
    ?>
    <form name="myForm" method="post" action="post.php">
      <table border="0" width="800" align="center" cellspacing="0">
        <tr bgcolor="#0084CA" align="center">
          <td colspan="2">
            <font color="#FFFFFF">請在此輸入新的留言</font></td>
        </tr>
        <tr bgcolor="#D9F2FF">
          <td width="15%">作者</td>
          <td width="85%"><input name="author" type="text" size="50"></td>
        </tr>
        <tr bgcolor="#84D7FF">
          <td width="15%">主題</td>
          <td width="85%"><input name="subject" type="text" size="50"></td>
        </tr>
		<tr bgcolor="#84D7FF">
          <td width="15%">性別</td>
          <td width="85%"><input name="gender" type="text" size="50"></td>
        </tr>
        <tr bgcolor="#D9F2FF">
          <td width="15%">內容</td>
          <td width="85%"><textarea name="content" cols="50" rows="5"></textarea></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="button" value="張貼留言" onClick="check_data()">　
            <input type="reset" value="重新輸入">
          </td>
        </tr>
      </table>
    </form>
</div>

</body>
