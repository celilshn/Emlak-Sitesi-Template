<?php
ob_start();
session_start();
?>
<!--Side Bar-->
<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <marquee  direction=right> 
                        Hoşgeldin <?php echo $_SESSION['admin_kadi']; ?>

                    </marquee>

                </div>

            </li>


            <li>
                <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Anasayfa</a>
            </li>

            <li>
                <a  href="ayarlar.php"><i class="fa fa-dashboard "></i>Ayarlar</a>
            </li>           
            
            <li>
                <a  href="ilanlar.php"><i class="fa fa-dashboard "></i>İlanlar</a>
            </li> 
            <li>
                <a  href="iletisim.php"><i class="fa fa-dashboard "></i>İletişim Formları</a>
            </li> 
        </ul>

    </div>

</nav>