<!--FirstHeader Start-->

<header class="header-top ">
      <div class="container">
        <div class="row header-row-1 ">
          <div class="col-md-2 col-12 sutun">
            <ul class="icon-wrapper-1 ">
              <li class="icon"><a href="<?php echo $ayarlar->facebook_url; ?>"><i class="fab fa-facebook text-dark"></i></a></li>
              <li class="icon"><a href="<?php echo $ayarlar->instagram_url; ?>"><i class="fab fa-instagram text-dark"></i></a></li>
              <li class="icon"><a href="<?php echo $ayarlar->twitter_url; ?>"><i class="fab fa-twitter text-dark"></i></a></li>
              <li class="icon"><a href="<?php echo $ayarlar->linkedin_url; ?>"><i class="fab fa-linkedin text-dark"></i></a></li>
            </ul>
          </div>
          <div class="col-md-7 col-12 sutun">
            <ul class="icon-wrapper-2">
              <li class="icon-2"><i><?php echo $ayarlar->adres; ?></i></li>
              <li class="icon-2"><i><?php echo $ayarlar->telefon; ?></i></li>
              <li class="icon-2"><i><?php echo $ayarlar->mail; ?></i></li>
            </ul>
          </div>
          <div class="col-md-3 col-12 sutun">
            <ul class="icon-wrapper-3">
              <li class="icon-3"><a class="btn " href="<?php echo base_url("") ?>"><i class="fa fa-lock"></i> Abone Ol</a></li>
              <li class="icon-3"><a class="btn " href="<?php echo base_url("panel/login"); ?>"><i class="fa fa-lock"></i> Giriş Yap</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>


<!--First Header End-->

<!--SecondHeader Start-->
<header >
  <div id="navbar" class="header-mainwrapper bg-dark ">
    <div class="container">
      <div class="row" >
        <div class="col-md-2 bg-dark d-flex justify-content-center" >
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url("uploads");?>/logo_purple.png" alt=""></a>                          
        </nav>
        </div>
        <div class="col-md-10">
          <div class="row">
            <div class="col-md-2 bg-dark"style="padding: 0px; margin:0px;"></div>
            <div class="col-md-10" style="padding: 0px; margin:0px;">
              <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                
              
                <div class="collapse navbar-collapse " id="navbarTogglerDemo03">
                  <ul id="abc" class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <?php foreach($navbarKategorileri as $navbarkategori){ ?>
                    <li class="nav-item header-button">
                      <a class="nav-link" href="<?php echo base_url("productlist/get_products/$navbarkategori->kategoriler_id") ?>"><?php echo $navbarkategori->kategori_adi; ?> <span class="sr-only">(current)</span></a>
                    </li>
                    <?php } ?>
                            
                    
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="arama yap" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Ara</button>
                  </form>
                </div>
              </nav>
            </div>
          </div>        
        </div>
      </div>
    </div>
  </div>
</header>
<!--SecondHeader End-->