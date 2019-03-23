<?php include 'header.php'; ?>

<?php
$iletisimsor=mysql_query("select *from iletisim");
$iletisimcek=mysql_fetch_assoc($iletisimsor);
?>
<?php
$iletisimbizsor=mysql_query("select *from iletisim_biz");
$iletisimbizcek=mysql_fetch_assoc($iletisimbizsor);
?>

<!--==============================content================================-->
<section id="content">
  <div class="wrapper">
    <article class="col-1" style="width: 650px">
      <div class="indent-left">
        <h3 class="p1">İletişim Formu</h3>

        <form id="contact-form" action="admin/netting/islem.php" method="post">
          <fieldset>
            <label><span class="text-form">İsim Soyisim:</span>
              <input type="text" name="iletisim_ad" required="">
            </label>
            <label><span class="text-form">E-mail:</span>
              <input type="E-mail" name="iletisim_email"required="">
            </label>
            <label><span class="text-form">Telefon Numarası:</span>
              <input type="number" name="iletisim_tel"required="">
            </label>
            <div class="wrapper">
              <div class="text-form">Mesaj:</div>
              <div class="extra-wrap">
                <textarea required="" name="iletisim_mesaj" cols="4" rows="4" style="border: 1px solid red;"></textarea>
              </div>
            </div>

          </fieldset>
          <button class="button-2" name="iletisimgonder" style="float: right;">Gönder</button>
        </form>
        <div style="float: right;">          <?php
        if($_GET['durum']=="basarili")
          {?>
            <h1 class style="color:green; font-size: 20px;" ="page-subhead-line">Mesaj Gönderildi!</h1>
            <?php
          }
          elseif ($_GET['durum']=="basarisiz")
            {?>
              <h1 class style="color:red; font-size: 20px;" ="page-subhead-line">Mesaj Gönderilirken bir hata ile karşılaşışdı!</h1>
              <?php } ?>
        </div>
      </div>

    </article>
    <article class="col-2">
      <h3 class="p1">Bizim Adresimiz</h3>
      <h6><?php echo $iletisimbizcek['iletisim_biz_yer'] ?></h6>
      <dl class="img-indent-bot">
        <dt><?php echo $iletisimbizcek['iletisim_biz_adres'] ?></dt>
        <dd><span>Telefon:</span><strong><?php echo $iletisimbizcek['iletisim_biz_tel'] ?></strong></dd>
        <dd><span>Fax:</span><strong><?php echo $iletisimbizcek['iletisim_biz_fax'] ?></strong></dd>
        <dd><span>Email:</span><strong><a href="#"><?php echo $iletisimbizcek['iletisim_biz_email'] ?></a></strong></dd>
      </dl>
    </article>
  </div>
  <div class="block"></div>
</section>

<!--==============================footer=================================-->
<?php include 'footer.php'; ?>