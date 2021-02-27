
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
                    <h3><?php echo $product->baslik; ?></h3><hr>
                  </div>
                </div>

                <?php
                    $img=get_product_image($product->id); 
                    $image=base_url("panel/uploads/urunler_v/$img");
                ?>
                
                <div class="col-md-12 pb-5">
                    <div class="pb-5" align="center" id="urun_resmi">
                    <img style="width:100%;" src="<?php echo $image; ?>" alt="">
                    </div>
                    <p><?php echo $product->icerik; ?></p>
                </div>

                <!--Yorumlar Bölümü-->
                <div class="col-md-12 bg-light pt-3 mb-5" style="border-radius:10px;">                
                        <div class="write-comment-header">
                          <h3>Yorumlar</h3>
                        </div>
                       <!--Yorum Gönderme-->
                      <div class="write-comment-container pt-3 pb-3" >
                          <form action="<?php echo base_url("product/send_comment/$product->id"); ?>" method="POST">
                              <div class="form-group ">
                                <label >Adınız</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="yorum_ad">
                              </div>
                              
                              <div class="form-group">
                                <label >Yorumunuz</label>
                                <textarea class="form-control" rows="5" name="yorum_icerik"></textarea>
                              </div>
                              <button type="submit" class="btn btn-secondary">Yorumu Gönder</button>
                          </form>
                      </div>
                      <hr>
                      <!--Tüm Yorumlar-->
                      <?php 
                        foreach($yorumlar as $yorum)
                        {
                      ?>
                      <div class="comments-wrapper " style="padding-top:25px; padding-bottom:50px;">
                          <div class="comment-card-image" style="width:20%; height:100%; float:left;">
                            <img style="width:100%;height;50px;" src="https://secure.gravatar.com/avatar/eabd6a37128ffef55940557ef33e6606?s=64&d=https%3A%2F%2Fyt3.ggpht.com%2F-KA2l99r0DIU%2FAAAAAAAAAAI%2FAAAAAAAAAAA%2F7GnjfbR97ZQ%2Fs900-c-k-no-mo-rj-c0xffffff%2Fphoto.jpg&r=g" alt="">
                          </div>  
                          <div class="comment-card-body" style="width:80%;float:right; position:relative; padding-left:20%; ">
                            <h4 style="font-weight:bold;"><?php echo $yorum->ad; ?></h4>
                            <p><?php echo $yorum->mesaj; ?></p>
                          </div>

                          <div class="comment-date" style="width:80%; height:100%;float:right; position:relative; padding-left:20%;left:50;  ">                            
                            <h6 style="font-weight:bold;">Tarih: <span style="font-size:14px; font-weight:normal;"><?php echo $yorum->tarih; ?></span></h6>
                          </div>

                          <div style="clear:both;"></div>                    
                      </div><hr>
                      <?php } ?>                     
                      
                </div>


                
                  
              
              </div>
            </div>
            

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