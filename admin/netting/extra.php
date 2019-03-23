<?php include 'netting\bag.php'
?>
<?php
switch ($_REQUEST["islem"])
{
	case"cek":
	$sorgu=mysql_query("SELECT * FROM yazilar order by yazi_id");
	while($dbal=mysql_fetch_array($sorgu))
	{
		echo "<a href="extra.php?islem=update&id=" ".$dbal[yazi_id]."> ".$dbal[yazi_baslik]."<br>".$dbal[yazi_aciklama]."</font>DÜZENLE</a>";
	}
	break;
	case"update":
	if(isset($_POST["Yolla"]))
	{
		$kat= strip_tags($_POST["yazi_baslik"]);
		$acikla= strip_tags($_POST["yazi_aciklama"]);
		if(empty($kat))
		{
			$hata = "<div class="errormsg">Lütfen Kategori alanını boş bırakmayınız</div>";
		}
		if(empty($acikla))
		{ 
			$hata = "<div class="errormsg">Lütfen açiklama alanını boş bırakmayınız</div>";
		}
		if($hata == "")
		{
			$tablo = @mysql_query("update yazilar set yazi_baslik="$kat",yazi_aciklama="$acikla" where yazi_id="yazi_id"") or die ("Sebep ". mysql_error()." HATALI BİR İŞLEM VAR");
			echo "DÜZENLEME İŞLEMİ BAŞARI İLE YAPILDI... <meta http-equiv="refresh" content="2;URL=xxx.php?islem=update>";"
		}
	}
	if(!isset($_POST["Yolla"]) || $hata != "")
	{
		echo"<h1 align="center">UPDATE FORMU</h1>"; echo"".$hata."";
		echo"<div id="elem"><fieldset>"; $query = "SELECT * FROM yazilar WHERE yazi_id=".$_GET[yazi_id]."";
		$qry = @mysql_query($query) or die ("Bir hata oluştu");
		$row = mysql_fetch_array ($qry);
		echo"<form method="post" name="contFrm" id="contFrm" action="xxx.php?islem=update">";
		echo"<input type="hidden" name="id" value="".$row[id].""/>";
			// aldığımız id değerini hidden ile post edeceğizki verimiz bu id ye göre update edilebilsin
		echo "<label>
		<span class="required">
		</span>
		KATEGORİ:
		</label>
		<input type="text" name="kat" value="".$row[yazi_baslik].""/> 
		<label>
		<span class="required">
		</span>
		AÇIKLAMA:
		</label>
		<input name="aciklama" type="text" value="".$row[yazi_aciklama].""/>
		<input name="Yolla" type="submit" class="button" id="Yolla" value="" /> 
		</form> </fieldset> </div>";
	}
	default;
	?>
