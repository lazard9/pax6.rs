/**
 * File index.js.
 *
 * Various functions
 */

jQuery(document).ready(function($) {
	jQuery("#nav_menu-2 a").wrapInner("<span></span>");

	/* Resize menu */
	$(window).on("scroll load", function resizemeny() {
	    if ($(this).scrollTop() < 100) {
	        $('.site-header').removeClass('fixed');
	    } else {
	        $('.site-header').addClass('fixed');
	    }
	});

	/* Placeholders for comment section inputs */
	$(".comment-form-comment #comment").attr("placeholder", "Comment");
	$(".comment-form-author #author").attr("placeholder", "Name*");
	$(".comment-form-email #email").attr("placeholder", "Email*");
	$(".comment-form-url #url").attr("placeholder", "Website");

	$('.comment-form-author #author').val('');
	$('.comment-form-email #email').val('');
	$(".comment-form-url #url").val('');
});