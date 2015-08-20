// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
jQuery(document).ready(function($) {
	$(document).foundation();


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
 * Top Nav Active Class
 *
 */

		$('.main-nav').on( 'click', 'li', function(e) {

			e.preventDefault();

			var $this = $(this);
			var $mainNav = $(this).parent();

			var $topActive = $mainNav.find('.active');
			$topActive.removeClass('active');

			$this.addClass('active');

		});
 			
});































