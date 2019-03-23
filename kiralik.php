<?php include 'header.php'; ?>
<?php 
$evsor=mysql_query("select *from ev");
$evcek=mysql_fetch_assoc($evsor);
?>
</header>
<!--==============================aside================================-->
<aside>
  <div class="wrapper">
    <?php
    $evsor=mysql_query("select *from ev where ev_tip='Kiralık' order by ev_id");
    while($b=mysql_fetch_array($evsor))
    {
      ?>
      <div class="column-2" style="margin: 4px; ">
        <div class="box">
          <div class="aligncenter">
            <h4><?php echo $b['ev_baslik']; ?></h4>
          </div>
          <div class="box-bg maxheight">
            <div class="padding">
              <figure class="p2"><img style="width: 250px;height: 150px;" src="images/<?php echo $b['resim_url1'] ?>" alt=""></figure>
              <h6 class="color-1"><?php echo $b['ev_tip']; ?></h6>
              <p><?php echo $b['ev_adres']; ?></p>
            </div>
            <div class="aligncenter"> <a class="button" href="ilan.php?&ev_id=<?php echo $b['ev_id'] ?>">Detaylar için</a> </div>
          </div>
        </div>
      </div>
    <?php } ?>


  </div>
</aside>

<!--==============================footer=================================-->
<?php include 'footer.php'; ?>