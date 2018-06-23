$(document).ready(function () {
	marginMain();
	$(window).scroll(function(){
		setTimeout(function() {
			configuraMenuCor();
		}, 150);
	});
	$('#origemPacotes').keyup(function(){
    $('#teste').val($(this).val());
});
function marginMain() {
    // var alturaMenu = $('.header__topo').height();
    // $('.main').css('margin-top', alturaMenu);
    
}
function configuraMenuCor() {
	var top = $(window).scrollTop();
	
	if (top > 50) {
		$('.header__topo').css('background','#202426');
		$('.header__topo li a').css('color','#fff');
		$('.header__topo--border').css('border-bottom','1px solid #fff');
		
		
		$('.header__topo__menu a.logo').css('margin-top','9px');
		$('.header__topo__menu a.logo').css('margin-bottom','9px');
		$('.header__topo__menu__nivel-1 > a').css('padding','43px 20px 26px 20px !important');	
		
	}else {
		$('.header__topo').css('background','#242321a1');
		$('.header__topo  li a').css('color','#fff');
		$('.header__topo--border').css('border-bottom','1px solid #fff');

		$('.header__topo__menu a.logo').css('margin-top','16px');
		$('.header__topo__menu a.logo').css('margin-bottom','16px');
		$('.header__topo__menu__nivel-1 > a').css('padding','50px 20px 33px 20px !important');
	}
}
function nomeViagen() {
  
	
	$('#origemPacotes').keyup(function(){
    $('#teste').val($(this).val());
});

   
