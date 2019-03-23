<?php include 'ustfooter.php'; ?>
<?php $ayarsor=mysql_query("select *from ayarlar");
$ayarcek=mysql_fetch_assoc($ayarsor); ?>
<footer>
  <div class="main">
    <div class="footer-bg">
      <p class="prev-indent-bot">Copyright &copy; Pelikan Emlak </p>
      <ul class="list-services">
        <li><a class="tooltips" href="<?php echo $ayarcek['ayar_facebook'] ?>"></a></li>
        <li class="item-1"><a class="tooltips" href="<?php echo $ayarcek['ayar_twitter'] ?>"></a></li>
      </ul>
    </div>
  </div>
</footer>
<script>Cufon.now();</script>
<script>
  $(window).load(function () {
    $('.slider')._TMS({
      duration: 800,
      easing: 'easeOutQuart',
      preset: 'simpleFade',
      slideshow: 7000,
      banners: false,
      pauseOnHover: true,
      waitBannerAnimation: false,
      prevBu: '.prev',
      nextBu: '.next'
    });
  });
</script>
</body>
</html>
