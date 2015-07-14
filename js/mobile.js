$(document).ready(function() {
	$('.boton-menu').click(function() {
		$('.bloque-menu').fadeToggle('slow');
		return false;
	});
	$('.bloque-menu a').click(function() {
		$('.bloque-menu').hide();
	});
	$('#fullpage').fullpage({
		scrollOverflow:false,
		anchors:['landing', 'home', 'campana', 'calendario', 'top5', 'lookbook-intro', 'lookbook'],
		onLeave:function(index, nextIndex, direction){
			if (nextIndex === 1) {
				$('#subir').fadeOut('fast');
			} else if (nextIndex === 6) {
				$('#bajar').fadeOut('fast');
			} else {
				$('#subir, #bajar').fadeIn('fast');
			}
			$('a').css('color', '#000');
			switch (nextIndex) {
				case 1:  // landing
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
				case 6:  // lookbook intro
					$('#subir').attr('href', '#top5');
					$('#bajar').attr('href', '#lookbook');
					$('#menu-lookbook').css('color', '#fff');
					break;
				case 7:  // lookbook
					$('#subir').attr('href', '#lookbook-intro');
					$('#bajar').attr('href', '#');
					$('#menu-lookbook').css('color', '#fff');
					break;
			}
		},
		afterLoad:function(anchorLink, index){
			if (index === 1) {
				$('#subir').fadeOut('fast');
				$('#bajar').fadeIn('fast');
				setTimeout(function(){$('#hashtag').addClass('shake animated');}, 500);
			} else if (index === 7) {
				$('#subir').fadeIn('fast');
				$('#bajar').fadeOut('fast');
			} else {
				$('#subir, #bajar').fadeIn('fast');
				$('#hashtag').removeClass('shake animated');
			}
		},
		afterSlideLoad:function(anchorLink, index, slideAnchor, slideIndex){
			if (index === 4 && slideIndex === 0) {
				$('.fp-controlArrow').hide();
			} else {
				$('.fp-controlArrow').show();
			}
		},
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
});
$(window).load(function(){  
	if (calendario === '1') {
		$.fn.fullpage.silentMoveTo('calendario');
	}
});