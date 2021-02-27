
<!doctype html>
<html lang="en">
  <head>
    

    <?php $this->load->view("includes/head"); ?>

    <title>TECH-NEWS</title>
    

  </head>

<body >
    

<!--Header Start--> 

<?php $this->load->view("includes/header"); ?>

<!--Header End-->
    
    <div class="container">
      <div class="row ">
        <div class="col-md-12">
          <div align="center" class="reklam">
            <!--<img class="reklam-img" src="<?php echo base_url("uploads");?>/nike.png" alt="">-->
          </div>
        </div>
      </div>
    </div>

    <!--Section 0 Start-->
    <section id="section-0" class="main-wrapper">
      <div class="container">
        <div class="row">
          <!--Carousel Part Start-->
          <div class="col-md-6 ">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                <?php
                    $image=get_slider_image($sliderLastRow->id);
                    $image=base_url("panel/uploads/urunler_v/$image");
                ?>
                  <img class="d-block w-100" src="<?php echo $image;?>" alt="First slide">
                  <div style="background:black; border-radius:40px; opacity:0.7;" class="carousel-caption ">
                    <h6 ><a style="color: whitesmoke;" href="<?php echo base_url("Product/get_product_content/$sliderLastRow->id") ?>"><?php echo $sliderLastRow->baslik; ?></a></h6>
                    <!--<p><?php //echo text_limit($sliderLastRow->icerik); ?></p> -->
                  </div>
                </div>
                <?php foreach($sliderRows as $row){ ?>
                <div class="carousel-item">
                <?php
                    $image=get_slider_image($row->id);
                    $image=base_url("panel/uploads/urunler_v/$image");
                ?>
                  <img class="d-block w-100" src="<?php echo $image; ?>" alt="Second slide">
                  <div class="carousel-caption " style="background:black; border-radius:40px; opacity:0.7;">
                    <h6><a href="<?php echo base_url("Product/get_product_content/$row->id") ?>" style="color: whitesmoke;"><?php echo $row->baslik; ?></a></h6                                                    >
                    <!--<p><?php //echo text_limit($row->icerik); ?></p> -->
                  </div>
                </div>
                <?php } ?>
                
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>
          <!--Carousel Part End-->

          <!--4Lü Kart Bölümü Start-->
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6 pt-4">
                <a href="https://www.google.com">
                  <div class="card kart " >
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                      <?php foreach($incelemeGroup as $incelemegrup){ $sayac=0; ?>

                        <?php
                            $img=get_slider_image($incelemegrup->id); 
                            $image=base_url("panel/uploads/urunler_v/$img");
                        ?>
                        <div class="carousel-item <?php if($sayac==0){echo "active"; $sayac++;} ?>">
                          <img class="d-block w-100" src="<?php echo $image ?>" alt="First slide">
                          <span class="badge badge badge-success">İnceleme</span>
                        </div>

                        <!--
                        <div class="carousel-item ">
                          <img class="d-block w-100" src="<?php echo base_url("uploads");?>/profil.jpg" alt="Second slide">
                          <span class="badge badge badge-success">İnceleme</span>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?php echo base_url("uploads");?>/profil.jpg" alt="Third slide">
                          <span class="badge badge badge-success">İnceleme</span>
                        </div> -->
                            <?php } ?>
                      </div>
                      <div class="card-body">
                        <h6 class="card-title"><a class="kart-baslik-link " href="<?php echo base_url("Product/get_product_content/$incelemegrup->id");?>"><?php echo $incelemegrup->baslik; ?></a></h6>
                      </div>                      
                    </div>                    
                  </div>
                </a>
              </div>

              <div class="col-md-6 pt-4">
                <a href="https://www.google.com">
                  <div class="card kart " >
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                      <?php foreach($oyunGroup as $oyungrup){ $sayac=0; ?>

                          <?php
                              $img=get_slider_image($oyungrup->id); 
                              $image=base_url("panel/uploads/urunler_v/$img");
                          ?>
                          <div class="carousel-item <?php if($sayac==0){echo "active"; $sayac++;} ?>">
                            <img class="d-block w-100" src="<?php echo $image ?>" alt="First slide">
                            <span class="badge badge badge-danger">Oyun</span>
                          </div>

                          <!--
                          <div class="carousel-item ">
                            <img class="d-block w-100" src="<?php echo base_url("uploads");?>/profil.jpg" alt="Second slide">
                            <span class="badge badge badge-success">İnceleme</span>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo base_url("uploads");?>/profil.jpg" alt="Third slide">
                            <span class="badge badge badge-success">İnceleme</span>
                          </div> -->
                              <?php } ?>
                      </div>
                      <div class="card-body">
                        <h6 class="card-title"><a class="kart-baslik-link " href="<?php echo base_url("Product/get_product_content/$oyungrup->id");?>"><?php echo $oyungrup->baslik; ?></a></h6>
                      </div>                      
                    </div>                    
                  </div>
                </a>
              </div>

              <div class="col-md-6 pt-4">
                <a href="https://www.google.com">
                  <div class="card kart " >
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                      <?php foreach($bilimGroup as $bilimgrup){ $sayac=0; ?>

                        <?php
                            $img=get_slider_image($bilimgrup->id); 
                            $image=base_url("panel/uploads/urunler_v/$img");
                        ?>
                        <div class="carousel-item <?php if($sayac==0){echo "active"; $sayac++;} ?>">
                          <img class="d-block w-100" src="<?php echo $image ?>" alt="First slide">
                          <span class="badge badge badge-primary">Bilim</span>
                        </div>

                        <!--
                        <div class="carousel-item ">
                          <img class="d-block w-100" src="<?php echo base_url("uploads");?>/profil.jpg" alt="Second slide">
                          <span class="badge badge badge-success">İnceleme</span>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?php echo base_url("uploads");?>/profil.jpg" alt="Third slide">
                          <span class="badge badge badge-success">İnceleme</span>
                        </div> -->
                            <?php } ?>
                      </div>
                      <div class="card-body">
                        <h6 class="card-title"><a class="kart-baslik-link " href="<?php echo base_url("Product/get_product_content/$bilimgrup->id");?>"><?php echo $bilimgrup->baslik; ?></a></h6>
                      </div>                      
                    </div>                    
                  </div>
                </a>
              </div>

              <div class="col-md-6 pt-4">
                <a href="https://www.google.com">
                  <div class="card kart " >
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                      <?php foreach($teknolojiGroup as $teknolojigrup){ $sayac=0; ?>

                          <?php
                              $img=get_slider_image($teknolojigrup->id); 
                              $image=base_url("panel/uploads/urunler_v/$img");
                          ?>
                          <div class="carousel-item <?php if($sayac==0){echo "active"; $sayac++;} ?>">
                            <img class="d-block w-100" src="<?php echo $image ?>" alt="First slide">
                            <span class="badge badge badge-warning">Teknoloji</span>
                          </div>

                          <!--
                          <div class="carousel-item ">
                            <img class="d-block w-100" src="<?php echo base_url("uploads");?>/profil.jpg" alt="Second slide">
                            <span class="badge badge badge-success">İnceleme</span>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo base_url("uploads");?>/profil.jpg" alt="Third slide">
                            <span class="badge badge badge-success">İnceleme</span>
                          </div> -->
                              <?php } ?>
                      </div>
                      <div class="card-body">
                        <h6 class="card-title"><a class="kart-baslik-link " href="<?php echo base_url("Product/get_product_content/$teknolojigrup->id");?>"><?php echo $teknolojigrup->baslik; ?></a></h6>
                      </div>                      
                    </div>                    
                  </div>
                </a>
              </div>
              <!--4Lü Kart Bölümü End-->

              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Section 0 End-->

    
    <!--Section 1 Start-->
    <section id="section-1" class="main-wrapper">
      <div class="container ">
        <div class="row">
          
          <?php foreach($incelemeHaberleri as $incelemehaberi){ ?>
          <div class="col-md-4 pt-4">
            <a href="https://www.google.com">
              <div class="card kart" >
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                      <?php
                          $img=get_slider_image($incelemehaberi->id); 
                          $image=base_url("panel/uploads/urunler_v/$img");
                      ?>
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="<?php echo $image; ?>" alt="First slide">
                    </div>                   
                  </div>

                </div>
                <div class="card-body">
                  <h4 class="card-title"><a class="kart-baslik-link " href="<?php echo base_url("Product/get_product_content/$incelemehaberi->id");?>"><?php echo $incelemehaberi->baslik; ?></a></h4>
                  
                  <p class="card-text"><?php echo text_limit($incelemehaberi->icerik); ?></p>
                  <p><span style="float: right; font-size: 13px;" class="badge badge-success">İnceleme</span></p>                  
                </div>
              </div>
            </a>
          </div>
          
          <?php } ?>

          
          

        </div>
      </div>
    </section>
    <!--Section 1 End-->

    <!--Section 2 Start-->

    <div class="section-2">
      <div class="main-wrapper-2">
        <div class="container">
          <div class="row">
            <!--Section 2 Left Part Start-->
            <div class="col-md-8 ">
              <div class="row">

                <div class="col-md-12">
                  <div class="sol-bolum-baslik">
                    <h3>Daha Önceki Yazılar</h3><hr>
                  </div>
                </div>
                
                <?php foreach ($results as $result){ ?>
                <div  class="col-md-12 yan-kart">
                  <div class="row">
                        <?php
                            $img=get_slider_image($result->id); 
                            $image=base_url("panel/uploads/urunler_v/$img");
                        ?>
                    <div class="col-md-6">
                      <div class="kart-resim ">
                        <img src="<?php echo $image; ?>" alt="">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="kart-govde ">
                        <?php 
                          $kategori_adi= get_category($result->kategori_id);
                          if($kategori_adi=="Teknoloji")
                          {$renk= "badge-warning";}
                          elseif($kategori_adi=="Oyun")
                          {$renk= "badge-danger";}
                          elseif($kategori_adi=="Bilim")
                          {$renk= "badge-primary";}
                          elseif($kategori_adi=="İnceleme")
                          {$renk= "badge-success";}
                          else{$renk="badge-info";}
                         ?>
                        <h5><a href="<?php echo base_url("Product/get_product_content/$result->id");?>"><?php echo $result->baslik; ?><span style="float: right;" class="badge badge  <?php echo $renk; ?>"><?php  echo $kategori_adi; ?></span></a></h5>
                        <p><?php echo text_limit($result->icerik); ?></p>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <?php } ?>
                <hr>


                
                  
              <!--Sayfalama Başlangıç-->
              </div>
                <div class="col-md-12 mt-4">
                  <div class="d-flex justify-content-center">
                  
                      <p class="pagination"><?php echo $links; ?></p>

                  </div>
                </div>
            </div>
            <!--Sayfalama Son-->

            <!--Section 2 Left Part End-->
            <!--Section 2 Right Part Start-->
            <div class="col-md-4 ">

              <div class="row pt-5 pb-5">
                <div class="col-md-12">
                  <div class="list-group list-group-flush">
                    <h5 class="list-group-item list-group-item-action list-group-item-secondary">En Çok Okunan Haberler</h5> 
                    <?php 
                      $sira=1;
                      foreach($enCokOkunanlar as $encokokunanlar){ 
                    ?>

                          <?php
                              $img=get_slider_image($encokokunanlar->id); 
                              $image=base_url("panel/uploads/urunler_v/$img");
                          ?>
                    <a href="<?php echo base_url("Product/get_product_content/$encokokunanlar->id");?>" class="list-group-item list-group-item-action sidebar-renklendirici">
                      <span><h4 style="display: inline;"><?php echo $sira; $sira++; ?> -</h4></span> <?php echo $encokokunanlar->baslik; ?> <span style="float: right;"><img src="<?php echo $image; ?>" alt="" style="width: 50px;"></span></a>
                    <?php } ?>
                    
                  
                  </div>
                </div>
              </div>

              <div class="row pt-5 pb-5">
                <div class="col-md-12">
                  <div class="list-group list-group-flush">
                    <h5 class="list-group-item list-group-item-action list-group-item-secondary bg-warning">Teknoloji Haberleri</h5> 
                    <?php 
                      $sira=1;
                      foreach($teknolojiHaberleri as $teknolojihaberleri){ 
                    ?>

                          <?php
                              $img=get_slider_image($teknolojihaberleri->id); 
                              $image=base_url("panel/uploads/urunler_v/$img");
                          ?>
                    <a href="<?php echo base_url("Product/get_product_content/$teknolojihaberleri->id");?>" class="list-group-item list-group-item-action sidebar-renklendirici-teknoloji"><span><h4 style="display: inline;"><?php echo $sira; $sira++; ?> -</h4></span> <?php echo $teknolojihaberleri->baslik; ?><span style="float: right;"><img src="<?php echo $image; ?>" alt="" style="width: 50px;"></span></a>
                    <?php } ?>
                    
                  </div>
                </div>
              </div>

              <div class="row pt-5 pb-5">
                <div class="col-md-12">
                  <div class="list-group list-group-flush">
                    <h5 style="color:whitesmoke;" class="list-group-item list-group-item-action list-group-item-secondary bg-danger">Oyun Haberleri</h5> 
                    <?php 
                      $sira=1;
                      foreach($oyunHaberleri as $oyunhaberleri){ 
                    ?>

                          <?php
                              $img=get_slider_image($oyunhaberleri->id); 
                              $image=base_url("panel/uploads/urunler_v/$img");
                          ?>
                    <a href="<?php echo base_url("Product/get_product_content/$oyunhaberleri->id");?>" class="list-group-item list-group-item-action sidebar-renklendirici-oyun"><span><h4 style="display: inline;"><?php echo $sira; $sira++; ?> -</h4></span> <?php echo $oyunhaberleri->baslik; ?><span style="float: right;"><img src="<?php echo $image; ?>" alt="" style="width: 50px;"></span></a>
                    <?php } ?>
                    
                  </div>
                </div>
              </div>

            </div>
            <!--Section 2 Right Part End-->
          </div>
        </div>
      </div>
    </div>

    <!--Section 2 End-->

    
    <!--Footer Start-->

    <?php $this->load->view("includes/footer");?>

    <!--Footer End-->






    
    


    

    
    









    <?php $this->load->view("includes/include_script.php"); ?>

    
  </body>
</html>