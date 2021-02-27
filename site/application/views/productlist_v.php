
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