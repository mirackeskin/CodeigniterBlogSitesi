<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
             Site Logo Yükleme Alanı..
        </h4>
    </div><!-- END column -->
	<div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("ayarlar/image_upload/$items->id"); ?>" class="dropzone" data-plugin="dropzone" data-options="{ url: '<?php echo base_url("ayarlar/image_upload/$items->id"); ?>'}">
                    <div class="dz-message">
                        <h3 class="m-h-lg">Logo Resmini Buraya Sürükle</h3>
                    </div>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>

<div class="row">
	<div class="col-md-12"><br>
        <h4 class="m-b-lg">
             Site Ayarları Düzenleme Bölümü..
        </h4><br>
    </div><!-- END column -->

	<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Site Ayarları</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<form action="<?php echo base_url("ayarlar/update/$items->id"); ?>" method="POST">
							<div class="form-group">
								<label for="exampleInputEmail1">Telefon</label>
								<input type="text" class="form-control"name="telefon" value="<?php echo $items->telefon; ?>">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Mail</label>
								<input type="text" class="form-control"name="mail" value="<?php echo $items->mail; ?>">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Adres</label>
								<input type="text" class="form-control"name="adres" value="<?php echo $items->adres; ?>">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Logo Url</label>
								<input type="text" class="form-control"name="logo_url" value="<?php echo $items->logo_url; ?>">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Twitter Adresi</label>
								<input type="text" class="form-control"name="twitter_url" value="<?php echo $items->twitter_url; ?>">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Kullanıcı Adı</label>
								<input type="text" class="form-control"name="facebook_url" value="<?php echo $items->facebook_url; ?>">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Kullanıcı Adı</label>
								<input type="text" class="form-control"name="instagram_url" value="<?php echo $items->instagram_url; ?>">
							</div>				

							<div class="form-group">
								<label for="exampleInputEmail1">Kullanıcı Adı</label>
								<input type="text" class="form-control"name="linkedin_url" value="<?php echo $items->linkedin_url; ?>">
							</div>							
							
							<button type="submit" name="ayarlarDuzenleButton" class="btn btn-primary btn-md">Düzenle</button>
							<a href="<?php echo base_url("dashboard"); ?>" class="btn btn-danger">İptal</a>
						</form>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->
	<div class="col-md-3"></div>
</div>