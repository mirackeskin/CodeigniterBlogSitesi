<div class="row">
	<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Kullanıcı Ekleme Bölümü</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<form action="<?php echo base_url("kullanicilar/add"); ?>" method="POST">
							<div class="form-group">
								<label for="exampleInputEmail1">Kullanıcı Adı</label>
								<input type="text" class="form-control"name="kullanici_ad" >
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Kullanıcı Soyadı</label>
								<input type="text" class="form-control"name="kullanici_soyad" >
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Kullanıcı Mail Adresi</label>
								<input type="text" class="form-control"name="kullanici_mail" >
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Kullanıcı Şifresi</label>
								<input type="text" class="form-control"name="kullanici_sifre" >
							</div>

							<div class="form-group ">
								<label for="control-demo-6" class="col-sm-3">Yetki:</label>
								<div id="control-demo-6" class="col-sm-4">
									<select name="kullanici_yetki" class="form-control">
										<option value="0">Admin</option>
										<option value="1">Yazar</option>
									</select>
								</div>
							</div><!-- .form-group --> <br> <br>												
							
							<button type="submit" name="kullaniciKaydetButton" class="btn btn-primary btn-md">Kaydet</button>
							<a href="<?php echo base_url("kullanicilar"); ?>" class="btn btn-danger">İptal</a>
						</form>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->
	<div class="col-md-3"></div>
</div>