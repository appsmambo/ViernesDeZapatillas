var altoTotal, altoMenu, altoFooter, api, pane, flagCalendario, flagTop5;
var $grid;
function actualizarAlto(alto) {
	altoMenu = $('.menu img').height();
	altoFooter = $('footer').height();
	altoTotal = $(window).height() - (altoFooter + altoMenu + alto);
	$('.home .contenido').height(altoTotal);
	api.reinitialise();
}
$(document).ready(function() {
	flagTop5 = flagCalendario = false;
	$(window).resize(function() {
		actualizarAlto(15);
	});
	$('#fullpage').fullpage({
		scrollOverflow:true,
		anchors:['landing', 'home', 'campana', 'calendario', 'top5', 'lookbook'],
		onLeave:function(index, nextIndex, direction){
			if (nextIndex === 1) {
				$('.barra-menu, #subir').fadeOut('fast');
			} else if (nextIndex === 6) {
				$('#bajar').fadeOut('fast');
			} else {
				$('.barra-menu, #subir, #bajar').fadeIn('fast');
			}
			$('.barra-menu a').css('color', '#000');
			switch (nextIndex) {
				case 1:  // landing
					$('.barra-menu').fadeOut('fast');
					$('#subir').attr('href', '#');
					$('#bajar').attr('href', '#home');
					break;
				case 2:  // home
					$('#subir').attr('href', '#landing');
					$('#bajar').attr('href', '#campana');
					break;
				case 3:  // campana
					$('#subir').attr('href', '#home');
					$('#bajar').attr('href', '#calendario');
					$('#menu-campana').css('color', '#009fe3');
					break;
				case 4:  // calendario
					$('#subir').attr('href', '#campana');
					$('#bajar').attr('href', '#top5');
					$('#menu-calendario').css('color', '#e71b81');
					break;
				case 5:  // top5
					$('#subir').attr('href', '#calendario');
					$('#bajar').attr('href', '#lookbook');
					$('#menu-top5').css('color', '#f8db1a');
					break;
				case 6:  // lookbook
					$('#subir').attr('href', '#top5');
					$('#bajar').attr('href', '#');
					$('#menu-lookbook').css('color', '#fff');
					break;
			}
		},
		afterLoad:function(anchorLink, index){
			if (index === 1) {
				$('#bajar').attr('href', '#home');
				$('.barra-menu, #subir').fadeOut('fast');
				setTimeout(function(){$('#hashtag').addClass('shake animated');}, 500);
			} else if (index === 6) {
				$('.barra-menu, #subir').fadeIn('fast');
				$('#bajar').fadeOut('fast');
			} else {
				$('.barra-menu, #subir, #bajar').fadeIn('fast');
				$('#hashtag').removeClass('shake animated');
			}
		}
	});
	$('td.calendario')
	.mouseenter(function() {
		if (flagCalendario) return;
		var dia = $('a', this).data('dia');
		$('.ayuda', this).fadeIn('fast');
		$('.zapatilla img').attr('src', urlBase + '/img/zapatillas/zapatilla-' + dia + '.jpg')
	})
	.mouseleave(function() {
		$('.ayuda', this).fadeOut('fast');
	});
	$('td.calendario a').click(function() {
		var dia = $(this).data('dia'), html;
		html = '<img src="' + urlBase + '/img/cerrar.jpg" alt="" class="cerrar"><br>';
		html += '<img src="' + urlBase + '/img/zapatillas/look-' + dia + '.jpg" alt="" class="center-block img-responsive">';
		$('.look').removeClass('vacio').html(html);
		flagCalendario = true;
		return false;
	});
	$('.look').on('click', '.cerrar', function () {
		$('.look').addClass('vacio').html('');
		flagCalendario = false;
		return false;
	});
	$('.lookbook-prenda').click(function() {
		var prenda = $(this).data('prenda');
		var lookbook = '#lookbook-detalle-' + prenda;
		$.colorbox({href:lookbook,inline:true,innerWidth:283,scrolling:false});
	});
	$('.compartir-facebook').click(function() {
		var imagen = $(this).data('imagen');
		var texto = $(this).data('texto');
		FB.ui({
			method:'feed',
			link:urlBase,
			description:texto,
			picture:imagen,
			caption:'La semana empieza con el #viernesdezapatillas ¡Sigue el movimiento!',
		}, function(response){});
		return false;
	});
	$('.top5-prenda').click(function() {
		if (flagTop5) return false;
		var prenda = parseInt($(this).data('prenda'));
		var html = '';
		html = '<img src="' + urlBase + '/img/top5/zapatilla-' + prenda + '.jpg" alt="" class="img-responsive center-block">';
		$('#top5-col-6 div').html(html);
		for (i = 1; i <= 6; i++) {
			if (i === prenda) continue;
			if (i === 6) {
				$('#top5-col-6').delay(500).fadeIn('fast');
			} else {
				$('#top5-col-'+i).hide('slow');
				$('#top5-' + i).fadeTo('fast', .3);
			}
		}
		flagTop5 = true;
		return false;
	});
	$('.cerrar-top5').click(function () {
		$('#top5-col-6').fadeOut('slow', function() {
			for (i = 1; i <= 5; i++) {
				$('#top5-col-'+i).show('fast');
			}
			$('.top5-numero').fadeTo('fast', 1);
		});
		flagTop5 = false;
	});
	$('.iframe').colorbox({iframe:true, width:"70%", height:"68%"});
	$('.scroll-pane').jScrollPane();
	pane = $('.scroll-pane');
	api = pane.data('jsp');
	$grid = $('.grid').isotope({
		itemSelector:'.grid-item',
		layoutMode:'fitRows'
	});
	$('.ver-todas').click(function() {
		$grid.isotope({filter:'*'});
		return false;
	});
	$('.ver-twitter').click(function() {
		$grid.isotope({filter:'.twitter'});
		return false;
	});
	$('.ver-instagram').click(function() {
		$grid.isotope({filter:'.instagram'});
		return false;
	});
});
$(window).load(function(){  
	actualizarAlto(30);
});
