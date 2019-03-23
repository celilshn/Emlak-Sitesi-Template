<?php include 'header.php'; ?>
<?php 
$evsor=mysql_query("select *from ev where ev_id=".$_GET[ev_id]."");
$evcek=mysql_fetch_assoc($evsor);
?>
<section id="content">
  <div class="wrapper">
    <article class="col-1" style="width: 650px">
      <div class="wrapper">
        <div class="slider">
          <ul class="items" style="display: inline-block;">
            <li><img src="images/<?php echo $evcek['resim_url1'];?>"width="300" height="300"></li>
            <li><img src="images/<?php echo $evcek['resim_url2'];?>"width="300" height="300"></li>
            <li><img src="images/<?php echo $evcek['resim_url3'];?>"width="300" height="300"></li>
            <li><img src="images/<?php echo $evcek['resim_url4'];?>"width="300" height="300"></li>
            <li><img src="images/<?php echo $evcek['resim_url5'];?>"width="300" height="300"></li>
          </ul>
        </div>
        <a class="prev">prev</a> <a class="next">next</a>
      </div>        </article>
      <article class="col-2">

        <h3 class="p1">İlan Bilgileri</h3>

        <ul class="list-2">
          <li>
            <span><?php echo $evcek['ev_fiyat']; ?> TL</span>
          </li>
          <li>
            <span><?php echo $evcek['ev_adres']; ?></span>
          </li>
          <li>
            <span><?php echo $evcek['ev_baslik']; ?></span>
          </li>
          <li>
            <ul class="list-2">
              <li><span>Konut Şekli:</span><span><?php echo $evcek['ev_sekil']; ?></span></li>
              <li><span>Eşyalı:</span><span><?php echo $evcek['ev_esya']; ?></span></li>
              <li><span>Banyo Sayısı:</span><span><?php echo $evcek['ev_banyo']; ?></span></li>
              <li><span>Bulunduğu Kat:</span><span><?php echo $evcek['ev_kat']; ?></span></li>
              <li><span>Yakıt Tipi:</span><span><?php echo $evcek['ev_yakit']; ?></span></li>
              <li><span>Site İçerisinde:</span><span><?php echo $evcek['ev_site']; ?></span></li>
            </ul>
          </li>
        </ul>

      </article>
    </div>
    <div class="block"></div>
  </section>

  <!--==============================content================================-->
  <!--==============================footer=================================-->
  <?php include 'footer.php'; ?>