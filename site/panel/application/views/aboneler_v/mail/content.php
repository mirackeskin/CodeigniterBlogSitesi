<div class="row">
	<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Mail Gönderme Bölümü</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<form action="<?php echo base_url("aboneler/mail_gonder/$items->abone_id"); ?>" method="POST">
							<div class="form-group">
								<label for="exampleInputEmail1">Kullanıcı Adı</label>
								<input type="text" class="form-control"name="kullanici_ad" value="<?php echo $items->abone_ad; ?>">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Kullanıcı Soyadı</label>
								<input type="text" class="form-control"name="kullanici_soyad" value="<?php echo $items->abone_soyad; ?>">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Kullanıcı Mail Adresi</label>
								<input type="text" class="form-control" name="abone_mail" value="<?php echo $items->abone_mail; ?>">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Mail Konusu</label>
								<input type="text" class="form-control" name="mail_konu" >
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1">Mail İçeriği</label>
                                <textarea name="mail_icerik" class="m-0" data-plugin="summernote" data-options="{height: 250}"></textarea>
							</div>

							
										
							
							<button type="submit" name="mailGonderButton" class="btn btn-primary btn-md">Gönder</button>
							<a href="<?php echo base_url("aboneler"); ?>" class="btn btn-danger">İptal</a>
						</form>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->
	<div class="col-md-3"></div>
</div>