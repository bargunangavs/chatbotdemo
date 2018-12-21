 (function($) {
 	$(document).on('click', '.loadmore', function (e) {
        e.preventDefault();
        var $el = $(this),
            link = $el.attr('href');
        if ($el.attr('disabled'))
            return;
        $el.addClass('loading').attr('disabled', true);
        $el.find('span').html('Loading...')
        $("<div>").load(link + " #loadmorecontainer", function () {
            $("#loadmorecontainer").append($(this).find("#loadmorecontainer").html());
            $el.parents('.load-more').removeAttr('disabled').remove();
        });
    });
    $(document).on('click', '.nav-toggle', function(e){
	    $(this).toggleClass('open');
	    $('html').toggleClass('nav-open');
	});
    $('.testimonials-carousel').slick({
	    infinite: false,
	    dots: true,
	    arrows: false,
	    slidesToShow: 1,
	    slidesToScroll: 1,
	});
	$('.video-popup').magnificPopup({
    type: 'iframe',
    iframe: {
          markup: '<div class="mfp-iframe-scaler">'+
                  '<div class="mfp-close"></div>'+
                  '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                  '</div>', 
          patterns: {
              youtube: {
                  index: 'youtube.com/', 
                  id: 'v=', 
                  src: '//www.youtube.com/embed/%id%?autoplay=1' 
              }
           },
           srcAction: 'iframe_src', 
       },
    callbacks: {
        open: function(el) {
          $('html').addClass('mfp-cs-open');
        },
    }
  });
  $('.animate-it').addClass("animate-hidden").viewportChecker({
      classToAdd: 'animate-visible animated fadeInUp', // Class to add to the elements when they are visible
      offset: 100    
  });
  $(window).on('scroll', function(e){
    var Bheight = $('.banner').outerHeight(),
        Hheight = $('.site-header').outerHeight(),
        HheightF = Hheight + 50;
        $pos = $(this).scrollTop();

    if($pos >= Hheight){
        $('.site-header').addClass('floating-hide');
    }else{
        $('.site-header').removeClass('floating-hide');
    }
    if($pos >= HheightF){
        $('.site-header').addClass('floating-fix');
    }else{
        $('.site-header').removeClass('floating-fix');
    }
    if($pos >= Bheight){
      $('.site-header').addClass('floating');
    }else{
      $('.site-header').removeClass('floating');
    }
  });
  $(document).on("gform_confirmation_loaded", function (e, form_id) {
    if(form_id==1){

     var link = document.getElementById('download-anchor');
     link.click();
    }
    if(form_id==2){
      
        var link = document.getElementById('download-campaign');
        if(link){
          link.click();
      }
    }
     
  });

})(jQuery);