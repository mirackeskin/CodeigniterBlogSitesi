<!-- Ajax dataTable -->
<div class="row">
	<div class="col-md-12">
		<div class="widget">
			<header class="widget-header">
				<h4 class="widget-title">Tüm Haberler</h4>
				<a href="<?php echo base_url("urunler/add_page"); ?>" class="btn btn-primary" style="float:right;">Yeni Haber Ekle</a>
			</header><!-- .widget-header -->
			<hr class="widget-separator">
			<div class="widget-body">
				<table id="responsive-datatable" data-plugin="DataTable" data-options="{
							responsive: true,
							keys: true
						}" class="table table-striped" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th style="text-align:center">id</th>
							<th style="text-align:center">Kategori Adı</th>
							<th style="text-align:center">Başlık</th>
							<th style="text-align:center">Tarih</th>
							<th style="text-align:center">Durumu</th>
							<th style="text-align:center">İşlemler</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						foreach($items as $item)
						{
					?>
						<tr style="text-align:center;">
							<td><?php echo $item->id; ?></td>
							<td><?php echo $item->kategori_adi; ?></td>
							<td><?php echo $item->baslik; ?></td>
							<td><?php echo $item->tarih; ?></td>
							<td>
								<div class="m-b-lg m-r-xl inline-block">
									<input data-url="<?php echo base_url("urunler/isActiveSetter/$item->id"); ?>" class="isActive" id="switch-2-2" type="checkbox" data-switchery data-color="#10c469" <?php if($item->durum==1){echo "checked";}else{} ?> />
								</div>								
							</td>
							<td align="center">
								<a href="<?php echo base_url("urunler/delete/$item->id"); ?>" class="btn btn-danger" style="width:60%">Sil</a><br>
								<a href="<?php echo base_url("urunler/update_page/$item->id"); ?>" class="btn btn-primary" style="width:60%">Düzenle</a><br> 
								<a href="<?php echo base_url("urunler/image_page/$item->id") ?>" class="btn btn-warning pd-1" style="width:60%">Resim Ekle</a> 
							</td>
						</tr>
					<?php } ?>
					</tbody>
					<tfoot>
						<tr><th style="text-align:center">id</th><th style="text-align:center">Kategori Adı</th><th style="text-align:center">Başlık</th><th style="text-align:center">Tarih</th><th style="text-align:center">İşlemler</th></tr>
					</tfoot>
				</table>
			</div><!-- .widget-body -->
		</div><!-- .widget -->
	</div><!-- END column -->
</div><!--END row-->