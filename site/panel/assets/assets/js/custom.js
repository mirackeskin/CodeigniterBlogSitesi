$(document).ready(function(){
  /*
    $(".remove-btn").click(function(e){

        var $data_url=$(this).attr("data-url");

        swal({
            title: 'Emin misiniz?',
            text: "Bu işlemi geri alamayacaksınız!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet, sil!'
          }).then((result) => {
            if (result.value) {
              window.location.href=$data_url;
            }
          })

        
    })//<<<<<*/

    $(".isActive").change(function(e){

      var $data=$(this).prop("checked");
      console.log($data);
      var $data_url=$(this).attr("data-url");
      console.log($data_url);

      if(typeof $data!="undefined" && typeof $data_url!="undefined")
      {
        $.post($data_url,{data:$data},function(response){
          
        });
      }else{

      }

      

    })//<<<<<

    $(".sortable").sortable();
    /*
    $(".remove-img-btn").click(function(){
      console.log("metoda girdi");
      var img_data_url=$(this).attr("data-url");
      
      swal({
        title: 'Emin misiniz?',
        text: "Bu işlemi geri alamayacaksınız!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Evet, sil!'
      }).then((result) => {
        if (result.value) {
          window.location.href=img_data_url;
        }
      })
      
    });*/

})//Burası en dış parantez

