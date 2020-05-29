var Controller = {
    getController: function () {
        if ($('body').attr('data-controller')) {
            eval('Controller.' + $('body').attr('data-controller') + '();');
        }
    },
    global: function () {
        $(window).scroll(function() {
            if(window.scrollY > 0) {
                $('header').addClass('sticky');
            } else {
                $('header').removeClass('sticky');
            }           
        });  
    },   
    home: function () {
      if($('.galeria').length) {
        var $featured;

        $( ".galeria nav ul" ).children().each(function( index ) {
            if(index === 1) {
                $featured = $(this).children()[0].attributes[1].value.split('url')[1].replace(/\(|\)/g,'');
            }

            $( this ).children('a').click(function() {
                $featured = $(this)[0].attributes[1].value.split('url')[1].replace(/\(|\)/g,'');

                $('.featured').find('img').attr('src', $featured)
                .parent().attr('data-lightbox', $featured).attr('href', $featured);
            });             
        }), $('.galeria .featured').append('<a href="'+$featured+'" data-lightbox="'+$featured+'"><img src="'+$featured+'" width="100%" /></a>');
      }
    }      
};

$(document).ready(function (){
    Controller.getController(); 
    Controller.global();    
});
      
      