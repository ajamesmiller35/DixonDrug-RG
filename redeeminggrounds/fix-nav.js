   
    $(document).ready(function(){

        let navOffset = $('#nav-box').offset().top;
        let navHeight = $('#nav-box').height();
    
        $(window).scroll(function(){
            
            if($(window).scrollTop() >= navOffset){
                $('#nav-box').addClass('nav-box-scrolled');
                $('#top').css('display', 'block');
                $('#back-teal').addClass('hidden');
                $('#back-white').removeClass('hidden');
                $('.nav-li').addClass('nav-li-scrolled');
                $('.nav-push').css('height', navHeight);
            }
            else{
                $('#nav-box').removeClass('nav-box-scrolled');
                $('#top').css('display', 'none');
                $('#back-teal').removeClass('hidden');
                $('#back-white').addClass('hidden');
                $('.nav-li').removeClass('nav-li-scrolled');
                $('.nav-push').css('height', '0');
            }
        });
                
      });
    