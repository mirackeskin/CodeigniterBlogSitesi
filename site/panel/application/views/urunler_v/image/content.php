<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo $urun->baslik; ?> Haber Kapak Fotoğrafları Yükleme Alanı..
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("urunler/image_upload/$urun->id"); ?>" class="dropzone" data-plugin="dropzone" data-options="{ url: '<?php echo base_url("urunler/image_upload/$urun->id"); ?>'}">
                    <div class="dz-message">
                        <h3 class="m-h-lg">Drop files here or click to upload.</h3>
                        <p class="m-b-lg text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</p>
                    </div>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>

<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo $urun->baslik; ?> ürününün Fotoğrafları...
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <th>#id</th>
                        <th>Görsel</th>
                        <th>Resim Adı</th>
                        <th>Durumu</th>
                        <th>İşlem</th>
                    </thead>
                    <tbody>
                    <?php 
                        foreach($urunResmi as $resim)
                        {
                    ?>
                        <tr>
                            <td><?php echo $resim->id; ?></td>
                            <td>
                                <img width="30" src="<?php echo base_url("uploads"); ?>/urunler_v/<?php echo $resim->image_url; ?>" alt="" class="img-responsive">
                            </td>
                            <td><?php echo $resim->image_url; ?></td>
                            <td>
                                <input
                                    data-url="<?php echo base_url("product/isActiveSetter/"); ?>"
                                    class="isActive"
                                    type="checkbox"
                                    data-switchery
                                    data-color="#10c469"
                                    <?php echo ($resim->id) ? "checked" : ""; ?>
                                />
                            </td>
                            <td>
                                <a
                                    href="<?php echo base_url("urunler/image_delete/$resim->id/$resim->urun_id"); ?>"
                                    class="btn btn-sm btn-danger btn-outline remove-img-btn">
                                    <i class="fa fa-trash"></i> Sil
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>



