<div class="row">
	<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Kategori Ekleme Bölümü</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<form action="<?php echo base_url("kategoriler/add"); ?>" method="POST">
							<div class="form-group">
								<label for="exampleInputEmail1">Kategori Adı:</label>
								<input type="text" class="form-control"name="kategori_adi" >
							</div>		
							
							<button type="submit" name="kategoriEkleButton" class="btn btn-primary btn-md">Ekle</button>
							<a href="<?php echo base_url("kategoriler"); ?>" class="btn btn-danger">İptal</a>
						</form>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->
	<div class="col-md-3"></div>
</div>