<!-- Ajax dataTable -->
<div class="row">
	<div class="col-md-12">
		<div class="widget">
			<header class="widget-header">
				<h4 class="widget-title">Kategoriler</h4>
				<a href="<?php echo base_url("kategoriler/add_page"); ?>" class="btn btn-primary" style="float:right;">Yeni Kategori Ekle</a>
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
							<th style="text-align:center">Tarih</th>
							<th style="text-align:center">İşlemler</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						foreach($items as $item)
						{
					?>
						<tr style="text-align:center;">
							<td><?php echo $item->kategoriler_id; ?></td>
							<td><?php echo $item->kategori_adi; ?></td>
							<td><?php echo $item->kategori_tarih; ?></td>
							
							<td align="center">
								<a href="<?php echo base_url("kategoriler/delete/$item->kategoriler_id"); ?>" class="btn btn-danger" style="width:60%">Sil</a><br>
								<a href="<?php echo base_url("kategoriler/update_page/$item->kategoriler_id"); ?>" class="btn btn-primary" style="width:60%">Düzenle</a><br>
							</td>
						</tr>
					<?php } ?>
					</tbody>
					<tfoot>
						<tr>
							<th style="text-align:center">id</th>
							<th style="text-align:center">Kategori Adı</th>
							<th style="text-align:center">Tarih</th>
							<th style="text-align:center">İşlemler</th>
						</tr>
					</tfoot>
				</table>
			</div><!-- .widget-body -->
		</div><!-- .widget -->
	</div><!-- END column -->
</div><!--END row-->