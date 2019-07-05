(function($) {
    "use strict";
	$(document).click(function (e) {
	    e.stopPropagation();
	    var container = $(".client-tax");
	    if (container.has(e.target).length === 0) {
	        $('.list1').hide("slow");
	    }
	});

	$(document).click(function (e) {
	    e.stopPropagation();
	    var container = $(".wealth-manager");
	    if (container.has(e.target).length === 0) {
	        $('.list2').hide("slow");
	    }
	});
	$(document).click(function (e) {
	    e.stopPropagation();
	    var container = $(".client-tax-domicile");
	    if (container.has(e.target).length === 0) {
	        $('.list3').hide("slow");
	    }
	});
	$(document).click(function (e) {
	    e.stopPropagation();
	    var container = $(".network");
	    if (container.has(e.target).length === 0) {
	        $('.list4').hide("slow");
	    }
	});
	$(document).click(function (e) {
	    e.stopPropagation();
	    var container = $(".client-tax-domicile");
	    if (container.has(e.target).length === 0) {
	        $('.list5').hide("slow");
	    }
	});
	$(document).click(function (e) {
	    e.stopPropagation();
	    var container = $(".network");
	    if (container.has(e.target).length === 0) {
	        $('.list6').hide("slow");
	    }
	});
	$(document).click(function (e) {
	    e.stopPropagation();
	    var container = $(".canton");
	    if (container.has(e.target).length === 0) {
	        $('.list7').hide("slow");
	    }
	});
	$(document).click(function (e) {
	    e.stopPropagation();
	    var container = $(".available-tax-domiciles");
	    if (container.has(e.target).length === 0) {
	        $('.list8').hide("slow");
	    }
	});
	$(document).click(function (e) {
	    e.stopPropagation();
	    var container = $(".choose-location");
	    if (container.has(e.target).length === 0) {
	        $('.list9').hide("slow");
	    }
	});

	$(document).click(function (e) {
	    e.stopPropagation();
	    var container = $(".sort-search");
	    if (container.has(e.target).length === 0) {
	        $('.list10').hide("slow");
	    }
	});

	$('.user-profile-name').on('click', function(e){
		$(this).parent().toggleClass('open');
		$(this).parent().siblings().removeClass('open');
	});

	$(document).on('mouseup', function(e){
		var eleNotFound = false;
		if($(e.target).attr("class") !== "user-profile-name") 
		{
	      	eleNotFound = true;
	     	$(".user-dropdown-menu").each(function(){
	       	$(this).parent().removeClass('open');
	    });       
	}
	if(eleNotFound)
	   e.preventDefault();
	});	
  
    // drop-down client 

    var list = $('.list1');
  	var link = $('.link1');
  	link.click(function(e) {
	    e.preventDefault();
	    list.slideToggle(200);
	  });
  	list.find('li').click(function() {
	    var text = $(this).html();
	    var icon = '<span id="clear-selected" onclick="clearSelected()"><i class="fa fa-times" aria-hidden="true"></i><span>';
	    link.html(text);
	    list.slideToggle(200);
	});

	//dropdown wealth manager

	var listi = $('.list2');
  	var linki = $('.link2');
  	linki.click(function(e) {
	    e.preventDefault();
	    listi.slideToggle(200);
	  });
  	listi.find('li').click(function() {
	    var text = $(this).html();
	    var icon = '<i class="fa fa-times" aria-hidden="true"></i>';
	    linki.html(text);
	    listi.slideToggle(200);
	});

	//dropdown client tax domicile

	var listj = $('.list3');
  	var linkj = $('.link3');
  	linkj.click(function(e) {
	    e.preventDefault();
	    listj.slideToggle(200);
	  });
  	listj.find('li').click(function() {
	    var text = $(this).html();
	    var icon = '<i class="fa fa-times" aria-hidden="true"></i>';
	    linkj.html(text);
	    listj.slideToggle(200);
	});

	//dropdown social network silver

	var listk = $('.list4');
  	var linkk = $('.link4');
  	linkk.click(function(e) {
	    e.preventDefault();
	    listk.slideToggle(200);
	  });
  	listk.find('li').click(function() {
	    var text = $(this).html();
	    var icon = '<i class="fa fa-times" aria-hidden="true"></i>';
	    linkk.html(text);
	    listk.slideToggle(200);
	});
	//dropdown social network gold

	var listl = $('.list5');
  	var linkl = $('.link5');
  	linkl.click(function(e) {
	    e.preventDefault();
	    listl.slideToggle(200);
	  });
  	listl.find('li').click(function() {
	    var text = $(this).html();
	    var icon = '<i class="fa fa-times" aria-hidden="true"></i>';
	    linkl.html(text);
	    listl.slideToggle(200);
	});
	//dropdown social network silver

	var listm = $('.list6');
  	var linkm = $('.link6');
  	linkm.click(function(e) {
	    e.preventDefault();
	    listm.slideToggle(200);
	  });
  	listm.find('li').click(function() {
	    var text = $(this).html();
	    var icon = '<i class="fa fa-times" aria-hidden="true"></i>';
	    linkm.html(text);
	    listm.slideToggle(200);
	});
	//dropdown checkout canton

	var listn = $('.list7');
  	var linkn = $('.link7');
  	linkn.click(function(e) {
	    e.preventDefault();
	    listn.slideToggle(200);
	  });
  	listn.find('li').click(function() {
	    var text = $(this).html();
	    var icon = '<i class="fa fa-times" aria-hidden="true"></i>';
	    linkn.html(text);
	    listn.slideToggle(200);
	});

	//dropdown filter-search

	var listo = $('.list8');
  	var linko = $('.link8');
  	linko.click(function(e) {
	    e.preventDefault();
	    listo.slideToggle(200);
	  });
  	listo.find('li').click(function() {
	    var text = $(this).html();
	    var icon = '<i class="fa fa-times" aria-hidden="true"></i>';
	    linko.html(text);
	    listo.slideToggle(200);
	});

	//dropdown filter-search

	var listp = $('.list9');
  	var linkp = $('.link9');
  	linkp.click(function(e) {
	    e.preventDefault();
	    listp.slideToggle(200);
	  });
  	listp.find('li').click(function() {
	    var text = $(this).html();
	    var icon = '<i class="fa fa-times" aria-hidden="true"></i>';
	    linkp.html(text);
	    listp.slideToggle(200);
	});

	//dropdown sort-search

	var listq = $('.list10');
  	var linkq = $('.link10');
  	linkq.click(function(e) {
	    e.preventDefault();
	    listq.slideToggle(200);
	  });
  	listq.find('li').click(function() {
	    var text = $(this).html();
	    var icon = '<i class="fa fa-times" aria-hidden="true"></i>';
	    linkq.html(text);
	    listq.slideToggle(200);
	});
	// dropdown filter

	var filterlist = $('.filter-list');
  	var filterlink = $('.filter-link');
  	filterlink.click(function(e) {
	    e.preventDefault();
	    filterlist.slideToggle(200);
	  });
  	filterlist.find('li').click(function() {
	    var text = $(this).html();
	    var icon = '<i class="fa fa-times" aria-hidden="true"></i>';
	    filterlink.html(text);
	    filterlist.slideToggle(200);
	});

	//platinum-slider

	$(document).ready(function(){
		$('.platinum-slider-slides').slick({
		  	infinite: true,
		  	slidesToShow: 3,
		  	slidesToScroll: 1,
		  	dots:false,
		  	arrows:true,
		  	// autoplay:true,
			autoplaySpeed:4000,
			prevArrow: $('.prev'),
	      	nextArrow: $('.next'),
	      	responsive: [
		      {
		        breakpoint: 767,
		        settings: {
		          slidesToShow: 1,
		        }
		      }
		    ]
		});
	});

	//testimonials slider

	$(document).ready(function(){
		$('.testimonials-slider').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: false,
		  asNavFor: '.slider-nav'
		});
		$('.slider-nav').slick({
		  slidesToShow: 4,
		  asNavFor: '.testimonials-slider',
		  dots: true,
		  // centerMode: true,
		  focusOnSelect: true
		});
	});

	//footer-fix

	var footerHeight = $('.site-footer').outerHeight();
  	$("#content").css("margin-bottom", footerHeight);

    /* PRE LOADER  */

    $(window).on('load', function() {
        $('.loader').delay(2000).fadeOut('slow');
        $('.preloader').delay(2000).fadeOut('slow');
        $('body').delay(1000).css({
            'overflow': 'visible'
        });
    });

    // Go to top.

    var $scroll_obj = $( '#btn-gotop' );
    $(window).on('scroll', function() {
      if ( $( this ).scrollTop() > 350 ) {
        $scroll_obj.fadeIn();
      } else {
        $scroll_obj.fadeOut();
      }
    });
    $scroll_obj.on('click', function(e){
      $( 'html, body' ).animate( { scrollTop: 0 }, 600 );
      return false;
    });

    // Mean Menu

    $('.main-navigation').meanmenu({
      meanMenuContainer: '.site-header',
      meanScreenWidth:"991",
      onePage: true
    });

    //For fixing the top menu
    
  	var aboveHeight = $('.site-header').outerHeight();
  	$(window).on('scroll', function () {
	    if ($(window).scrollTop() > aboveHeight){
	      $('body').addClass('fixed-header-on');
	    } else {
	      $('body').removeClass('fixed-header-on');
	    }
	});

  	// animation
	anime.timeline({loop: false})
	.add({
		targets: '.banner-section .banner-content',
		translateY:[-2000,0],
		opacity: [0,1],
		easing: "easeOutCirc",
		duration: 3000,
	})
	// multiselect dropdown
	$(document).ready(function() {
	    $('.dropdown-multiple').select2({
	    	placeholder: "Select an option",
	    });
	});
	$(".search-result-box").click(function() {
	  window.location = $(this).find("a").attr("href"); 
	  return false;
	});
	// model
	jQuery.noConflict();
	jQuery(document).ready(function($) {

	$('.share').click(function() {
		$('#model-overlay').fadeIn(300);
		$('.share-model-box').css({display:'block'});
		$('.share-model-box').delay(10).animate({
	    top: ($(window).height() - $('.profile-tab-container').outerHeight())/4
	  }, 400);
	});

	$('#model-overlay, .close').click(function() {
		$('.share-model-box').animate({ top: -($('.share-model-box').outerHeight()) - 50 });
		$('#model-overlay').fadeOut(200);
	});
	$(window).resize(function(){
	   $('.share-model-box').css({
	     left: ($(window).width() - $('.share-model-box').outerWidth())/2
	   });
	});
	$(window).resize();

	});

	jQuery.noConflict();
	jQuery(document).ready(function($) {

	$('.report').click(function() {
		$('#model-overlay').fadeIn(300);
		$('.report-model-box').css({display:'block'});
		$('.report-model-box').delay(10).animate({
	    top: ($(window).height() - $('.profile-tab-container').outerHeight())/4
	  }, 400);
	});

	$('#model-overlay, .close').click(function() {
		$('.report-model-box').animate({ top: -($('.report-model-box').outerHeight()) - 50 });
		$('#model-overlay').fadeOut(200);
	});
	$(window).resize(function(){
	   $('.report-model-box').css({
	     left: ($(window).width() - $('.report-model-box').outerWidth())/2
	   });
	});
	$(window).resize();

	});

// toogle-filter

// $(document).ready(function(){
//     var $content = $(".search-filter-box").hide();
//     $(document).on("click", function(e) { 
//         if( $(e.target).is(".open-search-filter") ) {       
//             $(this).toggleClass("expandedcone");                                        
//             $content.slideToggle();
                                           
//         } else {
//             $content.slideUp();
//         }
//     });
// });
$(".open-search-filter").click(function(e){
    $(".search-filter-box").show(300);
     e.stopPropagation();
});

$(".search-filter-box").click(function(e){
    e.stopPropagation();
});

$(document).click(function(){
    $(".search-filter-box").hide(300);
});

$(document).ready(function(){
    $('#open-coupon-form').on('click', function(event) {        
         $('#form_coupon').toggle('show');
    });
});
// active class
// 	var header = document.getElementById("accNav");
// 	var btns = header.getElementsByClassName("acc-nav-list");
// 	for (var i = 0; i < btns.length; i++) {
//   	btns[i].addEventListener("click", function() {
//   	var current = document.getElementsByClassName("active");
//   	current[0].className = current[0].className.replace(" active", "");
//   	this.className += " active";
//   });
// }
// function buyToggle() {
//   document.getElementById("silver-plan-dropdown").classList.toggle("show");
// }
// // Close the dropdown if the user clicks outside of it
// window.onclick = function(event) {
//   if (!event.target.matches('.dropdown-package')) {
//     var dropdowns = document.getElementsByClassName(".drop-down-package-wrapper");
//     var i;
//     for (i = 0; i < dropdowns.length; i++) {
//       var openDropdown = dropdowns[i];
//       if (openDropdown.classList.contains('show')) {
//         openDropdown.classList.remove('show');
//       }
//     }
//   }
// }
})(jQuery);
function goBack() {
  	window.history.back();
}
// tabs
function openFilter(evt, filterName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(filterName).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();
