<?php 
include 'header.php';
include 'sidebar.php';
$evsor=mysql_query("select *from ev");
$evcek=mysql_fetch_assoc($evsor);
?>
<!-- İNDEX BAŞ-->
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line">İlan Ayarları</h1>



        <?php
        if($_GET['ydurum']=="basarili")
          {?>
            <h1 class style="color:green; font-size: 20px;" ="page-subhead-line">İlan eklendi</h1>
            <?php
          }
          elseif ($_GET['ydurum']=="basarisiz") { ?>

            <h1 class="page-subhead-line" style="color: red; font-size: 20px;">İlan eklenemedi</h1>

          <?php }
          elseif ($_GET['ydurum']=="ybasarili") { ?>

            <h1 class="page-subhead-line" style="color: green; font-size: 20px;">-->İlan güncellendi</h1>

          <?php }

          elseif ($_GET['ydurum']=="esbasarili") { ?>

            <h1 class="page-subhead-line" style="color: red; font-size: 20px;">İlan başarıyla silindi</h1>

          <?php }
          else{?>
            <h1 class="page-subhead-line" style="color: blue; font-size: 20px;">İlanları buradan düzenleyebilirsiniz</h1>

            <?php
          }

          ?>


        </div>
      </div>
      <!-- /. ROW  -->

      <form action="netting/islem.php" method="POST">

        <div class="form-group col-md-5">
          <label>İlan Başlığı</label>
          <input class="form-control" name="yeni_baslik" required="" type="text">            
        </div>

        <div class="form-group col-md-5">
          <label>Adres</label>
          <input class="form-control" name="yeni_adres" required="" type="text">            
        </div>

        <div class="form-group col-md-5">
          <label>Ev Fiyatı</label>
          <input class="form-control" name="yeni_fiyat" required="" type="text">            
        </div>

        <div class="form-group col-md-5">
          <label>Tip Seçiniz</label>
          <select class="form-control"  name="yeni_tip" type="text">
            <option>Satılık</option>
            <option>Kiralık</option>
          </select>
        </div>

        <div class="form-group col-md-5">
          <label>Ev Oda Sayısı</label>
          <input class="form-control" name="yeni_oda" required="" type="number">            
        </div>    

        <div class="form-group col-md-5">
          <label>Banyo Sayısı</label>
          <input class="form-control" name="yeni_banyo" required="" type="number">            
        </div>                           

        <div class="form-group col-md-5">
          <label>Ev Şekli</label>
          <select class="form-control"  name="yeni_sekil" type="text">
            <option>Apartman Dairesi</option>
            <option>Müstakil</option>
          </select>        
        </div>

        <div class="form-group col-md-5">
          <label>Kat</label>
          <input class="form-control" name="yeni_kat" required="" type="number">            
        </div>

        <div class="form-group col-md-5">
          <label>Eşya Durumu</label>
          <select class="form-control"  name="yeni_esya" type="text">
            <option>Evet</option>
            <option>Hayır</option>
          </select>            
        </div>



        <div class="form-group col-md-5">
          <label>Yakıt</label>
          <select class="form-control"  name="yeni_yakit" type="text">
            <option>Doğalgaz</option>
            <option>Kömür/Soba</option>
            <option>Merkezi Isıtma</option>
          </select>            
        </div>

        <div class="form-group col-md-5">
          <label>Site</label>
          <select class="form-control"  name="yeni_site" type="text">
            <option>Evet</option>
            <option>Hayır</option>
          </select>      
        </div>


        <!-- /. ROW  -->

        <div class="form-group col-md-5">
         <label for="file">Choose file to upload</label>
         <input type="file" name="resim_url1">
       </div>


       <center>
        <div class="form-group col-md-10">
         <input class="btn btn-success" type="submit" name="ev_gonder" value="İlan Ekle">
       </div>
     </center>

   </form>



   <div class="col-md-12">

    <div class="panel panel-default">
      <div class="panel-heading">
        <h2><strong><legend>İlanlar</legend></strong></h2>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Ev Numarası</th>
                <th>İlan Başlığı</th>
                <th>Tipi</th>
                <th>Fiyat</th>
                <th>Oda Sayısı</th>
                <th>Adresi</th>

                <th>Banyo Sayısı</th>
                <th>Ev Şekli</th>
                <th>Kat</th>
                <th>Yakıt</th>
                <th>Site</th>
                <th>Düzenle</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                $evsor=mysql_query("select *from ev order by ev_id");
                while($b=mysql_fetch_array($evsor))
                {
                  ?>
                  <td><?php
                  $ev_id=$b['ev_id']; 
                  echo "$ev_id";
                  ?></td>
                  <td><?php
                  $ev_baslik=$b['ev_baslik']; 
                  echo "$ev_baslik";
                  ?></td>
                  <td><?php 
                  $ev_tip=$b['ev_tip'];
                  echo "$ev_tip"; 
                  ?></td>
                  <td><?php
                  $ev_fiyat=$b['ev_fiyat'];
                  echo "$ev_fiyat";
                  ?></td>
                  <td><?php
                  $ev_oda=$b['ev_oda'];
                  echo "$ev_oda"; 
                  ?></td>
                  <td><?php 
                  $ev_adres=$b['ev_adres'];
                  echo "$ev_adres"; 
                  ?></td>

                  <td><?php 
                  $ev_banyo=$b['ev_banyo'];
                  echo "$ev_banyo"; 
                  ?></td>
                  <td><?php 
                  $ev_sekil=$b['ev_sekil'];
                  echo "$ev_sekil"; 
                  ?></td>
                  <td><?php 
                  $ev_kat=$b['ev_kat'];
                  echo "$ev_kat"; 
                  ?></td>
                  <td><?php 
                  $ev_yakit=$b['ev_yakit'];
                  echo "$ev_yakit"; 
                  ?></td>
                  <td><?php 
                  $ev_site=$b['ev_site'];
                  echo "$ev_site"; 
                  ?></td>

                  <td><a href="edit.php?ev_id=<?php echo $ev_id ?>">
                   <button type="submit" class="btn btn-primary">
                     <i class="glyphicon glyphicon-search">
                      Edit
                    </i></button>
                  </a>
                </td>
              </tr>
            <?php }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


</div>




</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- İNDEX SON-->

<?php include 'footer.php';
?>