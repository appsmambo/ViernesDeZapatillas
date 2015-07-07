var altoTotal, altoMenu, altoFooter, api, pane, flagCalendario;
var $grid;
var fb = [];
fb[29] = '¡Arma tu look con estas zapatillas! ADIDAS ZX FLUX S/. 29 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[15] = '¡Arma tu look con estas zapatillas! CATERPILLAR ZIMZALA MID S/. 349 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[6] = '¡Arma tu look con estas zapatillas! PUMA VIKKY WEDGE S/. 269 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[25] = '¡Arma tu look con estas zapatillas! NIKE FIEID TRAINER LEATHER S/. 269 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[18] = '¡Arma tu look con estas zapatillas! INDEX LAURAQUILT S/. 69.90 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[12] = '¡Arma tu look con estas zapatillas! CONVERSE CHUCK TAYLOR ALL STAR S/. 189 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[31] = '¡Arma tu look con estas zapatillas! CHUCK TAYLOR ALL STAR HIGH STREET S/. 199 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[7] = '¡Arma tu look con estas zapatillas! ADIDAS PLIMCANA LOW S/. 249 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[9] = '¡Arma tu look con estas zapatillas! NIKE PROMO COURT S/. 229 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[5] = '¡Arma tu look con estas zapatillas! CATERPILLAR POE BURNISH BRIGHTS S/. 379 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[11] = '¡Arma tu look con estas zapatillas! ADIDAS PLIMCANA S/. 259 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[13] = '¡Arma tu look con estas zapatillas! NEW BALANCE GRIS S/. 249 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[23] = '¡Arma tu look con estas zapatillas! PUMA FTR TF- RACER S/. 189 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[10] = '¡Arma tu look con estas zapatillas! NIKE PRIMO COURT MID CVS PRINT S/. 259 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[4] = '¡Arma tu look con estas zapatillas! INDEX LAURA QUILT S/. 69.90 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[1] = '¡Arma tu look con estas zapatillas! MARQUIS PELO ZULEMA S/. 129 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[2] = '¡Arma tu look con estas zapatillas! INDEX LAURAP S/. 69.90 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[8] = '¡Arma tu look con estas zapatillas! CONVERSE CHUCK TAYLOR ALL STAR S/. 189 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[20] = '¡Arma tu look con estas zapatillas! REEBOK SKYSCAPE S/. 199 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[22] = '¡Arma tu look con estas zapatillas! PUMA FTR TF-RACER S/. 189 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[27] = '¡Arma tu look con estas zapatillas! REEBOK GT1510 S/. 129 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[16] = '¡Arma tu look con estas zapatillas! NIKE FORCE SKY HIGH PRINT S/. 299 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[3] = '¡Arma tu look con estas zapatillas! SKECHERS S/. 320 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[30] = '¡Arma tu look con estas zapatillas! NEW BALANCE S/. 159 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[14] = '¡Arma tu look con estas zapatillas! SKECHERS S/. 280 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[28] = '¡Arma tu look con estas zapatillas! NEW BALANCE S/. 239 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[26] = '¡Arma tu look con estas zapatillas! NEW BALANCE S/. 229 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[24] = '¡Arma tu look con estas zapatillas! ADIDAS RACER LITE W S/. 239 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[21] = '¡Arma tu look con estas zapatillas! DC Counsil SD S/. 279 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[19] = '¡Arma tu look con estas zapatillas! DC ANVIL TX SE S/. 279 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
fb[17] = '¡Arma tu look con estas zapatillas! GOTCHA GT-1510 S/. 129 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas';
var tw = [];
tw[29] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20ADIDAS%20ZX%20FLUX%20S/.29%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[15] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20CATERPILLAR%20ZIMZALA%20MID%20S/.349%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[6] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20PUMA%20VIKKY%20WEDGE%20S/.269%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[25] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20NIKE%20FIEID%20TRAINER%20LEATHER%20S/.269%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[18] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20INDEX%20LAURAQUILT%20S/.69.9%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[12] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20CONVERSE%20CHUCK%20TAYLOR%20S/.189%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[31] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20CHUCK%20TAYLOR%20HIGH%20STREET%20S/.199%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[7] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20ADIDAS%20PLIMCANA%20LOW%20S/.249%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[9] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20NIKE%20PROMO%20COURT%20S/.229%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[5] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20CATERPILLAR%20POE%20BURNISH%20BRIGHTS%20S/.379%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[11] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20ADIDAS%20PLIMCANA%20S/.259%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[13] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20NEW%20BALANCE%20GRIS%20S/.249%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[23] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20PUMA%20FTR%20TF-%20RACER%20S/.189%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[10] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20NIKE%20PRIMO%20COURT%20MID%20S/.259%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[4] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20INDEX%20LAURA%20QUILT%20S/.69.9%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[1] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20MARQUIS%20PELO%20ZULEMA%20S/.129%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[2] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20INDEX%20LAURAP%20S/.69.9%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[8] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20CONVERSE%20CHUCK%20TAYLOR%20S/.189%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[20] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20REEBOK%20SKYSCAPE%20S/.199%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[22] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20PUMA%20FTR%20TF-RACER%20S/.189%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[27] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20REEBOK%20GT1510%20S/.129%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[16] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20NIKE%20FORCE%20SKY%20HIGH%20PRINT%20S/.299%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[3] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20SKECHERS%20S/.320%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[30] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20NEW%20BALANCE%20S/.159%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[14] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20SKECHERS%20S/.280%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[28] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20NEW%20BALANCE%20S/.239%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[26] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20NEW%20BALANCE%20S/.229%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[24] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20ADIDAS%20RACER%20LITE%20W%20S/.239%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[21] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20DC%20Counsil%20SD%20S/.279%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[19] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20DC%20ANVIL%20TX%20SE%20S/.279%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';
tw[17] = 'https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20GOTCHA%20GT-1507%20S/.129%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas';

function actualizarAlto(alto) {
	altoMenu = $('.menu img').height();
	altoFooter = $('footer').height();
	altoTotal = $(window).height() - (altoFooter + altoMenu + alto);
	$('.home .contenido').height(altoTotal);
	api.reinitialise();
}

$(document).ready(function() {
	flagCalendario = false;
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
					$grid.isotope({filter:'*'});
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
			if (anchorLink === 'landing')
				setTimeout(function(){$.fn.fullpage.silentMoveTo('home');}, 2500);
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
		var indice = parseInt(dia);
		html = '<img src="' + urlBase + '/img/cerrar.jpg" alt="" class="cerrar"><br>';
		html += '<img src="' + urlBase + '/img/zapatillas/look-' + dia + '.jpg" alt="" class="center-block img-responsive">';
		$('.look').removeClass('vacio').html(html);
		$('.zapatilla img').attr('src', urlBase + '/img/zapatillas/zapatilla-' + dia + '.jpg')
		$('p.compartir').fadeIn();
		$('p.compartir .compartir-facebook').data('imagen', urlBase + '/img/zapatillas/zapatilla-' + dia + '.jpg').data('texto', fb[indice]);
		$('p.compartir .compartir-twitter').attr('href', tw[indice]);
		flagCalendario = true;
		return false;
	});
	$('.look').on('click', '.cerrar', function () {
		$('.look').addClass('vacio').html('');
		$('p.compartir').fadeOut('fast');
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
		var prenda = parseInt($(this).data('prenda'));
		var html = '';
		$('#top5-col-' + prenda + ' img').attr('src', urlBase + '/img/top5/0' + prenda + '.gif');
		html = '<img src="' + urlBase + '/img/top5/zapatilla-' + prenda + '.jpg" alt="" class="img-responsive center-block">';
		$('#top5-col-6 div').html(html);
		$('.cerrar-top5').data('prenda', prenda);
		for (i = 1; i <= 6; i++) {
			if (i === prenda) {
				$('#top5-col-' + prenda + ' img').attr('src',  urlBase + '/img/top5/0' + prenda + '.gif');
				continue;
			}
			if (i == 6) {
				$('#top5-col-6').delay(500).fadeIn('fast');
			} else {
				$('#top5-col-'+i).hide('slow');
				$('#top5-' + i).fadeTo('fast', .3);
			}
		}
		return false;
	});
	$('.cerrar-top5').click(function () {
		var prenda = parseInt($(this).data('prenda'));
		$('#top5-col-6').fadeOut('slow', function() {
			for (i = 1; i <= 5; i++) {
				$('#top5-col-' + i + ' img').attr('src',  urlBase + '/img/top5/0' + i + '.jpg');
				$('#top5-col-'+i).show('fast');
			}
			$('.top5-numero').fadeTo('fast', 1);
		});
	});
	$('.iframe').colorbox({iframe:true, width:"70%", height:"68%"});
	$('.scroll-pane').jScrollPane();
	pane = $('.scroll-pane');
	api = pane.data('jsp');
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
	$grid = $('.grid').isotope({
		itemSelector:'.grid-item',
		layoutMode:'fitRows'
	});
	if (calendario === '1') {
		$.fn.fullpage.silentMoveTo('calendario');
	}
});
