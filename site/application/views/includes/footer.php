<footer class="bg-dark">
      <div class="container">
        <div class="row" >
          <div class="col-md-4">
            <div class="row" style="height:100%;">
              <div class="col-md-12" style="padding-top:25px; text-align:center;"><a href=""><img src="<?php echo base_url("panel");?>/uploads/ayarlar_v/logo.png" alt=""></a></div>              
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              
            <div class="col-md-12 pt-4"><h6 style="color:white;">Adres: <?php echo $ayarlar->adres; ?></h6></div>
              <div class="col-md-12"><h6 style="color:white;">Telefon: <?php echo $ayarlar->telefon; ?></h6></div>
              <div class="col-md-12"><h6 style="color:white;">Mail: <?php echo $ayarlar->mail; ?></h6></div>

            </div>
          </div>
          <div class="col-md-4">
            <div class="icon-wrapper-2 pt-4">
            <div class="row">
              <div class="col-md-12 col-6">
                <ul class="icon-wrapper-1">
                  <li class="icon pl-4"><a href="<?php echo $ayarlar->facebook_url; ?>"><i style="font-size:25px;" class="fab fa-facebook text-light"></i></a></li>
                  <li class="icon pl-4"><a href="<?php echo $ayarlar->instagram_url; ?>"><i style="font-size:25px;" class="fab fa-instagram text-light"></i></a></li>
                </ul>
              </div>
              <div class="col-md-12 col-6">
                <ul class="icon-wrapper-1">
                  <li class="icon pl-4"><a href="<?php echo $ayarlar->twitter_url; ?>"><i style="font-size:25px;" class="fab fa-twitter text-light"></i></a></li>
                  <li class="icon pl-4"><a href="<?php echo $ayarlar->linkedin_url; ?>"><i style="font-size:25px;" class="fab fa-linkedin text-light"></i></a></li>
                </ul>
              </div>

            </div>              
            </div>

          </div>
        </div>
      </div>
    </footer>