/* window.scrollTo((document.body.offsetWidth-document.documentElement.offsetWidth)/2, (document.body.offsetHeight-document.documentElement.offsetHeight)/2)

 * document.body.offsetWidth contains the value of the body's width
 * document.documentElement contains the value of the document's width
 *
 * Logic: If you want to center the page, you have to substract
 * the body's width from the document's width, then divide it
 * by 2.
 * 
 * $(".page").each(function(){this.style.visibility = "visible";})	
 */

$(function() {


});

$(window).load(function() {
    $('.preload').fadeOut('slow');
});