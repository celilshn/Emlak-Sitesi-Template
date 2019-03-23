<?php include 'bag.php';
?>
<?php
ob_start();
session_start();
?>

<?php
if(isset($_POST['ayarlarikaydet']))
{
	$id=1;
	$ayarkayit=mysql_query(" update ayarlar set ayar_description='".$_POST['ayar_description']."', ayar_title='".$_POST['ayar_title']."', ayar_facebook='".$_POST['ayar_facebook']."', ayar_twitter='".$_POST['ayar_twitter']."', ayar_logo='".$_POST['ayar_logo']."', ayar_email='".$_POST['ayar_email']."', ayar_hizmetler='".$_POST['ayar_hizmetler']."', ayar_telefon='".$_POST['ayar_telefon']."' where ayar_id='$id'");

	if(mysql_affected_rows())
	{
		header("Location:../ayarlar.php?durum=basarili");
	}
	else
	{
		header("Location:../ayarlar.php?durum=basarisiz");
	}
}
?>

<?php
if(isset($_POST['url_kaydet1']))
{

	$ev_kayit=mysql_query("update ev set resim_url1='".$_POST['resim_url1']."' where ev_id='".$_POST['ev_id']."'");
	$url=htmlspecialchars($_SERVER['HTTP_REFERER']);

	header("Location: $url");

}
if(isset($_POST['url_kaydet2']))
{

	$ev_kayit=mysql_query("update ev set resim_url2='".$_POST['resim_url2']."' where ev_id='".$_POST['ev_id']."'");
	$url=htmlspecialchars($_SERVER['HTTP_REFERER']);

	header("Location: $url");

}
if(isset($_POST['url_kaydet3']))
{

	$ev_kayit=mysql_query("update ev set resim_url3='".$_POST['resim_url3']."' where ev_id='".$_POST['ev_id']."'");
	$url=htmlspecialchars($_SERVER['HTTP_REFERER']);

	header("Location: $url");

}
if(isset($_POST['url_kaydet4']))
{

	$ev_kayit=mysql_query("update ev set resim_url4='".$_POST['resim_url4']."' where ev_id='".$_POST['ev_id']."'");
	$url=htmlspecialchars($_SERVER['HTTP_REFERER']);

	header("Location: $url");

}
if(isset($_POST['url_kaydet5']))
{

	$ev_kayit=mysql_query("update ev set resim_url5='".$_POST['resim_url5']."' where ev_id='".$_POST['ev_id']."'");
	$url=htmlspecialchars($_SERVER['HTTP_REFERER']);

	header("Location: $url");

}
?>


<?php
if(isset($_POST['ev_gonder']))
{

	$ev_kayit=mysql_query("insert into ev set ev_fiyat='".$_POST['yeni_fiyat']."',ev_baslik='".$_POST['yeni_baslik']."',ev_oda='".$_POST['yeni_oda']."',ev_sekil='".$_POST['yeni_sekil']."',ev_esya='".$_POST['yeni_esya']."',ev_banyo='".$_POST['yeni_banyo']."',ev_kat='".$_POST['yeni_kat']."',ev_yakit='".$_POST['yeni_yakit']."',ev_site='".$_POST['yeni_site']."',ev_adres='".$_POST['yeni_adres']."',ev_tip='".$_POST['yeni_tip']."'");

	if(mysql_affected_rows())
	{
		header("Location:../ilanlar.php?ydurum=basarili");
	}
	else
	{
		header("Location:../ilanlar.php?ydurum=basarisiz");
	}
}
?>
<?php
if(isset($_POST['ev_kaydet']))
{
	
	$ev_guncel=mysql_query(" update ev set ev_fiyat='".$_POST['ev_fiyat']."',ev_baslik='".$_POST['ev_baslik']."',ev_sekil='".$_POST['ev_sekil']."',ev_esya='".$_POST['ev_esya']."',ev_banyo='".$_POST['ev_banyo']."',ev_kat='".$_POST['ev_kat']."',ev_yakit='".$_POST['ev_yakit']."',ev_site='".$_POST['ev_site']."',ev_oda='".$_POST['ev_oda']."',ev_adres='".$_POST['ev_adres']."',ev_tip='".$_POST['ev_tip']."' where ev_id='".$_POST['ev_id']."'");
	$url=htmlspecialchars($_SERVER['HTTP_REFERER']);


	if(mysql_affected_rows())
	{
		header("Location: $url");
	}
	else
	{
		header("Location:../ilanlar.php?ydurum=ybasarisiz");
	}
}
?>


<?php
if(isset($_POST['ev_sil']))
{
	
	$yazi_silt=mysql_query(" delete from ev where ev_id='".$_POST['ev_id']."'");

	if(mysql_affected_rows())
	{
		header("Location:../ilanlar.php?ydurum=esbasarili");
	}
	else
	{
		header("Location:../ilanlar.php?ydurum=esbasarisiz");
	}
}
?>

<?php
if(isset($_POST['a_giris']))
{
	$admin_kadi=$_POST['admin_kadi'];
	$admin_sifre=md5($_POST['admin_sifre']);

	if($admin_kadi && $admin_sifre)
	{
		$sorgula=mysql_query("select * from admin where admin_kadi='$admin_kadi' and admin_sifre='$admin_sifre' ");
		$verisay=mysql_num_rows($sorgula);
		if($verisay>0)
		{
			$_SESSION['admin_kadi']=$admin_kadi;
			header("Location: ../index.php");
		}
		else
		{
			header("Location: ../login.php?login=no");
		}
		
	}
}
?>

<?php
if(isset($_POST['iletisimgonder']))
{

	$iletisimkayit=mysql_query("insert into iletisim set iletisim_ad='".$_POST['iletisim_ad']."',iletisim_tel='".$_POST['iletisim_tel']."',iletisim_email='".$_POST['iletisim_email']."',iletisim_mesaj='".$_POST['iletisim_mesaj']."'");

	if(mysql_affected_rows())
	{
		header("Location:../../contacts.php?durum=basarili");
	}
	else
	{
		header("Location:../../contacts.php?durum=basarisiz");
	}
}
?>
