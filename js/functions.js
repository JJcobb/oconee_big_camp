$(document).ready(function(){


	/* Mobile hamburger menu */

	$('.open-menu').click(function(){

    	/*$('.menu-container').toggleClass('expand');*/
    	$('.menu-container').slideDown('500');

    	$('.open-menu').hide();
    	$('.close-menu').show();
    });

    $('.close-menu').click(function(){

    	$('.menu-container').slideUp('500');
    	/*$('.menu-container').toggleClass('expand');*/


    	$('.close-menu').hide();
    	$('.open-menu').show();
    });

    /* END hamburger menu */


	
	/* Sticky Header */

	$(window).scroll(function() {

		if ( $(this).scrollTop() > 50 && !( $('.header-fixed').length > 0 ) ){  

			/*$('header').clone().addClass('header-fixed').appendTo('header');*/

			/*$('header').clone().addClass('header-fixed').insertAfter('header');

			$('.header-fixed .menu-container').addClass('menu-container-fixed');
			$('.header-fixed .open-menu').addClass('open-menu-fixed');
			$('.header-fixed .close-menu').addClass('close-menu-fixed');*/


			/*$('header').clone().empty().css('height', '73px').insertBefore('header');*/
			$('header').before('<div class="header-spacer"></div>');
			$('header').addClass('header-fixed');

			$('.dropdown').addClass('dropdown-fixed');

		}
		else if ( $(this).scrollTop() < 50) {

		    /*$('.header-fixed').remove();*/

		    $('.header-fixed').removeClass('header-fixed');

		    $('.dropdown').removeClass('dropdown-fixed');

		    $('.header-spacer').remove();

		}
	});

	/* END sticky header */



	/* Slide down animation for header dropdown menu */

	$('nav li').hover(
		function() {
	    	$('ul', this).stop().slideDown(100);
	  	}
	);

	$('header').mouseleave(
		function() {
	    	$('.dropdown').stop().slideUp(100);
	    }
	);

	/* END slide down */



	/* Write a review rating stars */

	$('.rating-input span:nth-of-type(1)').hover(
		function() {
			$('.rating-input').addClass('one-star');
		}
	);
	$('.rating-input span:nth-of-type(1)').click(
		function() {

			$('.rating-input').removeClass('two-star-selected');
			$('.rating-input').removeClass('three-star-selected');
			$('.rating-input').removeClass('four-star-selected');
			$('.rating-input').removeClass('five-star-selected');

			$('.rating-input').addClass('one-star-selected');
			$('.rating-input').removeClass('one-star');

			$('input[name="rating"]').val('1');
		}
	);
	$('.rating-input span:nth-of-type(1)').mouseleave(
		function() {
			$('.rating-input').removeClass('one-star');
		}
	);

	$('.rating-input span:nth-of-type(2)').hover(
		function() {
			$('.rating-input').addClass('two-star');
		}
	);
	$('.rating-input span:nth-of-type(2)').click(
		function() {

			$('.rating-input').removeClass('one-star-selected');
			$('.rating-input').removeClass('three-star-selected');
			$('.rating-input').removeClass('four-star-selected');
			$('.rating-input').removeClass('five-star-selected');

			$('.rating-input').addClass('two-star-selected');
			$('.rating-input').removeClass('two-star');

			$('input[name="rating"]').val('2');
		}
	);
	$('.rating-input span:nth-of-type(2)').mouseleave(
		function() {
			$('.rating-input').removeClass('two-star');
		}
	);

	$('.rating-input span:nth-of-type(3)').hover(
		function() {
			$('.rating-input').addClass('three-star');
		}
	);
	$('.rating-input span:nth-of-type(3)').click(
		function() {

			$('.rating-input').removeClass('one-star-selected');
			$('.rating-input').removeClass('two-star-selected');
			$('.rating-input').removeClass('four-star-selected');
			$('.rating-input').removeClass('five-star-selected');

			$('.rating-input').addClass('three-star-selected');
			$('.rating-input').removeClass('three-star');

			$('input[name="rating"]').val('3');
		}
	);
	$('.rating-input span:nth-of-type(3)').mouseleave(
		function() {
			$('.rating-input').removeClass('three-star');
		}
	);

	$('.rating-input span:nth-of-type(4)').hover(
		function() {
			$('.rating-input').addClass('four-star');
		}
	);
	$('.rating-input span:nth-of-type(4)').click(
		function() {

			$('.rating-input').removeClass('one-star-selected');
			$('.rating-input').removeClass('two-star-selected');
			$('.rating-input').removeClass('three-star-selected');
			$('.rating-input').removeClass('five-star-selected');

			$('.rating-input').addClass('four-star-selected');
			$('.rating-input').removeClass('four-star');

			$('input[name="rating"]').val('4');
		}
	);
	$('.rating-input span:nth-of-type(4)').mouseleave(
		function() {
			$('.rating-input').removeClass('four-star');
		}
	);

	$('.rating-input span:nth-of-type(5)').hover(
		function() {
			$('.rating-input').addClass('five-star');
		}
	);
	$('.rating-input span:nth-of-type(5)').click(
		function() {

			$('.rating-input').removeClass('one-star-selected');
			$('.rating-input').removeClass('two-star-selected');
			$('.rating-input').removeClass('three-star-selected');
			$('.rating-input').removeClass('four-star-selected');

			$('.rating-input').addClass('five-star-selected');
			$('.rating-input').removeClass('five-star');

			$('input[name="rating"]').val('5');
		}
	);
	$('.rating-input span:nth-of-type(5)').mouseleave(
		function() {
			$('.rating-input').removeClass('five-star');
		}
	);

	/* END write review rating stars */



	/* Limit amount of text in product descriptions - Catalog page */

	$('.product-box .featured-info-text').each(function(){

		var description = $(this).text();

		var limit = 120;

		if( description.length > limit ){

			$(this).text( description.substring(0,limit) + '...' );
		}
	});

	/* END limit product descriptions */




});