var altoTotal, altoMenu, altoFooter;
function actualizarAlto(alto) {
	altoMenu = $('.menu img').height();
	altoFooter = $('footer').height();
	altoTotal = $(window).height() - (altoFooter + altoMenu + alto);
	$('.home .contenido').height(altoTotal);
}
$(document).ready(function() {
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
		var dia = $('a', this).data('dia');
		$('.ayuda', this).fadeIn('fast');
		$('.zapatilla img').attr('src', urlBase + '/img/zapatillas/zapatilla-' + dia + '.jpg')
	})
	.mouseleave(function() {
		$('.ayuda', this).fadeOut('fast');
	});
	$('td.calendario a').click(function() {
		var dia = $(this).data('dia'), html;
		html = '<img src="' + urlBase + '/img/zapatillas/look-' + dia + '.jpg" alt="" class="center-block img-responsive">';
		$('.look').removeClass('vacio').html(html);
		return false;
	});
});
$(window).load(function(){  
	actualizarAlto(30);
});
