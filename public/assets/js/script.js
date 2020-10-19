  $(document).ready(function(){
        
       $('#data_hora').attr('disabled', 'disabled');

       $('#agendar').click(function() {
       if($("#agendar").is(':checked')){
         $('#data_hora').removeAttr('disabled');         
      } else {
        $('#data_hora').val('');
          $('#data_hora').attr('disabled', 'disabled');
      }
    });       
        $('#imagem').change(function(){
          const file = $(this)[0].files[0]
          const fileReader = new FileReader()
        
            fileReader.onload = function(){
            Swal.fire({
              imageUrl: fileReader.result,  
            title: 'Esta é a imagem?',
            showDenyButton: true,
            confirmButtonText: `OK`,
            denyButtonText: `Não é esta imagem`,
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isDenied) {
              $("#imagem").val("")
            }
          })
              
        }
            fileReader.readAsDataURL(file)
           
        })

       

        $("#select_anuncio").change(function(){
          let id = $(this).val()
          //alert("#"+id)
          $("#"+id).toggleClass(function(){
            
          })
        })

        $(function(){
          $(".subtit").each(function(i){
              let len=$(this).text().length;
              console.log(len)
              if(len>10)
              {
                  $(this).text($(this).text().substr(0,100)+'...');
              }
              }); 
/*
                $(".titulo-destaque").each(function(i){
              let len=$(this).text().length;
              console.log(len)
              if(len>10)
              {
                  $(this).text($(this).text().substr(0,55)+'...');
              }
              });   */

      });
   })

 