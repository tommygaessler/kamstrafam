$(document).ready(function(){

    ;(function($){
  
    /**
     * Store scroll position for and set it after reload
     *
     * @return {boolean} [loacalStorage is available]
     */
    $.fn.scrollPosReaload = function(){
        if (localStorage) {
            var posReader = localStorage["posStorage"];
            if (posReader) {
                $(window).scrollTop(posReader);
                localStorage.removeItem("posStorage");
            }
            $(this).click(function(e) {
                localStorage["posStorage"] = $(window).scrollTop();
            });

            return true;
        }

        return false;
    };
    
    /* ================================================== */

    // $(document).ready(function() {
    //     // Feel free to set it for any element who trigger the reload
    //     $('button.sc-payment-btn.stripe-button-el').scrollPosReaload();
    // });

    $(document).ready(function() {
        // Feel free to set it for any element who trigger the reload
        $('input#ninja_forms_field_4').scrollPosReaload();
    });
  
}(jQuery));

    if ($("body").hasClass("home")) 
    {
        var header = $('div.hero');
        var range = 200;

        $(window).on('scroll', function () {
          
            var scrollTop = $(this).scrollTop();
            var offset = header.offset().top;
            var height = header.outerHeight();
            offset = offset + height / 2;
            var calc = 1 - (scrollTop - offset + range) / range;
          
            header.css({ 'opacity': calc });
          
            if ( calc > '1' ) {
              header.css({ 'opacity': 1 });
            } else if ( calc < '0' ) {
              header.css({ 'opacity': 0 });
            }
        });
    }



    $('button.menu-toggle').click(function(event){

        $('span.genericon').toggleClass('toggled');
        
        $('ul#primary-menu.menu.nav-menu').toggleClass('toggled');
        $('ul#primary-menu.menu.nav-menu').slideToggle('slow');

        $('div#content.site-content').toggleClass('blur');

        $('div#mission').toggleClass('body-opacity');
        $('div#donate').toggleClass('body-opacity');
        $('div#contact').toggleClass('body-opacity');
        $('div#newsletter').toggleClass('body-opacity');

        
            $('a').click(function(event){
            
                $('ul#primary-menu.menu.nav-menu').css('display', 'none');

                // $('ul#primary-menu.menu.nav-menu').slideUp('slow');
                
                $('div#content.site-content').removeClass('blur');
                $('span.genericon').removeClass('toggled');
                $('div#mission').removeClass('body-opacity');
                $('div#donate').removeClass('body-opacity');
                $('div#contact').removeClass('body-opacity');
                $('div#newsletter').removeClass('body-opacity');
            });
            $('div#content.site-content').click(function(event){
                
                $('ul#primary-menu.menu.nav-menu').css('display', 'none');

                // $('ul#primary-menu.menu.nav-menu').slideUp('slow');
                
                $('div#content.site-content').removeClass('blur');
                $('span.genericon').removeClass('toggled');
                $('div#mission').removeClass('body-opacity');
                $('div#donate').removeClass('body-opacity');
                $('div#contact').removeClass('body-opacity');
                $('div#newsletter').removeClass('body-opacity');
            });
        

    });

    // $(window).resize(function() {
    //   if ($(window).width() > 800) {
        
    //   }
    //  else {
    //     console.log('less than 800');
    //  }
    // });



    // $('a').click(function(event){
        
    //     // $('ul#primary-menu.menu.nav-menu').css('display', 'none');

    //     $('ul#primary-menu.menu.nav-menu').slideUp('slow');
        
    //     $('div#content.site-content').removeClass('blur');
    //     $('span.genericon').removeClass('toggled');
    //     $('div#mission').removeClass('body-opacity');
    //     $('div#donate').removeClass('body-opacity');
    //     $('div#contact').removeClass('body-opacity');
    //     $('div#newsletter').removeClass('body-opacity');
    // });
    // $('div#content.site-content').click(function(event){
        
    //     // $('ul#primary-menu.menu.nav-menu').css('display', 'none');

    //     $('ul#primary-menu.menu.nav-menu').slideUp('slow');
        
    //     $('div#content.site-content').removeClass('blur');
    //     $('span.genericon').removeClass('toggled');
    //     $('div#mission').removeClass('body-opacity');
    //     $('div#donate').removeClass('body-opacity');
    //     $('div#contact').removeClass('body-opacity');
    //     $('div#newsletter').removeClass('body-opacity');
    // });
    
    //this is where we apply opacity to the arrow
    $(window).scroll( function(){

        //get scroll position
        var topWindow = $(window).scrollTop();
        //multipl by 1.5 so the arrow will become transparent half-way up the page
        var topWindow = topWindow * 1.5;
      
        //get height of window
        var windowHeight = $(window).height();
          
        //set position as percentage of how far the user has scrolled 
        var position = topWindow / windowHeight;
        //invert the percentage
        position = 1 - position;

        //define arrow opacity as based on how far up the page the user has scrolled
        //no scrolling = 1, half-way up the page = 0
        $('.arrow-wrap').css('opacity', position);
    });

    //Code stolen from css-tricks for smooth scrolling:
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({scrollTop: target.offset().top}, 1000);
            return false;
          }
        }
      });
    });

    // $("p.monthly").click(function(){

    //     $("div.single-content").addClass("display-none");
      
    //     $("div.monthly-content").removeClass("display-none");
      
    //     $("p.single").removeClass("border-bottom");

    //     $("p.monthly").addClass("border-bottom");
    // });
  
  
    // $("p.single").click(function(){

    //     $("div.monthly-content").addClass("display-none");
    
    //     $("div.single-content").removeClass("display-none");
    
    //     $("p.monthly").removeClass("border-bottom");

    //     $("p.single").addClass("border-bottom");
    // });

    $("input#es_txt_email_pg").attr("placeholder", "Email");

});