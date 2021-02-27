<!-- Ajax dataTable -->
<div class="row">
	<div class="col-md-12">
		<div class="widget">
			<header class="widget-header">
				<h4 class="widget-title">Kullanıcılar</h4>
				<?php
					$kullanici=$this->session->userdata("user");
					if($kullanici->kullanici_yetki==0)
					{
				?>
				<a href="<?php echo base_url("kullanicilar/add_page"); ?>" class="btn btn-primary" style="float:right;">Yeni Kullanıcı Ekle</a>
				<?php } ?>
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
							<?php
								$kullanici=$this->session->userdata("user");
								if($kullanici->kullanici_yetki==0)
								{
							?>
							<th style="text-align:center">Mail</th>
							<th style="text-align:center">Şifre</th>
							<?php } ?>
							<th style="text-align:center">Yetki</th>
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
							<td><?php echo $item->kullanici_ad; ?></td>
							<td><?php echo $item->kullanici_soyad; ?></td>
							<?php
								$kullanici=$this->session->userdata("user");
								if($kullanici->kullanici_yetki==0)
								{
							?>
							<td><?php echo $item->kullanici_mail; ?></td>
							<td><?php echo $item->kullanici_sifre; ?></td>
							<?php } ?>
							<td><?php if($item->kullanici_yetki==0){echo "Admin";}else{echo "Yazar";} ?></td>
							<td align="center">
							<?php
								$kullanici=$this->session->userdata("user");
								if($kullanici->kullanici_yetki==0)
								{
							?>
								<a href="<?php echo base_url("kullanicilar/delete/$item->id"); ?>" class="btn btn-danger" style="width:60%">Sil</a><br>
								<a href="<?php echo base_url("kullanicilar/update_page/$item->id"); ?>" class="btn btn-primary" style="width:60%">Düzenle</a><br>
								<a href="<?php echo base_url("kullanicilar/message_page/$item->id"); ?>" class="btn btn-dark" style="width:60%">Mesaj</a><br>
							<?php } ?>
							<?php 
								$kullanici=$this->session->userdata("user");
								if($kullanici->kullanici_yetki==1)
								{ 
							?>
								<a href="<?php echo base_url("kullanicilar/message_page/$item->id"); ?>" class="btn btn-dark" style="width:60%">Mesaj</a><br>
							<?php } ?>
							</td>
						</tr>
					<?php } ?>
					</tbody>
					<tfoot>
						<tr>
							<th style="text-align:center">id</th>
							<th style="text-align:center">Adı</th>
							<th style="text-align:center">Soyadı</th>
							<?php
								$kullanici=$this->session->userdata("user");
								if($kullanici->kullanici_yetki==0)
								{
							?>
							<th style="text-align:center">Mail</th>
							<th style="text-align:center">Şifre</th>
							<?php } ?>
							<th style="text-align:center">Yetki</th>
							<th style="text-align:center">İşlemler</th>
						</tr>
					</tfoot>
				</table>
			</div><!-- .widget-body -->
		</div><!-- .widget -->
	</div><!-- END column -->
</div><!--END row-->