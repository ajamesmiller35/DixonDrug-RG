   
    $(document).ready(function(){
        
        var height = $("#rg-banner").height() + 15;

        var pushNav = $('#nav-height').height() + 30;

        console.log('top height: ' + height);
    
        $(window).scroll(function(){
            if ($(window).scrollTop() >= height) {
                $('nav').addClass('nav-scrolled');
                $('#rg-banner').addClass('rg-banner-scrolled');
                $('#fixed-nav').removeClass('nav-chalkboard');
                $('#chalkboard-main').removeClass('chalkboard');
                $('.push-nav').css('height', pushNav);
                $('#message-box').css('display', 'none');
               
            }
            else {
                $('nav').removeClass('nav-scrolled');
                $('#fixed-nav').addClass('nav-chalkboard');
                $('#chalkboard-main').addClass('chalkboard');
                $('#rg-banner').removeClass('rg-banner-scrolled');
                $('.push-nav').css('height', '0px');
                $('#message-box').css('display', 'block');
            }
        });
                
      });
    