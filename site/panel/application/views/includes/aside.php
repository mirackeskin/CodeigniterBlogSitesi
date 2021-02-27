
<?php 
    $kullanici=$this->session->userdata("user");
    if($kullanici->kullanici_yetki==0)
    { 
?>
<aside id="menubar" class="menubar light">
    <div class="app-user">
        <div class="media">
            <div class="media-left">
                <div class="avatar avatar-md avatar-circle">
                    <a href="javascript:void(0)"><img class="img-responsive" src="<?php echo base_url("assets"); ?>/assets/images/221.jpg" alt="avatar"/></a>
                </div><!-- .avatar -->
            </div>
            <div class="media-body">
                <div class="foldable">
                    <h5><a href="javascript:void(0)" class="username"><?php echo $kullanici->kullanici_ad." ".$kullanici->kullanici_soyad; ?></a></h5>
                    <ul>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <small>İşlemler</small>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu animated flipInY">
                                <li>
                                    <a class="text-color" href="<?php echo base_url("dashboard"); ?>">
                                        <span class="m-r-xs"><i class="fa fa-home"></i></span>
                                        <span>Ana Sayfa</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-color" href="<?php echo base_url("mesajlar"); ?>">
                                        <span class="m-r-xs"><i class="fa fa-user"></i></span>
                                        <span>Mesajlarım</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-color" href="<?php base_url("ayarlar"); ?>">
                                        <span class="m-r-xs"><i class="fa fa-gear"></i></span>
                                        <span>Ayarlar</span>
                                    </a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a class="text-color" href="<?php echo base_url("userop/logout"); ?>">
                                        <span class="m-r-xs"><i class="fa fa-power-off"></i></span>
                                        <span>Çıkış</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- .media-body -->
        </div><!-- .media -->
    </div><!-- .app-user -->

    <div class="menubar-scroll">
        <div class="menubar-scroll-inner">
            <ul class="app-menu">


                <li>
                    <a href="<?php echo base_url("dashboard"); ?>">
                        <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url("ayarlar") ?>">
                        <i class="menu-icon zmdi zmdi-settings zmdi-hc-lg"></i>
                        <span class="menu-text">Ayarlar</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url("profil/index/$kullanici->id") ?>">
                        <i class="menu-icon fa fa-user-plus "></i>
                        <span class="menu-text">Profilim</span>
                    </a>
                </li>
                <!--
                <li class="has-submenu">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-apps zmdi-hc-lg"></i>
                        <span class="menu-text">Galeriler</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="#"><span class="menu-text">Resim Galerisi</span></a></li>
                        <li><a href="#"><span class="menu-text">Video Galerisi</span></a></li>
                        <li><a href="#"><span class="menu-text">Dosya Galerisi</span></a></li>
                    </ul>
                </li>-->
                
                <li>
                    <a href="<?php echo base_url("kategoriler"); ?>">
                        <i class="menu-icon zmdi zmdi-layers zmdi-hc-lg"></i>
                        <span class="menu-text">Kategoriler</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url("urunler"); ?>">
                        <i class="menu-icon zmdi zmdi-view-web zmdi-hc-lg"></i>
                        <span class="menu-text">Tüm Yazılar</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url("yazilar/index/$kullanici->id"); ?>">
                        <i class="menu-icon fa fa-newspaper-o"></i>
                        <span class="menu-text">Yazılarım</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url("mesaj"); ?>">
                        <i class="menu-icon fa fa-envelope"></i>
                        <span class="menu-text">Mesaj Kutusu</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url("popular_tags"); ?>">
                        <i class="menu-icon fa fa-calendar"></i>
                        <span class="menu-text">Popüler Etiketler</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url("kullanicilar"); ?>">
                        <i class="menu-icon fa fa-user-secret"></i>
                        <span class="menu-text">Kullanıcılar</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url("aboneler"); ?>">
                        <i class="menu-icon fa fa-users"></i>
                        <span class="menu-text">Aboneler</span>
                    </a>
                </li>

                

            </ul><!-- .app-menu -->
        </div><!-- .menubar-scroll-inner -->
    </div><!-- .menubar-scroll -->
</aside>
<?php 
    }
?>


<?php 
    
    if($kullanici->kullanici_yetki==1)
    { 
?>
<aside id="menubar" class="menubar light">
    <div class="app-user">
        <div class="media">
            <div class="media-left">
                <div class="avatar avatar-md avatar-circle">
                    <a href="javascript:void(0)"><img class="img-responsive" src="<?php echo base_url("assets"); ?>/assets/images/221.jpg" alt="avatar"/></a>
                </div><!-- .avatar -->
            </div>
            <div class="media-body">
                <div class="foldable">
                    <h5><a href="javascript:void(0)" class="username"><?php echo $kullanici->kullanici_ad." ".$kullanici->kullanici_soyad; ?></a></h5>
                    <ul>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <small>İşlemler</small>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu animated flipInY">
                                <li>
                                    <a class="text-color" href="<?php echo base_url("dashboard"); ?>">
                                        <span class="m-r-xs"><i class="fa fa-home"></i></span>
                                        <span>Ana Sayfa</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-color" href="<?php echo base_url("mesajlar"); ?>">
                                        <span class="m-r-xs"><i class="fa fa-user"></i></span>
                                        <span>Mesajlarım</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-color" href="<?php base_url("ayarlar"); ?>">
                                        <span class="m-r-xs"><i class="fa fa-gear"></i></span>
                                        <span>Ayarlar</span>
                                    </a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a class="text-color" href="<?php echo base_url("userop/logout"); ?>">
                                        <span class="m-r-xs"><i class="fa fa-power-off"></i></span>
                                        <span>Çıkış</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- .media-body -->
        </div><!-- .media -->
    </div><!-- .app-user -->

    <div class="menubar-scroll">
        <div class="menubar-scroll-inner">
            <ul class="app-menu">


                <li>
                    <a href="<?php echo base_url("dashboard"); ?>">
                        <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>


                <li>
                    <a href="<?php echo base_url("profil/index/$kullanici->id") ?>">
                        <i class="menu-icon fa fa-user-plus "></i>
                        <span class="menu-text">Profilim</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url("yazilar/index/$kullanici->id"); ?>">
                        <i class="menu-icon fa fa-newspaper-o"></i>
                        <span class="menu-text">Yazılarım</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url("mesaj"); ?>">
                        <i class="menu-icon fa fa-envelope"></i>
                        <span class="menu-text">Mesaj Kutusu</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url("popular_tags"); ?>">
                        <i class="menu-icon fa fa-calendar"></i>
                        <span class="menu-text">Popüler Etiketler</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url("kullanicilar"); ?>">
                        <i class="menu-icon fa fa-user-secret"></i>
                        <span class="menu-text">Kullanıcılar</span>
                    </a>
                </li>

                

            </ul><!-- .app-menu -->
        </div><!-- .menubar-scroll-inner -->
    </div><!-- .menubar-scroll -->
</aside>
<?php 
    }
?>