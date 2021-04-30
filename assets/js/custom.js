function ajax_newsletter_signup33383(){
                        
    jQuery.ajax({
        type: "POST",
        url: 'http://www.istanbulescortservice.com/',		
        dataType: 'json',
        data: {
            action: "newsletter_join",
            email: jQuery('#ppt_newsletter_mailme33383').val(),	 
        },
        success: function(r) {
            
            if(r.status == "ok"){
                jQuery('#newsletterthankyou33383').show();
                jQuery('#mailinglist-form33383').html('');
            }else{
                jQuery('#mailinglist-form33383').html("Invalid Email Address");
            }
            
        },
        error: function(e) {
            //console.log(e)
        }
    });

}






function IsEmailMailinglist33383(){
    var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
        var de4 	= document.getElementById("ppt_newsletter_mailme33383");
        
        if(de4.value == ''){
        alert("Please enter your email.");
        de4.style.border = 'thin solid red';
        de4.focus();
        return false;
        }
        if( !pattern.test( de4.value ) ) {	
        alert("Invalid Email Address");
        de4.style.border = 'thin solid blue';
        de4.focus();
        return false;
        }
        ajax_newsletter_signup33383();
     
          return false;
    }





    jQuery(document).ready(function(){ 
             
        var owl = jQuery("#listing3-carousel-7985 .owl-carousel").owlCarousel({
            loop: false,
            margin: 20,
            nav: false,
            dots: false,		
            responsive: {
                0: {
                    items: 2
                },
                 
                600: {
                    items: 2
                }, 
                
                1000: {
                    items: 4
                }
            },        
        }); 
        
        owl.owlCarousel();
        
        // REFRESH	
        setTimeout(function(){	
               owl.trigger('refresh.owl.carousel');
        }, 2000); 
     
      jQuery("#listing3-carousel-7985 .next").click(function(){
        owl.trigger('next.owl.carousel');
        owl.trigger('refresh.owl.carousel');
      })
      jQuery("#listing3-carousel-7985 .prev").click(function(){
        owl.trigger('prev.owl.carousel');
        owl.trigger('refresh.owl.carousel');
      })
        
        
    });
         
 

   
    /* =============================================================================
	FUNCTION TO SCROLL 1PX AND TRIGGER THE LAZY LOAD
========================================================================== */	 

function tinyScroll() {
    window.scrollBy(0, 1);
}

function TogglePass(id){

	if(jQuery('#'+id).prop('type') == "text"){	
		jQuery('#'+id).prop('type', 'password');	
	}else{	
		jQuery('#'+id).prop('type', 'text');	
	}
}
    
    jQuery(window).on('load',function () {
        
    setTimeout(
      function() 
      {
       
        jQuery("#wrapper").addClass('d-flex').removeClass('hidepage').addClass('preload-hide');
        
        jQuery('#page-loading').html('').hide();
         
        jQuery(".hidepage").each(function() {
          jQuery( this ).removeAttr("style").removeClass('hidepage').addClass('preload-hide');
        });
        
        
        jQuery(".gdpr-cookie-law").css("display", "block");
        
        tinyScroll();	
         
          // Trigger window resize event to fix resize size issues.
          // Don't use jquery trigger event since that only triggers
          // methods hooked to events, and not the events themselves.
          if ( typeof( Event ) === 'function' ) {
            window.dispatchEvent( new Event( 'resize' ) );
          } else {
            var event = window.document.createEvent( 'UIEvents' );
            event.initUIEvent( 'resize', true, false, window, 0 );
            window.dispatchEvent( event );
          }
          
          
    
      
       
      }, 1000);
    
    });
    


    jQuery(".menu-toggle").click(function(e) {
        e.preventDefault();
        jQuery("#wrapper").toggleClass("toggled");
      });