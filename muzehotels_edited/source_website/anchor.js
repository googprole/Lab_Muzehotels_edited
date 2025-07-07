function detectmob() { 

 if( navigator.userAgent.match(/Android/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 || navigator.userAgent.match(/Windows Phone/i)
 ){
    return true;
  }
 else {
    return false;
  }
}


jQuery(function() {
  jQuery('a[href*=#]:not([href=#]).menu-link').click(function() {   
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {        
        if(!detectmob()){
          top1 = target.offset().top1 -10
        }else{
            top1 = target.offset().top1 -10
            
        }

        jQuery('html,body').animate({          
          scrolltop1:top1
        }, 1000);
        return false;
      }
    }
  });
});