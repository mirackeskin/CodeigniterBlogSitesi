

<div class="row">
	<div class="col-md-12"><br>
        <h4 class="m-b-lg">
             Profil Bilgileri Düzenleme Bölümü..
        </h4><br>
    </div><!-- END column -->

	<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Profil Bilgileri</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<form action="<?php echo base_url("profil/update/$items->id"); ?>" method="POST">
							<div class="form-group">
								<label for="exampleInputEmail1">Adınız</label>
								<input type="text" class="form-control"name="kullanici_ad" value="<?php echo $items->kullanici_ad; ?>">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Soyadınız</label>
								<input type="text" class="form-control"name="kullanici_soyad" value="<?php echo $items->kullanici_soyad; ?>">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Mail Adresiniz</label>
								<input type="text" class="form-control" name="kullanici_mail" value="<?php echo $items->kullanici_mail; ?>">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Şifreniz</label>
								<input type="text" class="form-control"name="kullanici_sifre" value="<?php echo $items->kullanici_sifre; ?>">
							</div>

							
							<button type="submit" name="profilDuzenleButton" class="btn btn-primary btn-md">Düzenle</button>
							<a href="<?php echo base_url("dashboard"); ?>" class="btn btn-danger">İptal</a>
						</form>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->
	<div class="col-md-3"></div>
</div>