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
  jQuery('a[href*=#]:not([href=#]).anchor').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {        
        var top;
        if(!detectmob()){
          top = target.offset().top - 95
        }else{
            top = target.offset().top -95
        }
        console.log(detectmob())
        console.log(top);
        jQuery('html,body').animate({          
          scrollTop:top
        }, 1000);
        return false;
      }
    }
  });
});