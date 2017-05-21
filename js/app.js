$(document).ready(function(){
	$('#btn-modal-footer').leanModal();
});

$(document).ready(function(){
	$('#btn-dropdown-perfil').dropdown();
});

$(document).ready(function(){
	$('#btn-search-add').dropdown();
});

function callParallax(){
	$('.parallax').parallax();
}

$('.master-menu').click(function(e){
	e.preventDefault();
	$(this).next('ul').slideToggle('slow');
	//fecha os que não são parte do que foi clicado
	$('.child-menu').not($(this).next()).slideUp('slow');
});

$('#btn-sidebar').click(function(e){
	e.preventDefault();
	$('#wrapper').toggleClass('toggled');
	$('#btn-sidebar').toggleClass('toggled');
});

$(document).ready(function(){
    $('.carousel').carousel();
    $('.carousel.carousel-slider').carousel({fullWidth: true});
});

//quando renderizar a imagem que vai iniciar o parallax
window.load = callParallax();