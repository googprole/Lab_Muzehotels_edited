
jQuery(document).ready(function (jQuery){
  jQuery("#to-carousel").owlCarousel({
       navigation: false,
       slideSpeed: 2000,
       autoPlay: true,
       paginationSpeed: 400,
       items: 3,
   });
  jQuery("#home-carousel").owlCarousel({
       navigation: false,
       slideSpeed: 2000,
       autoPlay: true,
       paginationSpeed: 400,
       items: 1,
       pagination:false,
   });
   jQuery("#about-carousel").owlCarousel({
       navigation: false,
       slideSpeed: 2000,
       autoPlay: true,
       paginationSpeed: 400,
       items: 1,
       pagination:true,
   });
  jQuery("#stay-carousel").owlCarousel({
       navigation: false,
       slideSpeed: 2000,
       autoPlay: false,
       paginationSpeed: 400,
       items: 1,
       pagination:true,
   });
  jQuery("#dine-carousel").owlCarousel({
       navigation: false,
       slideSpeed: 2000,
       autoPlay: false,
       paginationSpeed: 400,
       items: 1,
       pagination:true,
   });
  jQuery("#relax-carousel").owlCarousel({
       navigation: false,
       slideSpeed: 2000,
       autoPlay: false,
       paginationSpeed: 400,
       items: 1,
       pagination:true,
   });
  
  jQuery("#album-carousel").owlCarousel({
       navigation: false,
       slideSpeed: 2000,
       autoPlay: true,
       paginationSpeed: 400,
       items: 3,
       pagination:true,
   });

  
  /* ---------------------------------------------------
  Lightbox
-------------------------------------------------- */


if (jQuery().magnificPopup) {
  jQuery('[data-lightbox=image], .lightbox').each(function(index, element) {
    jQuery(this).magnificPopup({
      type:'image',
      mainClass: 'mfp-fade',
      fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
      removalDelay: 300,
      closeOnContentClick: true,
      
    });   
  });
  
  jQuery('[data-lightbox=video], [data-lightbox=map], [data-lightbox=iframe], .lightbox-video, .lightbox-map, .lightbox-iframe').each(function(index, element) {
    jQuery(this).magnificPopup({
      mainClass: 'mfp-fade',
      removalDelay: 300,
      fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'scroll',
            overflowX: 'scroll',
        type: 'iframe',
        fixedContentPos: false
    });
  });
  
  jQuery('[data-lightbox=gallery], .lightbox-gallery').each(function(index, element) {
    jQuery(this).magnificPopup({
      mainClass: 'mfp-fade',
      removalDelay: 300,
      fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
        type: 'image',
        delegate: 'a',
      gallery: {
        enabled: true
      }
    });
  });
  
  
};

});
jQuery('a[href="#dn-ha"]').tab('show') // Select tab by name
function ytVidId(url) {
 var p = /^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?jQuery/;
 return (url.match(p)) ? RegExp.jQuery1 : false;
}

var youtubeUrl = "https://www.youtube.com/watch?v=0LVzTaTTmVU"
var videoId = ytVidId(youtubeUrl);
// Load the IFrame Player API code asynchronously.
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// Replace the 'ytplayer' element with an <iframe> and
// YouTube player after the API code downloads.
var player;
function onYouTubePlayerAPIReady() {
 player = new YT.Player('video-player', {
   height: '100%',
   width: '100%',
   videoId: videoId,
   playerVars: {
     enablejsapi: 1,
     controls: 0,
     autoplay: 0,
     loop: 1,
     playlist: videoId,
     modestbranding: 1,
     rel: 0,
     showinfo: 0,
   },
   events: {
     //'onReady': onPlayerReady,
   }
 });
}

// jQuery('.carousel-box .carousel').each(function () {
//   var carousel = jQuery(this).closest('.carousel-box');

//   jQuery(this).owlCarousel({
//     //direction		 :'rtl', //use if your site is RTL
//     autoPlay: jQuery(this).data('carousel-autoplay'),
//     items: jQuery(this).data('carousel-items'),
//     navigation: jQuery(this).data('carousel-nav'),
//     pagination: jQuery(this).data('carousel-pagination'),
//     //singleItem: jQuery(this).data('carousel-single'),
//     //transitionStyle: jQuery(this).data('carousel-transition'),
//     slideSpeed: jQuery(this).data('carousel-speed'),
//     navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
//     //lazyLoad : true,
//     autoHeight: false,
//     loop: true,
//     //infiniteLoop:false,
//     //rewind: true,
//   })
// });

jQuery(document).ready(function (jQuery) {
  var windowheight = jQuery(window).height();
  jQuery(".bannertop-slide").height(windowheight);

  jQuery(".play-button").click(function () {
   jQuery(".video-wrapper").css({ "opacity": "1", "z-index": "0" });
   player.playVideo();
   jQuery(this).hide();
   jQuery(".close-video").show();
  });

  jQuery(".close-video").click(function () {
   player.stopVideo();
   jQuery(".video-wrapper").css({ "opacity": "0", "z-index": "-1" });
   jQuery(this).hide();
   jQuery(".play-button").show();
  });

  jQuery("#watch-video").click(function (e) {
   e.preventDefault();
   jQuery('html, body').animate({
     scrollTop: jQuery(jQuery.attr(this, 'href')).offset().top
   }, 1000);
   jQuery(".video-wrapper").css({ "opacity": "1", "z-index": "0" });
   player.playVideo();
   jQuery(".play-button").hide();
   jQuery(".close-video").show();
  });

  jQuery('.map  iframe').css("pointer-events", 'none');
  jQuery('.map').click(function () {
    jQuery('.map  iframe').css("pointer-events", 'auto');
  }).mouseleave(function (e) {
    jQuery('.map  iframe').css("pointer-events", 'none');
  });

  /* ---------------------------------------------------
Sticky Bar
-------------------------------------------------- */

  jQuery(function () {

    jQuery("#header").stickOnScroll({
      topOffset: 0,
      setParentOnStick: true
    });

    var shrinkHeader = 300;
    jQuery(window).scroll(function () {
      var scroll = getCurrentScroll();
      if (scroll >= shrinkHeader) {
        jQuery('#header').addClass('shrink');
      }
      else {
        jQuery('#header').removeClass('shrink');
      }
    });
    function getCurrentScroll() {
      return window.pageYOffset || document.documentElement.scrollTop;
    }

  });



  //  jQuery(window).scroll(function() {

  //   if(jQuery(document).scrollTop() > (jQuery("#video-2").offset().top - 100)){
  //     jQuery(".video-wrapper").css({"opacity": "1", "z-index": "0"});
  //     player.playVideo();
  //     jQuery(".play-button").hide();
  //     jQuery(".close-video").show();
  //  }
  //  if(jQuery(document).scrollTop() > (jQuery("#video-2").offset().top + jQuery("#video-2").height())){
  //     player.stopVideo();
  //     jQuery(".video-wrapper").css({"opacity": "0", "z-index": "-1"});
  //  }
  // });

  //  jQuery(window).scroll(function() {

  //   if(jQuery(document).scrollTop() > (jQuery("#video").offset().top - 100)){
  //     jQuery(".video-wrapper").css({"opacity": "1", "z-index": "0"});
  //     player.playVideo();
  //     jQuery(".play-button").hide();
  //     jQuery(".close-video").show();
  //  }
  //  if(jQuery(document).scrollTop() > (jQuery("#video").offset().top + jQuery("#video").height())){
  //     player.stopVideo();
  //     jQuery(".video-wrapper").css({"opacity": "0", "z-index": "-1"});
  //  }
  // });
});


// jQuery(document).ready(function (e) {
//         jQuery('.content-left').css("padding-left", jQuery('.logo').offset().left - jQuery('.post-item').offset().left -15);
//         jQuery('.content-right').css("padding-right",jQuery('.content-left').css("padding-left"));
//     });
//     jQuery(window).resize(function () {
//         jQuery('.content-left').css("padding-left", jQuery('.logo').offset().left - jQuery('.post-item').offset().left -15);
//         jQuery('.content-right').css("padding-right",jQuery('.content-left').css("padding-left"));
//     });





// Equal Height Columns
  function handleEqualHeightColumns() {
    var EqualHeightColumns = function () {
      jQuery('.equal-height-columns').each(function() {
        heights = [];
        jQuery('.equal-height-column', this).each(function() {
          jQuery(this).removeAttr('style');
          heights.push(jQuery(this).height()); // Write column's heights to the array
        });
        jQuery('.equal-height-column', this).height(Math.max.apply(Math, heights)); // Find and set max
      });
    }

    EqualHeightColumns();
    jQuery(window).resize(function() {
      EqualHeightColumns();
    });
    jQuery(window).load(function() {
      EqualHeightColumns('img.equal-height-column');
    });
  }
