<div class="row">
	<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Yazı Düzenleme Bölümü</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<form action="<?php echo base_url("yazilar/update/$items->id"); ?>" method="POST">
							<div class="form-group">
								<label for="exampleInputEmail1">Yazı Başlığı</label>
								<input type="text" class="form-control"name="baslik" value="<?php echo $items->baslik; ?>">
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1">Yazı Metni</label>
                                <textarea name="icerik" class="m-0" data-plugin="summernote" data-options="{height: 250}"><?php echo $items->icerik; ?></textarea>
							</div>

							<div class="form-group ">
								<label for="control-demo-6" class="col-sm-3">Kategori:</label>
								<div id="control-demo-6" class="col-sm-9">
									<select name="kategori_id" class="form-control">
										<?php 
											foreach($selectBox as $selectbox)
											{
										?>
										<option value="<?php echo $selectbox->kategoriler_id; ?>"><?php echo $selectbox->kategori_adi; ?></option>

										<?php } ?>
									</select>
								</div>
							</div><!-- .form-group --> <br> <br>												
							
							<button type="submit" name="yaziUpdateButton" class="btn btn-primary btn-md">Düzenle</button>
							<?php $kullanici=$this->session->userdata("user"); ?>
							<a href="<?php echo base_url("yazilar/index/$kullanici->id"); ?>" class="btn btn-danger">İptal</a>
						</form>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->
	<div class="col-md-3"></div>
</div>