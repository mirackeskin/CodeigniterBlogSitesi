<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="widget p-md clearfix">
					<div class="pull-left">
						<h3 class="widget-title">Kullanıcı Sayısı</h3>
					</div>
					<span class="pull-right fz-lg fw-500 counter" data-plugin="counterUp"><?php echo $kullanici_sayisi; ?></span>
				</div><!-- .widget -->
			</div>

			<div class="col-md-6 col-sm-6">
				<div class="widget p-md clearfix">
					<div class="pull-left">
						<h3 class="widget-title">Abone Sayısı</h3>
					</div>
					<span class="pull-right fz-lg fw-500 counter" data-plugin="counterUp"><?php echo $abone_sayisi; ?></span>
				</div><!-- .widget -->
			</div>
		</div><!-- .row -->

		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="widget-title text-primary"><span class="counter" data-plugin="counterUp"><?php echo $goruntulenme_sayisi; ?></span></h3>
							<small class="text-color">Toplam Görüntülenme</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-eye"></i></span>
					</div>
					<footer class="widget-footer bg-primary">
						<span class="small-chart pull-right fa fa-eye" data-plugin="sparkline" ></span>
					</footer>
				</div><!-- .widget -->
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="widget-title text-danger"><span class="counter" data-plugin="counterUp">135</span></h3>
							<small class="text-color">Toplam Beğeni Sayısı</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="glyphicon glyphicon-heart"></i></span>
					</div>
					<footer class="widget-footer bg-danger">
						<span class="small-chart pull-right glyphicon glyphicon-heart"></span>
					</footer>
				</div><!-- .widget -->
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="widget-title text-success"><span class="counter" data-plugin="counterUp"><?php echo $yazi_sayisi; ?></span></h3>
							<small class="text-color">Toplam Yazı Sayısı</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-edit"></i></span>
					</div>
					<footer class="widget-footer bg-success">
						<small></small>
						<span class="small-chart pull-right fa fa-edit" data-plugin="sparkline"></span>
					</footer>
				</div><!-- .widget -->
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="widget-title text-warning"><span class="counter" data-plugin="counterUp"><?php echo $yorum_sayisi; ?></span></h3>
							<small class="text-color">Toplam Yorum Sayısı</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-comments"></i></span>
					</div>
					<footer class="widget-footer bg-warning">
						<small></small>
						<span class="small-chart pull-right fa fa-comments" data-plugin="sparkline" ></span>
					</footer>
				</div><!-- .widget -->
			</div>
		</div><!-- .row -->