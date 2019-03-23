<?php include 'header.php';
?>
<?php include 'sidebar.php';
?>


<!-- İNDEX BAŞ-->
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
                <a class="btn-info" style="font-size: 20px;"  href="ilanlar.php">Geri Dön</a>

        <h1 class="page-head-line">İlan paneline hoşgeldin.</h1>
        <div class="col-md-6 col-sm-6 col-xs-12">,
         <div class="panel panel-info">

          <div class="panel-heading">
            <?php
            if($_GET['ydurum']=="basarili")
              {?>
                <h1 class style="color:green; font-size: 20px;" ="page-subhead-line">İlan eklendi</h1>
                <?php
              }
              else
                {?>
                  İlanı düzenle
                <?php } ?>
              </div>
              <div class="panel-body">
               <?php
               $evsor=mysql_query("select *from ev where ev_id=".$_GET[ev_id]."");
               $evcek=mysql_fetch_assoc($evsor);
               $ev_id=$_GET[ev_id];
               ?>
               <form action="netting\islem.php" method="POST" >

                 <div class="form-group">
                  <label>Ev No</label>
                  <input id="disabledInput" class="form-control" name="ev_id" type="number" style="background-color: grey" value="<?php echo $ev_id ?>">
                </div>

                <div class="form-group">
                  <label>İlan Başlığı</label>
                  <input class="form-control" name="ev_baslik" required="" type="text" value="<?php echo $evcek['ev_baslik']; ?>">                    
                </div>

                <div class="form-group">
                  <label>Fiyatı</label>
                  <input class="form-control" name="ev_fiyat" required="" type="number" value="<?php echo $evcek['ev_fiyat']; ?>">                    
                </div>

                <div class="form-group">
                  <label>Oda Sayısı</label>
                  <input class="form-control" name="ev_oda" required="" type="number" value="<?php echo $evcek['ev_oda']; ?>">                         
                </div>

                <div class="form-group">
                  <label>Tipi <b> : <?php echo $evcek['ev_esya']; ?></b></label>
                  <select class="form-control"name="ev_tip" required="" type="text" value="<?php echo $evcek['ev_tip']; ?>">
                    <option>Satılık</option>
                    <option>Kiralık</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Adresi</label>
                  <input class="form-control" name="ev_adres" required="" type="text" value="<?php echo $evcek['ev_adres']; ?>">
                </div>

                <div class="form-group">
                  <label>Banyo Sayısı</label>
                  <input class="form-control" name="ev_banyo" required="" type="number" value="<?php echo $evcek['ev_banyo']; ?>">            
                </div>                           

                <div class="form-group">
                  <label>Ev Şekli</label>
                  <select class="form-control"  name="ev_sekil" type="text"  value="<?php echo $evcek['ev_sekil']; ?>">
                    <option>Apartman Dairesi</option>
                    <option>Müstakil</option>
                  </select>        
                </div>

                <div class="form-group">
                  <label>Kat</label>
                  <input class="form-control" name="ev_kat" required="" type="number"  value="<?php echo $evcek['ev_kat']; ?>">            
                </div>

                <div class="form-group">
                  <label>Eşya Durumu <b> : <?php echo $evcek['ev_esya']; ?></b></label>
                  <select class="form-control"  name="ev_esya" type="text" value="<?php echo $evcek['ev_esya']; ?>">
                    <option>Evet</option>
                    <option>Hayır</option>
                  </select>            
                </div>

                <div class="form-group">
                  <label>Yakıt <b> : <?php echo $evcek['ev_yakit']; ?></b></label>
                  <select class="form-control"  name="ev_yakit" type="text">
                    <option>Doğalgaz</option>
                    <option>Kömür/Soba</option>
                    <option>Merkezi Isıtma</option>
                  </select>            
                </div>

                <div class="form-group">
                  <label>Site: <b> : <?php echo $evcek['ev_site']; ?></b></label>
                  <select class="form-control"  name="ev_site" type="text" value="<?php echo $evcek['ev_site']; ?>">
                    <option>Evet</option>
                    <option>Hayır</option>
                  </select>      
                </div>

                <button type="submit"  name="ev_kaydet" class="btn btn-info">Kaydet </button>
                <button type="submit"  name="ev_sil" class="btn btn-danger">Sil </button>

              </form>


            </div>
          </div>

        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
         <div class="panel panel-danger">
          <div class="panel-heading">
           Görsel Ekle
         </div>

         <div class="panel-body">

           <form method="POST" action="netting/islem.php">      
             <div class="form-group col-md-12">
               <div class="form-group">
                <label>Ev No</label>
                <input id="disabledInput" class="form-control" name="ev_id" type="number" style="background-color: grey" value="<?php echo $ev_id ?>">
              </div>

              <label for="file"><img src="../images/<?php echo $evcek['resim_url1'] ?>"></label>
              <input type="file" name="resim_url1" value="<?php echo $evcek['resim_url1'] ?>">
            </div>
            <button type="submit" name="url_kaydet1" class="btn btn-info" style="width: 80px;height: 30px; color: white; text-align: center;">Kaydet</button></form>

            <form method="POST" action="netting/islem.php">      
             <div class="form-group col-md-12">
               <label for="file"><img src="../images/<?php echo $evcek['resim_url2'] ?>"></label>
               <input type="file" name="resim_url2" value="<?php echo $evcek['resim_url2'] ?>">
             </div>
             <button type="submit" name="url_kaydet2" class="btn btn-info" style="width: 80px;height: 30px; color: white; text-align: center;">Kaydet</button></form>

             <form method="POST" action="netting/islem.php">      
               <div class="form-group col-md-12">
                 <label for="file"><img src="../images/<?php echo $evcek['resim_url3'] ?>"></label>
                 <input type="file" name="resim_url3" value="<?php echo $evcek['resim_url3'] ?>">
               </div>
               <button type="submit" name="url_kaydet3" class="btn btn-info" style="width: 80px;height: 30px; color: white; text-align: center;">Kaydet</button></form>


               <form method="POST" action="netting/islem.php">      
                 <div class="form-group col-md-12">
                   <label for="file"><img src="../images/<?php echo $evcek['resim_url4'] ?>"></label>
                   <input type="file" name="resim_url4" value="<?php echo $evcek['resim_url4'] ?>">
                 </div>
                 <button type="submit" name="url_kaydet4" class="btn btn-info" style="width: 80px;height: 30px; color: white; text-align: center;">Kaydet</button></form>

                 <form method="POST" action="netting/islem.php">      
                   <div class="form-group col-md-12">
                     <label for="file"><img src="../images/<?php echo $evcek['resim_url5'] ?>"></label>
                     <input type="file" name="resim_url5" value="<?php echo $evcek['resim_url5'] ?>">
                   </div>
                   <button type="submit" name="url_kaydet5" class="btn btn-info" style="width: 80px;height: 30px; color: white; text-align: center;">Kaydet</button></form>


                 </div>

               </div>

             </div>

           </div>


         </div>
         <!-- /. ROW  -->


       </div>
       <!-- /. PAGE INNER  -->
     </div>
     <!-- /. PAGE WRAPPER  -->
   </div>
   <!-- İNDEX SON-->

   <?php include 'footer.php';
   ?>