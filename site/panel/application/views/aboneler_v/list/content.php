<!-- Ajax dataTable -->
<div class="row">
	<div class="col-md-12">
		<div class="widget">
			<header class="widget-header">
				<h4 class="widget-title">Aboneler</h4>
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
							<th style="text-align:center">Adı</th>
							<th style="text-align:center">Soyadı</th>
							<th style="text-align:center">Mail</th>
							<th style="text-align:center">Şifre</th>
							<th style="text-align:center">Abonelik Tarihi</th>
							<th style="text-align:center">İşlemler</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						foreach($items as $item)
						{
					?>
						<tr style="text-align:center;">
							<td><?php echo $item->abone_id; ?></td>
							<td><?php echo $item->abone_ad; ?></td>
							<td><?php echo $item->abone_soyad; ?></td>
							<td><?php echo $item->abone_mail; ?></td>
							<td><?php echo $item->abone_sifre; ?></td>
							<td><?php echo $item->abone_tarih; ?></td>
							<td align="center">
								<a href="<?php echo base_url("aboneler/delete/$item->abone_id"); ?>" class="btn btn-danger" style="width:70%">Sil</a><br>
								<a href="<?php echo base_url("aboneler/update_page/$item->abone_id"); ?>" class="btn btn-primary" style="width:70%">Düzenle</a><br>
								<a href="<?php echo base_url("aboneler/mail_page/$item->abone_id"); ?>" class="btn btn-dark" style="width:70%">Mail Gönder</a><br>
							</td>
						</tr>
					<?php } ?>
					</tbody>
					<tfoot>
						<tr>
							<th style="text-align:center">id</th>
							<th style="text-align:center">Adı</th>
							<th style="text-align:center">Soyadı</th>
							<th style="text-align:center">Mail</th>
							<th style="text-align:center">Şifre</th>
							<th style="text-align:center">İşlemler</th>
						</tr>
					</tfoot>
				</table>
			</div><!-- .widget-body -->
		</div><!-- .widget -->
	</div><!-- END column -->
</div><!--END row-->