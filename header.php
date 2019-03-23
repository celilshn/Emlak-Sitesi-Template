<?php 
include "admin/netting/bag.php";
$ayarsor=mysql_query("select *from ayarlar");
$ayarcek=mysql_fetch_assoc($ayarsor);
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Emlakçı</title>
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
  <script src="js/jquery-1.6.3.min.js"></script>
  <script src="js/NewsGoth_BT_400.font.js"></script>
  <script src="js/FF-cash.js"></script>
  <script src="js/script.js"></script>
  <script src="js/jquery.equalheights.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/tms-0.3.js"></script>
  <script src="js/tms_presets.js"></script>
  <script src="js/easyTooltip.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page1">
  <div class="extra">
    <div class="main">
      <!--==============================header=================================-->
      <header>
        <div class="indent">
          <div class="row-top"">
            <div class="wrapper">
              <h1 style="font-size:70px;"><a href="index.php" style="color:black;">Pelikan Emlak</a></h1>
              <strong class="support"><?php echo $ayarcek['ayar_telefon'];  ?></strong> </div>
            </div>
            <nav>
              <ul class="menu" style="width: 1132px;">
                <li style="margin-left: 85px;"><a class="active" href="index.php">Anasayfa</a></li>
                <li><a href="satilik.php">Satılık</a></li>
                <li><a href="kiralik.php">Kiralık</a></li>
                <li><a href="hizmetler.php">Hizmetler</a></li>
                <li class="last"><a href="contacts.php">İletişim</a></li>
              </ul>
            </nav>
          </div>
        </header>