<?php 
include 'header.php';
include 'sidebar.php';
$ayarsor=mysql_query("select *from ayarlar where ayar_id='1'");
$ayarcek=mysql_fetch_assoc($ayarsor);
?>
<!-- İNDEX BAŞ-->
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line">Site Genel Ayarları</h1>

        <?php
        if($_GET['durum']=="basarili")
          {?>
            <h1 class style="color:green;" ="page-subhead-line">Kayıtlar başarıyla güncellendi</h1>
            <?php
          }
          elseif ($_GET['durum']=="basarisiz") { ?>

            <h1 class="page-subhead-line" style="color: red;">Kayıtlar güncellenemedi. Değişiklik yapmamış olabilirsiniz</h1>
            
            <?php }
            else{?>
              <h1 class="page-subhead-line" style="color: blue;">Ayarları buradan düzenleyebilirsiniz</h1>

              <?php
            }

            ?>
            

          </div>
        </div>
        <!-- /. ROW  -->

        <form action="netting/islem.php" method="POST">
          <div class="form-group col-md-5">

            <label>Sayfa Başlığı</label>
            <input class="form-control" type="text" name="ayar_title" value="<?php echo $ayarcek['ayar_title']; ?>">
            

          </div>
          
          <div class="form-group col-md-5">

            <label>Site Açıklaması</label>
            <input class="form-control" type="text" name="ayar_description" value="<?php echo $ayarcek['ayar_description']; ?>">
            

          </div>

          <div class="form-group col-md-5">

            <label>Facebook</label>
            <input class="form-control" type="text" name="ayar_facebook" value="<?php echo $ayarcek['ayar_facebook']; ?>">
            

          </div>                                

          <div class="form-group col-md-5">

            <label>Twitter</label>
            <input class="form-control" type="text" name="ayar_twitter" value="<?php echo $ayarcek['ayar_twitter']; ?>">
            

          </div>  


          <div class="form-group col-md-5">

            <label>Telefon Numarası</label>
            <input class="form-control" type="text" name="ayar_telefon" value="<?php echo $ayarcek['ayar_telefon']; ?>">
            

          </div>

          <div class="form-group col-md-5">

            <label>E-Mail</label>
            <input class="form-control" type="email" name="ayar_email" value="<?php echo $ayarcek['ayar_email']; ?>">

            

          </div> 

          <div class="form-group col-md-5">

            <label>Hizmetler</label>
            <textarea  rows="15" class="form-control" type="text" name="ayar_hizmetler"><?php echo $ayarcek['ayar_hizmetler']; ?></textarea>

            

          </div> 
          
          <div class="form-group col-md-5">

            <label>Logo Yolu</label>
            <input class="form-control" type="text" name="ayar_logo" value="<?php echo $ayarcek['ayar_logo']; ?>">
            

          </div>
          <center>
            <div class="form-group col-md-10">

              <input class="btn btn-success" type="submit" name="ayarlarikaydet" value="Ayarları Kaydet">
              

            </div>
          </center>

        </form>



      </div>
      <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
  </div>
  <!-- İNDEX SON-->

  <?php include 'footer.php';
  ?>