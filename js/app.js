// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
jQuery(document).ready(function($) {
	
		$(document).foundation( 'topbar', 'reflow' );

		$( 'body' ).fadeIn(2000);   

/**
*
* iSotope Code
*
**/

		
		var $container = $('.portfolio-container').isotope( 
				{ 
					itemSelector: '.grid-item',
					percentPosition: true


		} );

		$container.imagesLoaded().progress( function() { 

			$container.isotope( 'layout' );
		});


		//Filter Code
		$('.portfolio-filter').on( 'click', 'a', function(e) {

			e.preventDefault();
			var $this = $(this);
			var $nav = $('.sub-nav');

			var $active = $nav.find('.active');
			$active.removeClass('active');

			$this.parent().addClass('active');

			var filterValue = $(this).attr('data-filter');

			$container.isotope( { filter: filterValue });
		});

/**
 *
 * Nav Active Highlight
 *
 */
	 	var page = window.location.pathname;
	 	// console.log(page);

	 	var currentPage = page.substring(1, page.length);
	 	// console.log(currentPage);
		
		// var $activeLink = $('.main-nav').children("li:contains('About')").css('border', '1px solid red');
		// var $activeLink = $('.main-nav').children('li').children("a:contains('About')").css('color', 'red');
		
		$(".main-nav").find("[data-page='" + currentPage + "']").addClass('active');

		var dropdown = $('.dropdown').children('li').hasClass('active');
		console.log(dropdown);

		if (dropdown) {
			$('.has-dropdown').addClass('active');
		}

			
});






























