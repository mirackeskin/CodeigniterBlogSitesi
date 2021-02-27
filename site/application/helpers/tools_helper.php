<?php 

function  get_slider_image($urun_id)
{
    $t=&get_instance();

    $t->load->model("images_model");

    $imageWhereData=array(
        "urun_id"=>$urun_id
    );

    $image=$t->images_model->get($imageWhereData);

    return $image->image_url;

}

function get_group_image($urun_id)
{
    $t=&get_instance();

    $t->load->model("images_model");

    $imageConditionData=array(
        "urun_id"=>$urun_id
    );

    $image=$t->images_model->getImages($imageConditionData); print_r($image);

    return $image;
}

function get_category($kategori_id)
{
    $t=&get_instance();

    $t->load->model("kategori_model");

    $categoryConditionData=array(
        "kategoriler_id"=>$kategori_id
    );

    $kategori_adi=$t->kategori_model->get_category($categoryConditionData); 
    return $kategori_adi->kategori_adi;
}

function get_product_image($urun_id)
{
    $t=&get_instance();
    $t->load->model("images_model");

    $productImageConditionData=array(
        "urun_id"=>$urun_id
    );

    $product_image=$t->images_model->get_product_image($productImageConditionData);

    return $product_image->image_url;
    
}

function text_limit($text)
{
    $t=&get_instance();
    
    $text=substr($text,0,300); 
    return $text;
}





?>