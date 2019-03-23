 <?php
 ob_start();
 session_start();

 $username="root";
 $password="230907855";
 $sunucu="localhost";
 $database="emlak";

 $baglan=mysql_connect($sunucu,$username,$password);
 mysql_query("SET NAME utf8");

 if(!$baglan)
 {
 	echo "Bağlantı Hatası!".mysql_errno();
 	exit();
 }

 $db=mysql_select_db($database);
 if(!$db)
 {
 	echo "Veritabanı hatası!".mysql_errno(); echo "<br>";
 	exit();
 }



 ?>﻿