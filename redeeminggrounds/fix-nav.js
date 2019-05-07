   
    $(document).ready(function(){
        
        var height = $("#rg-banner").height() + 15;
    
        $(window).scroll(function(){
            if ($(window).scrollTop() >= height) {
                $('nav').addClass('nav-scrolled');
                $('#fixed-nav').removeClass('nav-chalkboard');
                $('#chalkboard-main').removeClass('chalkboard');
               
            }
            else {
                $('nav').removeClass('nav-scrolled');
                $('#fixed-nav').addClass('nav-chalkboard');
                $('#chalkboard-main').addClass('chalkboard');
            }
        });
                
      });
    