jQuery(document).ready(function(){
  jQuery('.reviews-slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: true,
    prevArrow: "<button type='button' class='slick-prev'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow: "<button type='button' class='slick-next'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
});
});

jQuery(document).ready(function(){
  jQuery('.related-slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: true,
    prevArrow: "<button type='button' class='slick-prev'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow: "<button type='button' class='slick-next'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
  });
});


jQuery(function($){
  if ($('.blog-list').length > 0 ) {
  $(window).scroll(function(){
    var bottomOffset = 2000; // отступ от нижней границы сайта, до которого должен доскроллить пользователь, чтобы подгрузились новые посты
    var data = {
      'action': 'loadmore',
      'query': true_posts,
      'page' : current_page
    };
    if( $(document).scrollTop() > ($(document).height() - bottomOffset) && !$('body').hasClass('loading')){
      $.ajax({
        url:ajaxurl,
        data:data,
        type:'POST',
        beforeSend: function( xhr){
          $('body').addClass('loading');
        },
        success:function(data){
          if( data ) {
            $('#true_loadmore').before(data);
            $('body').removeClass('loading');
            current_page++;
          }
        }
      });
    }
  });
}});

jQuery(document).ready(function() {
jQuery('.menu-trigger').click(function() {
  jQuery('.custom-menu-class').slideToggle();
});
});