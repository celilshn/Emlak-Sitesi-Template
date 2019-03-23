<?php include 'header.php'; ?>
<?php 
$ayarsor=mysql_query("select *from ayarlar");
$ayarcek=mysql_fetch_assoc($ayarsor);

?>
<div class="wrapper">
  <div class="slider" style="width: 1132px;">
    <ul class="items">
      <li><img src="images/slider-img1.jpg" alt=""></li>
      <li><img src="images/slider-img2.jpg" alt=""></li>
      <li><img src="images/slider-img3.jpg" alt=""></li>
    </ul>
  </div>
  <a class="prev">prev</a> <a class="next">next</a>
</div>
<!--==============================aside================================-->
<section id="content">
  <div class="indent-left">
    <h3 class="p1">Hakkımızda</h3>
    <div class="wrapper">
      <figure class="img-indent"><img src="images/banner-1yedek.png" alt=""></figure>
      <div class="extra-wrap">
        <p>Pelikan Emlak emlak sektörünü tek bir çatı altında buluşturmayı hedefleyen, kesintisiz, yüksek kaliteli hizmeti, güncel ve detaylı ilanları, haberleri ile emlak sektörünün nabzını tutan emlak platformudur.

          Ocak 2006 da profesyonel ekibi ile hızlı çalışmalarına başlayan Pelikan Emlak Mart 2006 da siteyi emlak ofislerine açmış ve 5 Nisan 2006 da 15 bin güncel ilan ile yayın hayatına başlamıştır.

          HEDEFLERİMİZ
          Pelikan Emlak'ın öncelikli hedefi bireysel kullanıcılarımıza ve kurumsal iş ortaklarımız emlak ofislerine, hem görsel hem de teknik olarak yüksek kalitede hizmet vermek ve emlak sektöründeki tüm oyuncuları tek bir çatı altında buluşturmaktır.

          Pelikan markasının emlak ve inşaat sektörlerine tartışmasız yakınlığı bu hedefimize ulaşma yolunda önemli desteklerimizden biridir.

          AMAÇLARIMIZ
          Emlak ofislerinin ilk tercihi olmak: Detaylı portföy yayınlama imkanı ile bilinçli ve alım gücü yüksek hedef kitleye ulaşma olanağı emlak ofisleri ile işbirliğimizin temelidir.

          Emlak arama zahmetini en aza indirmek: Sitede üye olmadan zahmetsizce detaylı ilan aramak, kriterleri verilen yeni ilanlardan haberdar edilmek, ilanlar arasında karşılaştırma yapabilmek emlak arama zahmetini en aza indiren kullanıcı dostu bir site olmamızı sağladı.

          Emlak sektörünü tek bir çatı altında toplamak: Doğru, kaliteli hizmet ile profesyonel emlak ofislerini, inşaat firmalarını ve ne aradığını bilen bilinçli alıcıları sektörün tek adresinde buluşturmayı hedeflemektedir.

          Güncel ve doğru hizmetin önemini vurgulamak: Gerçek alıcı ve satıcıları ,doğru ve güncel ilanlar için buluşturmak ve hedeflerine hızlı ulaşmalarını sağlamak.

        Sektöre yeni hizmetler sunmak: Sektör kalitesini ve verimini artıracak teknoloji destekli tüm yenilikleri hızlı ve gelişmekte olan emlak sektörüne sunmak.</p>
      </div>
    </div>
  </section>


  <!--==============================footer=================================-->
  <?php include 'footer.php'; ?>