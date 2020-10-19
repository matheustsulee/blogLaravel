$(document).ready(function(){

  // $('.slide-equipe').randomize();;


    $('.slide-videos').owlCarousel({
      loop: false,
      rewind: false,
      margin: 20,
      nav: true,
      navText: [
          '<i class="fas fa-chevron-left"></i>',
          '<i class="fas fa-chevron-right"></i>'
      ],
      dots: false,
      autoplay: false,
      smartSpeed: 700,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      items: 3, 
      responsive: {
          0: {
              items: 2,
          },
          1200: {
              items: 3
          }
      }
    });
  
})  


// $(window).scroll(function(){
//     let scroll = $(window).scrollTop();
//       if(scroll> 700){
//         $('.menu').css('visibility','visible');
//         $('.menu').css('opacity','1');
        
//       }else{
//         $('.menu').css('visibility','hidden');
//         $('.menu').css('opacity','0');
//       }
//   })


  new MenuChef('.menu-chef a', {
    theme: {
      theme: 'side', 
      pageEffect: 'blur',
      effectOnOpen: 'smooth'  
    }
  })


  function openModal(url){
    // var img = $('a[data-id="'+id+'"] img').attr('src');
    // var titulo = $('a[data-id="'+id+'"] h4').text();
    // var texto = $('a[data-id="'+id+'"] p').text();

    console.log(url);


    $('#modal-informativo iframe').attr('src','https://www.youtube.com/embed/'+url);
    // $('#modalEquipe h4').text(titulo);
    // $('#modalEquipe p').text(texto);

    // $('#openModal').click();

    $('#modal-informativo').modal();


}