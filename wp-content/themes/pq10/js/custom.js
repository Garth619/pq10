// @codekit-prepend 'waypoints.js'
// @codekit-prepend 'slick.js'
// @codekit-prepend 'lity.js'
// @codekit-prepend 'modernizr-webp.js'
// @codekit-prepend 'underscore.js'
// @codekit-prepend 'lazysizes.js'



jQuery(document).ready(function($){
	
	
	$('body').addClass('ready');

     /* Wistia - Call function when script needs to be loaded either by hover or waypoints
     --------------------------------------------------------------------------------------- */

    
    
     // loads wistia on click to improve initial page speed
    $('.wistia_embed').click(function () {
        //make sure to only load if Wistia is not already loaded
        let self = this
        if (typeof Wistia === 'undefined') {
            jQuery.getScript("https://fast.wistia.com/assets/external/E-v1.js", function (data, textStatus, jqxhr) {
                // We got the text but, it's possible parsing could take some time on slower devices. Unfortunately, js parsing does not have
                // a hook we can listen for. So we need to set an interval to check when it's ready 
                var interval = setInterval(function () {
                    if (jQuery(self).attr('id') && window._wq) {
                        var videoId = jQuery(self).attr('id').split('-')[1];
                        window._wq = window._wq || [];
                        _wq.push({
                            id: videoId,
                            onReady: function (video) {
                                jQuery(self).find('.wistia_click_to_play').eq(0).trigger('click');
                            }
                        });
                        clearInterval(interval);
                    }
                }, 100)
            });
        }
    });

   
    
    
    
    
    



    /* Smooth Scroll down to section on click (<a href="#id_of_section_to_be_scrolled_to">)
      --------------------------------------------------------------------------------------- */

    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

		
		
		/* Waypoints
     --------------------------------------------------------------------------------------- */


    function createWaypoint(triggerElementId, animatedElement, className, offsetVal, functionName, reverse) {
      if(jQuery('#' + triggerElementId).length) {
        var waypoint = new Waypoint({
          element: document.getElementById(triggerElementId),
          handler: function (direction) {
            if (direction === 'down') {
              jQuery(animatedElement).addClass(className);

              if (typeof functionName === 'function') {
                functionName();
                this.destroy();
              }

            } else if (direction === 'up') {
              if (reverse) {
                jQuery(animatedElement).removeClass(className);
              }

            }
          },
          offset: offsetVal
          // Integer or percent
          // 500 means when element is 500px from the top of the page, the event triggers
          // 50% means when element is 50% from the top of the page, the event triggers
        });
      }
    }
		
	// createWaypoint('fixed_header', 'header.double_bar', 'visible', 0, null, true);

		
	// createWaypoint('section_three', '#section_three', 'visible', 550, null, true);
  //   createWaypoint('sec_three_left_trigger', '#sec_three_left_trigger', 'visible', 700, null, true);
  //   createWaypoint('section_four', '#section_four', 'visible', 400, null, true);
  //   createWaypoint('section_six', '#section_six', 'visible', 400, null, true);
   





        
    



/* Slick Carousel ( http://kenwheeler.github.io/slick/ )
--------------------------------------------------------------------------------------- */



$('#sec_two_slider').slick({
  infinite: true,
  slidesToShow: 1,
	slidesToScroll: 1,
	mobileFirst:true,
	adaptiveHeight:true,
	arrows:false,
	dots:true,
	responsive: [
    {
      breakpoint: 768,
      settings: {
      slidesToShow: 2,
			slidesToScroll: 2,
			dots:false,
			adaptiveHeight:false,
			arrows:true,
			prevArrow:"#sec_two_arrow_left",
			nextArrow:"#sec_two_arrow_right",
     }
   },
   {
      breakpoint: 1170,
      settings: "unslick"
   }
	]
 });



 $('#sec_four_slider').slick({
  infinite: true,
  slidesToShow: 1,
	slidesToScroll: 1,
	mobileFirst:true,
	adaptiveHeight:true,
	arrows:false,
	dots:true,
	responsive: [
    {
      breakpoint: 675,
      settings: {
      slidesToShow: 2,
			slidesToScroll: 2,
			dots:true,
			adaptiveHeight:false,
     }
   },
   {
      breakpoint: 1066,
      settings: "unslick"
   }
	]
 });



 $('#sec_five_slider').slick({
  infinite: true,
  slidesToShow: 1,
	slidesToScroll: 1,
	mobileFirst:true,
	arrows:true,
	dots:false,
	prevArrow:"#sec_five_arrow_left",
	nextArrow:"#sec_five_arrow_right",
	responsive: [
    {
      breakpoint: 530,
      settings: {
      slidesToShow: 2,
			slidesToScroll: 2
     }
	 },
	 {
		breakpoint: 767,
		settings: {
		slidesToShow: 3,
		slidesToScroll: 3
	 }
 },
 {
	breakpoint: 1020,
	settings: {
	slidesToShow: 4,
	slidesToScroll: 4
 }
},
   {
      breakpoint: 1170,
      settings: "unslick"
   }
	]
 });
 




	

	
	
	

/* Remove "#" from menu anchor items to avoid jump to the top of the page
--------------------------------------------------------------------------------------- */


$("ul > li.menu-item-has-children > a[href='#']").removeAttr("href");


// not found go back button



function goBack() {
 	window.history.back();
}
	
$('span.go_back').on('click', function(e) {
	
	 goBack();
  
});



//  sidebar current class


// add active to blog widgets that dont show a built in current class

// var pgurl = window.location.href;
	
// 	$(".sidebar_box ul li").each(function(){
  
//   if($(this).find('a').attr("href") == pgurl)
    
//     $(this).addClass("active");
	
// 	})



// $('.sidebar_box ul.menu > li.menu-item-has-children > a').on('click', function(e) {
  
//   $(this).next('ul.sub-menu').slideToggle(300);
  
//   $(this).toggleClass('active');
  
// });


// resize - tablet and desktop top navigatons behave differently. These turn off click functions at certain window widths without reloading the page


// nav	

	$('nav ul.menu > li.current-menu-ancestor > a').addClass('active');

	$('.menu_wrapper').on('click', function(e) {
	  
	  $('.menu_bars').toggleClass('close');
	  
	  $('.menu_close').toggleClass('close');
	  
	  $('header nav').slideToggle(400);
	  
	});

	
	function navDesktop() {
		
		$('header nav').addClass('nav_desktop');
		
		$('header nav li.menu-item-has-children > a').next('ul.sub-menu').removeClass('open');
		
		$('header nav').removeClass('nav_tablet');
		
	}
	
	
	function navTablet() {
		
		$('header nav').removeClass('nav_desktop');
		
		$('header nav').addClass('nav_tablet');
		
	}
	
	
	function tabletClick() {
		
		$(this).next('ul.sub-menu').slideToggle(300);
		
		$(this).toggleClass('active');
		
	}
	
	
	// nav
	
	
	if ($(window).width() > 1170) {
			
		navDesktop();
		
	}	
	
	
	if ($(window).width() <= 1170) {
			
		navTablet();
		
		$('header nav li.menu-item-has-children > a').off().on('click', tabletClick);
				
	}
	
	
	// resize window width and fire functions
	
	
	$(window).resize(_.debounce(function() {
		
		if ($(window).width() > 1170) {
			
			navDesktop();
			
			// off
			
			$('header nav li.menu-item-has-children > a').off('click', tabletClick);			
		
		}	
		
		if ($(window).width() <= 1170) {
			
			navTablet();
			
			// off
			
			$('header nav li.menu-item-has-children > a').off().on('click', tabletClick);
					
		}
		
	}, 100)); 
	
	
	
	
	
	// case results - need to wrap single case results intp different sets depending on window width without reloading the page so they can get the alternate styling bgs in css 
	
	
	
	
	var rowCount;
	
	function rowWrap(rowCount) {
		
		var divs = $(".single_cr");
	
		for(var i = 0; i < divs.length; i+=rowCount) {
  	
  		divs.slice(i, i+rowCount).wrapAll("<div class='cr_row cr_row_"+rowCount+"'><div class='cr_inner_row'></div></div>");
		
		}
		
	}
	
	// unwraps an exsisting row function to reset
	
	function unwrapRow() {
		
		$(".single_cr").unwrap('.cr_inner_row');
		$(".single_cr").unwrap('.cr_row');
		
	}
	
	
	// page load windiw widths
	
	var resizeRow = $(window).width();
	
	
	if (resizeRow > 1160) {
		
		if(!$('.cr_row_3').length > 0 ){
			
			rowWrap(3); // number of single case results to wrap into rows
		}
			
	}
	
	
	if (resizeRow <= 1160) {
		
		if(!$('.cr_row_2').length > 0 ){
		
		rowWrap(2); // number of single case results to wrap into rows
		
		}
		
	}
	
	// window resize
	
	$(window).resize(_.debounce(function() {
		
		var resizeRow = $(window).width();
		
		if (resizeRow > 1160) {
			
			if($('.cr_row_2').length > 0 ){
				
				unwrapRow();
				
			}
			
			if(!$('.cr_row_3').length > 0 ){
			
				rowWrap(3); //  number of single case results to wrap into rows
			
			}
		
		}
	
	
		if (resizeRow <= 1160) {
			
			if($('.cr_row_3').length > 0 ){
				
				unwrapRow();
				
			}
			
			if(!$('.cr_row_2').length > 0 ){
		
				rowWrap(2); //  number of single case results to wrap into rows
		
			}
		
		}

	}, 100)); // timeouts functions
	
	
	// contact mobile locations
	
	
	
	$('.locations_select').on('click', function(e) {
		  
			$(this).next('.selection_dropdown').slideToggle(250);
		
		});
		
		
		$('.selection_dropdown ul li').on('click', function(e) {
	  
			var caseresultstext = $(this).text();
			
			$(this).closest('.selection_dropdown').prev('.locations_select').find('span').replaceWith('<span>'+caseresultstext+'<span>');
		
			$('.selection_dropdown').slideUp(250);
		
		});
		

		$(document).click(function (e){
	
			var container = $(".locations_select_wrapper");
	
			if (!container.is(e.target) && container.has(e.target).length === 0){
	
				$('.selection_dropdown').slideUp(250);
			
			}
	
		}); 

		

		var currentValue = window.location.hash.substr(1);
		
		if(currentValue === ''){
			
		} else { 
			
			$('.single_mobile_location').hide();
	    
	    $('.'+currentValue).show();
	    
	    var str = currentValue;
			
			str = str.replace(/-/g, ' ');
	    
	    $('.selection_dropdown').prev('.locations_select').find('span').replaceWith('<span>' +str+ '</span>');
			
		}




	function getHeight() {
			
			var currentHeight = $('.dynamic_height_wrapper').height();
	    
			$('.dynamic_height_wrapper').css('min-height', currentHeight+'px');
			
		}
		
		getHeight();
		
		
		$(window).resize(_.debounce(function() {
			
			var newHeight = $('.mobile_locations').height();
				
			$('.dynamic_height_wrapper').css('min-height', newHeight+'px');
	
	
			
		}, 300)); 



	
	$('.selection_dropdown ul li').on('click', function(e) {
			
			// when you click on the dropdown list get the data-filter info
	        
	  	var dataFilter = $(this).data('filter');
	  	
	  	// this fades all case results away
			
			$('.single_mobile_location').fadeOut(300);
			
			
			// this gets the new height of the inner parent div and applies it to the outer parent div to update after fadein has completed
			
	
			function fadeComplete() {
				
				var newHeight = $('.mobile_locations').height();
				
				$('.dynamic_height_wrapper').animate({'min-height':newHeight+'px'}, 500);
	
	
			}
	
			// this fades in just the case results that have the same class as the same data-filter, and then fiores the height function up above
			
			$('.'+dataFilter).delay(600).fadeIn(400, fadeComplete);
			
			
			// this adds that data-filter to the url at the top. 
	    
	    window.location.hash = '#'+dataFilter+'';
	    
	   });
	
	

  
}); // document ready


