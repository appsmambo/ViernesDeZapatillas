$(document).ready(function() {
	$('#fullpage').fullpage({
		scrollOverflow:true,
		anchors:['menu', 'landing', 'home', 'campana', 'calendario', 'top5', 'lookbook'],
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
				case 6:  // lookbook
					$('#subir').attr('href', '#top5');
					$('#bajar').attr('href', '#');
					$('#menu-lookbook').css('color', '#fff');
					break;
			}
		},
		afterLoad:function(anchorLink, index){
			if (index === 1) {
				$('#subir, #bajar').fadeOut('fast');
			} else if (index === 2) {
				$('#bajar').attr('href', '#home');
				$('#subir').fadeOut('fast');
				setTimeout(function(){$('#hashtag').addClass('shake animated');}, 500);
				//setTimeout(function(){$.fn.fullpage.silentMoveTo('home');}, 3500);
			} else if (index === 7) {
				$('#subir').fadeIn('fast');
				$('#bajar').fadeOut('fast');
			} else {
				$('#subir, #bajar').fadeIn('fast');
				$('#hashtag').removeClass('shake animated');
			}
		}
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