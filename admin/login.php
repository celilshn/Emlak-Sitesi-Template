<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PELİKAN EMLAK ADMİN GİRİŞİ</title>

  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

  <style>
</style>
</head>
<body style="background: url(../images/1.png) no-repeat fixed center; >
<div class="container">
  <div class="row text-center " style="padding-top:100px;">
    <div class="col-md-12">
        <h3>PELİKAN EMLAK ADMİN GİRİŞİ  </h3>
    </div>
  </div>
  <div class="row ">

    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

      <div class="panel-body" style="background-color: white; opacity: 0.9; border-radius: 10px;">
        <form action="netting/islem.php" method="POST">
          <hr />
          <h2 style="text-align: center; "><b>Admin Girişi</b></h2>
          <?php 
          if($_GET['login']=="no")
          {
            echo "Kullanıcı Bulunamadı..";
          }
          ?>
          
          <br />
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
            <input type="text" class="form-control" name="admin_kadi" placeholder="Kullanıcı adı " />
          </div>
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
            <input type="password" class="form-control" name="admin_sifre" placeholder="Şifre" />
          </div>

          <button type="submit" name="a_giris" class="btn btn-primary " style="width:100%;">Giriş Yap</button>
          <hr />
        </form>
      </div>

    </div>


  </div>
</div>

</body>
</html>
