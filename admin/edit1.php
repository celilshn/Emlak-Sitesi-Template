          
<?php
include 'netting/bag.php';
$iletisimm=mysql_query("delete from iletisim where iletisim_id=".$_GET[iletisim_id]."");
$iletisim_id=mysql_query("select count *from iletisim_id ");
if(mysql_affected_rows())
{
  header("Location: iletisim.php");
}
?>
