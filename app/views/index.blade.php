<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Viernes de Zapatillas 2015</title>
		<meta name="description" content="La semana empieza con el #viernesdezapatillas ¡Sigue el movimiento!">
		<link rel="canonical" href="{{url()}}/">
		<meta property="fb:app_id" content="706924852769429">
		<meta property="fb:admins" content="100008010128050">
		<meta property="og:title" content="Viernes de Zapatillas 2015">
		<meta property="og:type" content="website">
		<meta property="og:url" content="{{url()}}/">
		<meta property="og:image" content="{{url()}}/img/compartir.jpg">
		<meta property="og:site_name" content="Viernes de Zapatillas 2015">
		<meta property="og:description" content="La semana empieza con el #viernesdezapatillas ¡Sigue el movimiento!">
		<link href="{{url()}}/css/animate.css" rel="stylesheet">
		<link href="{{url()}}/css/bootstrap.min.css" rel="stylesheet">
		<link href="{{url()}}/css/jquery.jscrollpane.css" rel="stylesheet">
		<link href="{{url()}}/css/jquery.fullPage.css" rel="stylesheet">
		<link href="{{url()}}/css/colorbox.css" rel="stylesheet">
		<link href="{{url()}}/css/main.css?v=123" rel="stylesheet">
		<script src="{{url()}}/js/queryloader2.min.js"></script>
		<script type="text/javascript">
			var urlBase = '{{url()}}';
			var calendario = '{{$calendario}}';
			window.addEventListener('DOMContentLoaded', function () {
				new QueryLoader2(document.querySelector("body"), {
					barColor: "#fff",
					backgroundColor: "#000",
					percentage: false,
					barHeight: 1,
					minimumTime: 200,
					maxTime: 25000,
					fadeOutTime: 1000
				});
			});
		</script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="{{url()}}/js/jquery-1.11.3.min.js"></script>
		<script src="{{url()}}/js/bootstrap.min.js"></script>
		<!--script src="{{url()}}/js/jquery.mousewheel.js"></script-->
		<script src="{{url()}}/js/jquery.slimscroll.min.js"></script>
		<script src="{{url()}}/js/jquery.fullPage.min.js"></script>
		<script src="{{url()}}/js/isotope.pkgd.min.js"></script>
		<script src="{{url()}}/js/jquery.colorbox-min.js"></script>
		<script src="{{url()}}/js/jquery.jscrollpane.min.js"></script>
		<script src="{{url()}}/js/main.js?v=123"></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-65129398-1', 'auto');
			ga('require', 'displayfeatures');
			ga('send', 'pageview');
		</script>
	</head>
	<body>
		<script>
		window.fbAsyncInit = function() {
		  FB.init({
			appId      : '706924852769429',
			xfbml      : true,
			version    : 'v2.3'
		  });
		};
		(function(d, s, id){
		   var js, fjs = d.getElementsByTagName(s)[0];
		   if (d.getElementById(id)) {return;}
		   js = d.createElement(s); js.id = id;
		   js.src = "//connect.facebook.net/es_LA/sdk.js";
		   fjs.parentNode.insertBefore(js, fjs);
		 }(document, 'script', 'facebook-jssdk'));
		</script>
		<nav class="navbar navbar-default visible-xs">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><span>#</span>viernesdezapatillas</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="#home">Home</a></li>
						<li><a href="#campana">Campaña</a></li>
						<li><a href="#calendario">Calendario</a></li>
						<li><a href="#top5">top5</a></li>
						<li><a href="#lookbook">Lookbook</a></li>
						<li><a href="https://www.youtube.com/watch?v={{$videoCampana}}" target="_blank">Ver Video</a></li>
						<li><a href="http://issuu.com/ripleyperu/docs/r-zapatillas" target="_blank">Ver Catálogo</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<div id="fullpage">
			<div class="section landing">
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-4 col-md-6 col-md-offset-3">
						<img id="hashtag" src="{{url()}}/img/landing-hashtag.png" alt="" class="center-block img-responsive">
					</div>
				</div>
			</div>
			<!-- #home -->
			<div class="section home">
				<div class="contenido">
					<div class="row visible-xs">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/la-semana-empieza-el-viernes.png" alt="" class="center-block img-responsive">
								<br>
								<img src="{{url()}}/img/whynot.png" alt="" class="center-block img-responsive">
								<br>
								<img src="{{url()}}/img/sigue-el-movimiento.png" alt="" class="center-block img-responsive">
								<br>
								<img src="{{url()}}/img/participa.png" alt="" class="center-block img-responsive">
							</p>
						</div>
					</div>
					<p class="separador hidden-xs">
						&nbsp;
					</p>
					<div class="row hidden-xs">
						<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
							<img src="{{url()}}/img/la-semana-empieza-el-viernes.png" alt="" class="center-block img-responsive">
							<br><br><br>
						</div>
					</div>
					<div class="row hidden-xs">
						<div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
							<div class="row">
								<div class="col-sm-4">
									<img src="{{url()}}/img/sigue-el-movimiento.png" alt="" class="center-block img-responsive">
								</div>
								<div class="col-sm-4">
									<img src="{{url()}}/img/whynot.png" alt="" class="center-block img-responsive">
								</div>
								<div class="col-sm-4">
									<img src="{{url()}}/img/participa.png" alt="" class="center-block img-responsive">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="menu hidden-xs">
					<div class="row no-gutter">
						<div class="col-sm-3">
							<a href="http://www.youtube.com/embed/{{$videoCampana}}?rel=0&amp;wmode=transparent" class="iframe">
								<img src="{{url()}}/img/menu-video.jpg" alt="" class="center-block img-responsive">
							</a>
						</div>
						<div class="col-sm-3">
							<a href="#calendario">
								<img src="{{url()}}/img/menu-calendario.jpg" alt="" class="center-block img-responsive">
							</a>
						</div>
						<div class="col-sm-3">
							<a href="#top5">
								<img src="{{url()}}/img/menu-top5.jpg" alt="" class="center-block img-responsive">
							</a>
						</div>
						<div class="col-sm-3">
							<a href="#lookbook">
								<img src="{{url()}}/img/menu-lookbook.jpg" alt="" class="center-block img-responsive">
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- fin #home -->
			<!-- #campana -->
			<div class="section campana">
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
						<p>
							<span class="hidden-xs"><br><br><br></span>
							<img src="{{url()}}/img/campana.jpg" alt="" class="center-block img-responsive">
							<br>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">
						<div class="row">
							<div class="col-sm-10 col-sm-offset-1" style="background-color:#fff">
								<div class="row">
									<div class="col-xs-6">
										<a href="#" class="ver-todas">
											<img src="{{url()}}/img/ver-todas.jpg" alt="" class="pull-left">
										</a>
									</div>
									<div class="col-xs-6">
										<p class="text-right">
											<img src="{{url()}}/img/ver-por.jpg" alt="">
											<a href="#" class="ver-twitter">
												<img src="{{url()}}/img/ver-twitter.jpg" alt="">
											</a>
											<a href="#" class="ver-instagram">
												<img src="{{url()}}/img/ver-instagram.jpg" alt="">
											</a>
										</p>
									</div>
								</div>
								<div id="resultados" class="grid">
									@foreach ($twitter as $image)
									@if ($image != 'http://pbs.twimg.com/media/CI_h54AXAAEExD5.jpg')
									<div class="grid-item twitter">
										<img src="{{$image}}" alt="" class="img-responsive">
									</div>
									@endif
									@endforeach
									@foreach ($instagram as $image)
									<div class="grid-item instagram">
										<img src="{{$image}}" alt="" class="img-responsive">
									</div>
									@endforeach
								</div>
								<p>
									<br>
									&nbsp;
									<br>
								</p>
								<!--p class="text-center">
									<a href="#">
										<img src="{{url()}}/img/cargar-mas-fotos.jpg" alt="" class="center-block hidden-xs">
										<img src="{{url()}}/img/cargar-mas-fotos-mobile.jpg" alt="" class="center-block visible-xs">
									</a>
								</p-->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- fin #campana -->
			<!-- #calendario -->
			<div class="section calendario">
				<p class="relleno-top hidden-xs">&nbsp;</p>
				<div class="row hidden-xs">
					<div class="hidden-sm col-md-2">
						<div class="row">
							<div class="col-sm-10 col-sm-offset-1">
								<img src="{{url()}}/img/calendario.jpg" alt="" class="center-block img-responsive" style="margin-top:30%">
							</div>
						</div>
					</div>
					<div class="col-sm-9 col-md-8">
						<div class="table-responsive scroll-pane2">
							<table class="table table-bordered">
								<tr>
									<td>
										<img src="{{url()}}/img/calendario-viernes.jpg" alt="" class="center-block img-responsive">
									</td>
									<td>
										<img src="{{url()}}/img/calendario-sabado.jpg" alt="" class="center-block img-responsive">
									</td>
									<td>
										<img src="{{url()}}/img/calendario-domingo.jpg" alt="" class="center-block img-responsive">
									</td>
									<td>
										<img src="{{url()}}/img/calendario-lunes.jpg" alt="" class="center-block img-responsive">
									</td>
									<td>
										<img src="{{url()}}/img/calendario-martes.jpg" alt="" class="center-block img-responsive">
									</td>
									<td>
										<img src="{{url()}}/img/calendario-miercoles.jpg" alt="" class="center-block img-responsive">
									</td>
									<td>
										<img src="{{url()}}/img/calendario-jueves.jpg" alt="" class="center-block img-responsive">
									</td>
								</tr>
								<tr>
									<td class="calendario">
										<a href="#" data-dia="01">
											<img src="{{url()}}/img/calendario/01.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="02">
											<img src="{{url()}}/img/calendario/02.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="03">
											<img src="{{url()}}/img/calendario/03.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="04">
											<img src="{{url()}}/img/calendario/04.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="05">
											<img src="{{url()}}/img/calendario/05.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="06">
											<img src="{{url()}}/img/calendario/06.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="07">
											<img src="{{url()}}/img/calendario/07.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
								</tr>
								<tr>
									<td class="calendario">
										<a href="#" data-dia="08">
											<img src="{{url()}}/img/calendario/08.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="09">
											<img src="{{url()}}/img/calendario/09.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="10">
											<img src="{{url()}}/img/calendario/10.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="11">
											<img src="{{url()}}/img/calendario/11.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="12">
											<img src="{{url()}}/img/calendario/12.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="13">
											<img src="{{url()}}/img/calendario/13.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="14">
											<img src="{{url()}}/img/calendario/14.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
								</tr>
								<tr>
									<td class="calendario">
										<a href="#" data-dia="15">
											<img src="{{url()}}/img/calendario/15.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="16">
											<img src="{{url()}}/img/calendario/16.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="17">
											<img src="{{url()}}/img/calendario/17.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="18">
											<img src="{{url()}}/img/calendario/18.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="19">
											<img src="{{url()}}/img/calendario/19.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="20">
											<img src="{{url()}}/img/calendario/20.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="21">
											<img src="{{url()}}/img/calendario/21.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
								</tr>
								<tr>
									<td class="calendario">
										<a href="#" data-dia="22">
											<img src="{{url()}}/img/calendario/22.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="23">
											<img src="{{url()}}/img/calendario/23.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="24">
											<img src="{{url()}}/img/calendario/24.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="25">
											<img src="{{url()}}/img/calendario/25.jpg" alt="" class="center-block">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="26">
											<img src="{{url()}}/img/calendario/26.jpg" alt="" class="center-block">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="27">
											<img src="{{url()}}/img/calendario/27.jpg" alt="" class="center-block">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="28">
											<img src="{{url()}}/img/calendario/28.jpg" alt="" class="center-block">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
								</tr>
								<tr>
									<td class="calendario">
										<a href="#" data-dia="29">
											<img src="{{url()}}/img/calendario/29.jpg" alt="" class="center-block">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="30">
											<img src="{{url()}}/img/calendario/30.jpg" alt="" class="center-block">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="31">
											<img src="{{url()}}/img/calendario/31.jpg" alt="" class="center-block">
										</a>
										<img src="{{url()}}/img/ayuda.jpg" alt="" class="ayuda" style="display:none">
									</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-sm-3 col-md-2">
						<p class="look vacio">
							&nbsp;
						</p>
						<p class="zapatilla">
							<img src="{{url()}}/img/zapatillas/zapatilla-01.jpg" alt="" class="center-block img-responsive">
							<br>
						</p>
						<p class="compartir text-center" style="display:none">
							<a href="#" class="compartir-facebook" data-imagen="" data-texto="">
								<img src="{{url()}}/img/compartir-facebook.png" alt="">
							</a>
							&nbsp;
							<a href="#" class="compartir-twitter" target="_blank">
								<img src="{{url()}}/img/compartir-twitter.png" alt="">
							</a>
							<br><br>
							<img src="{{url()}}/img/comparte.png" alt="">
						</p>
					</div>
				</div>
				<div class="visible-xs">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-01.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-01.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-01.jpg" data-texto="¡Arma tu look con estas zapatillas! MARQUIS PELO ZULEMA S/. 129 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20MARQUIS%20PELO%20ZULEMA%20S/.129%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-02.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-02.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-02.jpg" data-texto="¡Arma tu look con estas zapatillas! INDEX LAURAP S/. 69.90 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20INDEX%20LAURAP%20S/.69.9%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-03.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-03.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-03.jpg" data-texto="¡Arma tu look con estas zapatillas! SKECHERS S/. 320 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20SKECHERS%20S/.320%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-04.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-04.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-04.jpg" data-texto="¡Arma tu look con estas zapatillas! INDEX LAURA QUILT S/. 69.90 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20INDEX%20LAURA%20QUILT%20S/.69.9%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-05.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-05.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-05.jpg" data-texto="¡Arma tu look con estas zapatillas! POE BURNISH BRIGHTS S/. 379 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20POE%20BURNISH%20BRIGHTS%20S/.379%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-06.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-06.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-06.jpg" data-texto="¡Arma tu look con estas zapatillas! PUMA VIKKY WEDGE S/. 269 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20PUMA%20VIKKY%20WEDGE%20S/.269%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-07.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-07.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-07.jpg" data-texto="¡Arma tu look con estas zapatillas! ADIDAS PLIMCANA LOW S/. 249 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20ADIDAS%20PLIMCANA%20LOW%20S/.249%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-08.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-08.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-08.jpg" data-texto="¡Arma tu look con estas zapatillas! CONVERSE CHUCK TAYLOR ALL STAR S/. 189 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20CONVERSE%20CHUCK%20TAYLOR%20S/.189%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-09.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-09.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-09.jpg" data-texto="¡Arma tu look con estas zapatillas! NIKE PROMO COURT S/. 229 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20NIKE%20PROMO%20COURT%20S/.229%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-10.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-10.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-10.jpg" data-texto="¡Arma tu look con estas zapatillas! NIKE PRIMO COURT MID CVS PRINT S/. 259 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20NIKE%20PRIMO%20COURT%20MID%20S/.259%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-11.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-11.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-11.jpg" data-texto="¡Arma tu look con estas zapatillas! ADIDAS PLIMCANA S/. 259 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20ADIDAS%20PLIMCANA%20S/.259%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-12.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-12.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-12.jpg" data-texto="¡Arma tu look con estas zapatillas! CONVERSE CHUCK TAYLOR ALL STAR S/. 189 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20CONVERSE%20CHUCK%20TAYLOR%20S/.189%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-13.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-13.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-13.jpg" data-texto="¡Arma tu look con estas zapatillas! NEW BALANCE GRIS S/. 249 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20NEW%20BALANCE%20GRIS%20S/.249%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-14.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-14.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-14.jpg" data-texto="¡Arma tu look con estas zapatillas! SKECHERS S/. 280 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20SKECHERS%20S/.280%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-15.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-15.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-15.jpg" data-texto="¡Arma tu look con estas zapatillas! CATERPILLAR ZIMZALA MID S/. 349 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20CATERPILLAR%20ZIMZALA%20MID%20S/.349%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-16.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-16.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-16.jpg" data-texto="¡Arma tu look con estas zapatillas! NIKE FORCE SKY HIGH PRINT S/. 299 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20NIKE%20FORCE%20SKY%20HIGH%20PRINT%20S/.299%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-17.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-17.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-17.jpg" data-texto="¡Arma tu look con estas zapatillas! GOTCHA GT-1510 S/. 129 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20GOTCHA%20GT-1507%20S/.129%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-18.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-18.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-18.jpg" data-texto="¡Arma tu look con estas zapatillas! INDEX LAURAQUILT S/. 69.90 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20INDEX%20LAURAQUILT%20S/.69.9%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-19.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-19.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-19.jpg" data-texto="¡Arma tu look con estas zapatillas! ANVIL TX SE S/. 279 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20ANVIL%20TX%20SE%20S/.279%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-20.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-20.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-20.jpg" data-texto="¡Arma tu look con estas zapatillas! REEBOK SKYSCAPE S/. 199 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20REEBOK%20SKYSCAPE%20S/.199%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-21.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-21.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-21.jpg" data-texto="¡Arma tu look con estas zapatillas! DC Counsil SD S/. 279 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20DC%20Counsil%20SD%20S/.279%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-22.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-22.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-22.jpg" data-texto="¡Arma tu look con estas zapatillas! PUMA FTR TF-RACER S/. 189 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20PUMA%20FTR%20TF-RACER%20S/.189%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-23.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-23.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-23.jpg" data-texto="¡Arma tu look con estas zapatillas! PUMA FTR TF- RACER S/. 189 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20PUMA%20FTR%20TF-%20RACER%20S/.189%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-24.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-24.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-24.jpg" data-texto="¡Arma tu look con estas zapatillas! ADIDAS RACER LITE W S/. 239 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20ADIDAS%20RACER%20LITE%20W%20S/.239%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-25.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-25.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-25.jpg" data-texto="¡Arma tu look con estas zapatillas! NIKE FIEID TRAINER LEATHER S/. 269 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20NIKE%20FIEID%20TRAINER%20LEATHER%20S/.269%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-26.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-26.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-26.jpg" data-texto="¡Arma tu look con estas zapatillas! NEW BALANCE S/. 229 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20NEW%20BALANCE%20S/.229%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-27.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-27.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-27.jpg" data-texto="¡Arma tu look con estas zapatillas! REEBOK GT1510 S/. 129 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20REEBOK%20GT1510%20S/.129%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-28.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-28.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-28.jpg" data-texto="¡Arma tu look con estas zapatillas! NEW BALANCE S/. 239 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20NEW%20BALANCE%20S/.239%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-29.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-29.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-29.jpg" data-texto="¡Arma tu look con estas zapatillas! ADIDAS ZX FLUX S/. 29 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20ADIDAS%20ZX%20FLUX%20S/.29%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/zapatillas/look-30.jpg" alt="" class="center-block img-responsive">
								<img src="{{url()}}/img/zapatillas/zapatilla-30.jpg" alt="" class="center-block img-responsive">
								<br>
							</p>
							<p class="text-center">
								<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/zapatillas/look-30.jpg" data-texto="¡Arma tu look con estas zapatillas! NEW BALANCE S/. 159 Descubre más en www.viernesdezapatillas.pe #Ripley #viernesdezapatillas">
									<img src="{{url()}}/img/compartir-facebook.png" alt="">
								</a>
								&nbsp;
								<a href="https://twitter.com/home?status=%C2%A1Arma%20tu%20look%20con%20estas%20zapatillas!%20NEW%20BALANCE%20S/.159%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" class="compartir-twitter" target="_blank">
									<img src="{{url()}}/img/compartir-twitter.png" alt="">
								</a>
								<br><br>
								<img src="{{url()}}/img/comparte.png" alt="">
							</p>
						</div>
					</div>
				</div>
				<p class="relleno-bottom">&nbsp;</p>
			</div>
			<!-- fin calendario -->
			<!-- top5 -->
			<div class="section top5">
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">
						<img src="{{url()}}/img/top5.png" alt="" class="center-block img-responsive">
						<br>
					</div>
				</div>
				<div class="container-fluid blanco hidden-xs">
					<div class="container">
						<div class="row no-gutter">
							<div id="top5-col-1" class="col-sm-2 col-sm-offset-1">
								<a id="boton-prenda-1" href="#" class="top5-prenda" data-prenda="1">
									<img src="{{url()}}/img/top5/01.jpg" alt="" class="img-responsive center-block">
								</a>
							</div>
							<div id="top5-col-2" class="col-sm-2">
								<a id="boton-prenda-2" href="#" class="top5-prenda" data-prenda="2">
									<img src="{{url()}}/img/top5/02.jpg" alt="" class="img-responsive center-block">
								</a>
							</div>
							<div id="top5-col-3" class="col-sm-2">
								<a id="boton-prenda-3" href="#" class="top5-prenda" data-prenda="3">
									<img src="{{url()}}/img/top5/03.jpg" alt="" class="img-responsive center-block">
								</a>
							</div>
							<div id="top5-col-4" class="col-sm-2">
								<a id="boton-prenda-4" href="#" class="top5-prenda" data-prenda="4">
									<img src="{{url()}}/img/top5/04.jpg" alt="" class="img-responsive center-block">
								</a>
							</div>
							<div id="top5-col-5" class="col-sm-2">
								<a id="boton-prenda-5" href="#" class="top5-prenda" data-prenda="5">
									<img src="{{url()}}/img/top5/05.jpg" alt="" class="img-responsive center-block">
								</a>
							</div>
							<div id="top5-col-6" class="col-sm-9" style="display:none">
								<img src="{{url()}}/img/cerrar-top5.jpg" alt="" class="cerrar-top5" data-prenda="">
								<div></div>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid amarillo hidden-xs">
					<div class="container">
						<div class="row no-gutter">
							<div class="col-sm-2 col-sm-offset-1">
								<a href="#" class="boton-top5-prenda" data-prenda="1">
									<img id="top5-1" src="{{url()}}/img/top5-1.png" alt="" class="top5-numero img-responsive center-block">
								</a>
							</div>
							<div class="col-sm-2">
								<a href="#" class="boton-top5-prenda" data-prenda="2">
									<img id="top5-2" src="{{url()}}/img/top5-2.png" alt="" class="top5-numero img-responsive center-block">
								</a>
							</div>
							<div class="col-sm-2">
								<a href="#" class="boton-top5-prenda" data-prenda="3">
									<img id="top5-3" src="{{url()}}/img/top5-3.png" alt="" class="top5-numero img-responsive center-block">
								</a>
							</div>
							<div class="col-sm-2">
								<a href="#" class="boton-top5-prenda" data-prenda="4">
									<img id="top5-4" src="{{url()}}/img/top5-4.png" alt="" class="top5-numero img-responsive center-block">
								</a>
							</div>
							<div class="col-sm-2">
								<a href="#" class="boton-top5-prenda" data-prenda="5">
									<img id="top5-5" src="{{url()}}/img/top5-5.png" alt="" class="top5-numero img-responsive center-block">
								</a>
							</div>
						</div>
					</div>
				</div>
			<!--	<div class="visible-xs">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/top5/01.gif" alt="" class="img-responsive center-block">
								<br>
								<img src="{{url()}}/img/top5/zapatilla-1.jpg" alt="" class="img-responsive center-block">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/top5/02.gif" alt="" class="img-responsive center-block">
								<br>
								<img src="{{url()}}/img/top5/zapatilla-2.jpg" alt="" class="img-responsive center-block">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/top5/03.gif" alt="" class="img-responsive center-block">
								<br>
								<img src="{{url()}}/img/top5/zapatilla-3.jpg" alt="" class="img-responsive center-block">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/top5/04.gif" alt="" class="img-responsive center-block">
								<br>
								<img src="{{url()}}/img/top5/zapatilla-4.jpg" alt="" class="img-responsive center-block">
							</p>
						</div>
					</div>
					<hr class="separador">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<p class="text-center">
								<img src="{{url()}}/img/top5/05.gif" alt="" class="img-responsive center-block">
								<br>
								<img src="{{url()}}/img/top5/zapatilla-5.jpg" alt="" class="img-responsive center-block">
							</p>
						</div>
					</div>
					<p>
						<br><br><br><br><br><br>
					</p>
				</div> -->
			</div>
			<!-- fin top5 -->
			<!-- lookbook -->
			<div class="section lookbook">
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">
						<img src="{{url()}}/img/combinalas-todas.png" alt="" class="center-block img-responsive">
					</div>
				</div>
				<div id="lookbook-container" class="container scroll-pane">
					<div class="row no-gutter">
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/01.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="1">
						</div>
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/02.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="2">
						</div>
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/03.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="3">
						</div>
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/04.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="4">
						</div>
					</div>
					<div class="row no-gutter">
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/05.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="5">
						</div>
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/06.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="6">
						</div>
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/07.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="7">
						</div>
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/08.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="8">
						</div>
					</div>
					<div class="row no-gutter">
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/09.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="9">
						</div>
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/12.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="12">
						</div>
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/11.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="11">
						</div>
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/10.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="10">
						</div>
					</div>
					<div class="row no-gutter">
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/14.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="14">
						</div>
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/13.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="13">
						</div>
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/16.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="16">
						</div>
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/15.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="15">
						</div>
					</div>
					<div class="row no-gutter">
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/17.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="17">
						</div>
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/18.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="18">
						</div>
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/19.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="19">
						</div>
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/20.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="20">
						</div>
					</div>
					<div class="row no-gutter">
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/21.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="21">
						</div>
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/22.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="22">
						</div>
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/23.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="23">
						</div>
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/24.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="24">
						</div>
					</div>
					<div class="row no-gutter">
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/25.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="25">
						</div>
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/26.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="26">
						</div>
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/30.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="30">
						</div>
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/28.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="28">
						</div>
					</div>
					<div class="row no-gutter">
						<div class="col-sm-3 col-sm-offset-3">
							<img src="{{url()}}/img/lookbook/27.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="27">
						</div>
						<div class="col-sm-3">
							<img src="{{url()}}/img/lookbook/29.jpg" alt="" class="lookbook-prenda img-responsive center-block" data-prenda="29">
						</div>
					</div>
					<p class="visible-xs">
						<br><br><br><br>
					</p>
				</div>
			</div>
			<!-- fin lookbook -->
		</div>
		<a id="bajar" href="#">
			<img src="{{url()}}/img/navegar.png" alt="" class="hidden-xs">
			<img src="{{url()}}/img/navegar-mobile.png" alt="" class="visible-xs">
		</a>
		<a id="subir" href="#">
			<img src="{{url()}}/img/navegar.png" alt="" class="hidden-xs">
			<img src="{{url()}}/img/navegar-mobile.png" alt="" class="visible-xs">
		</a>
		<div class="barra-menu hidden-xs">
			<a href="//e.issuu.com/embed.html#0/13930906" class="iframe">catálogo</a>
			<a id="menu-campana" href="#campana">campaña</a>
			<a id="menu-calendario" href="#calendario">calendario</a>
			<a id="menu-top5" href="#top5">top5</a>
			<a id="menu-lookbook" href="#lookbook">lookbook</a>
		</div>
		<footer class="container-fluid">
			<section class="row">
				<div class="col-xs-6">
					<p>
						<img src="{{url()}}/img/footer-siguenos.png" alt="" class="hidden-xs">
						<a href="https://www.facebook.com/RipleyPeru" target="_blank">
							<img src="{{url()}}/img/footer-facebook.png" alt="">
						</a>
						<a href="https://twitter.com/ripleyenperu" target="_blank">
							<img src="{{url()}}/img/footer-twitter.png" alt="">
						</a>
						<a href="https://www.pinterest.com/ripleyperu/" target="_blank">
							<img src="{{url()}}/img/footer-pinterest.png" alt="">
						</a>
						<a href="https://plus.google.com/+ripleyperu/posts" target="_blank">
							<img src="{{url()}}/img/footer-googleplus.png" alt="">
						</a>
						<a href="https://instagram.com/ripleyperu/" target="_blank">
							<img src="{{url()}}/img/footer-instagram.png" alt="">
						</a>
					</p>
				</div>
				<div class="col-xs-6">
					<p class="text-right">
						<img src="{{url()}}/img/footer-ripley.png" alt="" class="img-responsive" style="display:inline">
					</p>
				</div>
			</section>
		</footer>
		<div class="hidden" style="display:none">
			@for ($i = 1; $i <= 31; $i++)
			<img src="{{url()}}/img/zapatillas/look-{{substr('0'.$i, -2)}}.jpg" alt="">
			<img src="{{url()}}/img/zapatillas/zapatilla-{{substr('0'.$i, -2)}}.jpg" alt="">
			@endfor
			<img src="{{url()}}/img/top5/zapatilla-1.jpg" alt="">
			<img src="{{url()}}/img/top5/zapatilla-2.jpg" alt="">
			<img src="{{url()}}/img/top5/zapatilla-3.jpg" alt="">
			<img src="{{url()}}/img/top5/zapatilla-4.jpg" alt="">
			<img src="{{url()}}/img/top5/zapatilla-5.jpg" alt="">
			<img src="{{url()}}/img/top5/01.jpg" alt="">
			<img src="{{url()}}/img/top5/02.jpg" alt="">
			<img src="{{url()}}/img/top5/03.jpg" alt="">
			<img src="{{url()}}/img/top5/04.jpg" alt="">
			<img src="{{url()}}/img/top5/05.jpg" alt="">
			<div id="lookbook-detalle-1" class="lookbook-detalle amarillo">
				<p class="text-center">
					<a href="http://camillewalala.com/" target="_blank">
						<img src="{{url()}}/img/lookbook/01.jpg" alt="" class="img-responsive center-block">
					</a>
					<br>
					CAT ZAPATILLA MARI CANVAS WALALA<br>
					17001556 - S/. 299
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/01.jpg" data-texto="¡Me fascinaron estas zapatillas! CAT MARI CANVAS WALALA S/.299 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20CAT%20MARI%20CANVAS%20WALALA%20S/.299%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			<div id="lookbook-detalle-4" class="lookbook-detalle blanco">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/04.jpg" alt="" class="img-responsive center-block">
					<br>
					CONVERSE ZAPATILLA STAR PLAYER 147460C<br>
					16994724 - S/. 199
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/04.jpg" data-texto="¡Me fascinaron estas zapatillas! CONVERSE STAR PLAYER S/.199 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20CONVERSE%20STAR%20PLAYER%20S/.199%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			<div id="lookbook-detalle-8" class="lookbook-detalle beige">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/08.jpg" alt="" class="img-responsive center-block">
					<br>
					ADIDAS ZAPATILLA PLIMCANA 2.0 LOW<br>
					16864891 - S/. 259
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/08.jpg" data-texto="¡Me fascinaron estas zapatillas! ADIDAS PLIMCANA 2.0 LOW S/.259 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20ADIDAS%20PLIMCANA%202.0%20LOW%20S/.259%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			<div id="lookbook-detalle-14" class="lookbook-detalle amarillo">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/14.jpg" alt="" class="img-responsive center-block">
					<br>
					REEBOK ZAPATILLA SKYSCAPE RUNAROUND 2.0<br>
					16850633 - S/. 199
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/14.jpg" data-texto="¡Me fascinaron estas zapatillas! REEBOK SKYSCAPE RUNAROUND 2.0 S/.199 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20REEBOK%20SKYSCAPE%20RUNAROUND%202.0%20S/.199%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			
			<div id="lookbook-detalle-18" class="lookbook-detalle blanco">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/18.jpg" alt="" class="img-responsive center-block">
					<br>
					NIKE ZAPATILLA PRIMO COURT MID CVS PRINT<br>
					16997187 - S/. 259
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/18.jpg" data-texto="¡Me fascinaron estas zapatillas! NIKE PRIMO COURT MID CVS PRINT S/.259 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20NIKE%20PRIMO%20COURT%20MID%20CVS%20PRINT%20S/.259%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			<div id="lookbook-detalle-21" class="lookbook-detalle beige">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/21.jpg" alt="" class="img-responsive center-block">
					<br>
					DC ZAPATILLA TROSE TX<br>
					16980205 - S/. 169
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/21.jpg" data-texto="¡Me fascinaron estas zapatillas! DC ZAPATILLA TROSE TX S/.169 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20DC%20TROSE%20TX%20S/.169%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			<div id="lookbook-detalle-24" class="lookbook-detalle blanco">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/24.jpg" alt="" class="img-responsive center-block">
					<br>
					INDEX ZAPATILLA LAURA QUILT<br>
					16668962 - S/. 69.90
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/24.jpg" data-texto="¡Me fascinaron estas zapatillas! INDEX LAURA QUILT S/.69.90 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20INDEX%20LAURA%20QUILT%20S/.69.90%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			<div id="lookbook-detalle-28" class="lookbook-detalle amarillo">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/28.jpg" alt="" class="img-responsive center-block">
					<br>
					NEW BALANCE ZAPATILLA WL420DFA<br>
					17000538 - S/. 239
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/28.jpg" data-texto="¡Me fascinaron estas zapatillas! NEW BALANCE WL420DFA S/.239 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20NEW%20BALANCE%20WL420DFA%20S/.239%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			
			<div id="lookbook-detalle-2" class="lookbook-detalle blanco">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/02.jpg" alt="" class="img-responsive center-block">
					<br>
					CAT ZAPATILLA POE BURNISH BRIGHTS<br>
					16996497 - S/. 379
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/02.jpg" data-texto="¡Me fascinaron estas zapatillas! CAT ZAPATILLA POE BURNISH BRIGHTS S/.379 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20CAT%20POE%20BURNISH%20BRIGHTS%20S/.379%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			<div id="lookbook-detalle-5" class="lookbook-detalle morado">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/05.jpg" alt="" class="img-responsive center-block">
					<br>
					CONVERSE ZAPATILLA CHUCK TAYLOR ALL STAR 547259C<br>
					16992986 - S/. 199
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/05jpg" data-texto="¡Me fascinaron estas zapatillas! CONVERSE CHUCK TAYLOR ALL STAR S/.199 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20CONVERSE%20CHUCK%20TAYLOR%20ALL%20STAR%20S/.199%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			<div id="lookbook-detalle-9" class="lookbook-detalle blanco">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/09.jpg" alt="" class="img-responsive center-block">
					<br>
					ADIDAS ZAPATILLA PLIMCANA LOW<br>
					16748062 - S/. 249
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/9.jpg" data-texto="¡Me fascinaron estas zapatillas! ADIDAS PLIMCANA LOW S/.249 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20ADIDAS%20PLIMCANA%20LOW%20S/.249%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			<div id="lookbook-detalle-12" class="lookbook-detalle rosa">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/12.jpg" alt="" class="img-responsive center-block">
					<br>
					PUMA ZAPATILLA ELSU SL<br>
					16995230 - S/. 149
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/12.jpg" data-texto="¡Me fascinaron estas zapatillas! PUMA ZAPATILLA ELSU S/.149 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20PUMA%20ELSU%20S/.149%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			
			<div id="lookbook-detalle-15" class="lookbook-detalle blanco">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/15.jpg" alt="" class="img-responsive center-block">
					<br>
					REEBOK ZAPATILLA ROYAL COMPLETE<br>
					16811802 - S/. 169
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/15.jpg" data-texto="¡Me fascinaron estas zapatillas! REEBOK ROYAL COMPLETE S/.169 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20REEBOK%20ROYAL%20COMPLETE%20S/.169%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			<div id="lookbook-detalle-22" class="lookbook-detalle blanco">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/22.jpg" alt="" class="img-responsive center-block">
					<br>
					DC ZAPATILLA CRISIS<br>
					16980150 - S/. 259
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/22.jpg" data-texto="¡Me fascinaron estas zapatillas! DC CRISIS S/.259 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20DC%20CRISIS%20S/.259%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			<div id="lookbook-detalle-25" class="lookbook-detalle morado">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/25.jpg" alt="" class="img-responsive center-block">
					<br>
					INDEX ZAPATILLA ARCHIE<br>
					16567278 - S/. 59.90
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/25.jpg" data-texto="¡Me fascinaron estas zapatillas! INDEX ARCHIE S/.59.90 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20INDEX%20ARCHIE%20S/.59.90%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			<div id="lookbook-detalle-30" class="lookbook-detalle azul">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/30.jpg" alt="" class="img-responsive center-block">
					<br>
					NEW BALANCE ZAPATILLA NBL U410 CC<br>
					16979924 - S/. 199
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/30.jpg" data-texto="¡Me fascinaron estas zapatillas! NEW BALANCE NBL U410 CC S/.199 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20NEW%20BALANCE%20NBL%20U410%20CC%20S/.199%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			
			<div id="lookbook-detalle-3" class="lookbook-detalle blanco">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/03.jpg" alt="" class="img-responsive center-block">
					<br>
					CAT ZAPATILLA POE SIMPLY<br>
					16996505 - S/. 379
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/3.jpg" data-texto="¡Me fascinaron estas zapatillas! CAT POE SIMPLY S/.379 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20CAT%20POE%20SIMPLY%20S/.379%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			<div id="lookbook-detalle-6" class="lookbook-detalle blanco">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/06.jpg" alt="" class="img-responsive center-block">
					<br>
					CONVERSE ZAPATILLA CHUCK TAYLOR ALL STAR 547289C<br>
					16993011 - S/. 189
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/06.jpg" data-texto="¡Me fascinaron estas zapatillas! CONVERSE CHUCK TAYLOR ALL STAR S/.189 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20CONVERSE%20CHUCK%20TAYLOR%20ALL%20STAR%20S/.189%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			<div id="lookbook-detalle-10" class="lookbook-detalle amarillo">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/10.jpg" alt="" class="img-responsive center-block">
					<br>
					ADIDAS ZAPATILLA M19480 ADRIA LOW<br>
					16964229 - S/. 229
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/10.jpg" data-texto="¡Me fascinaron estas zapatillas! ADIDAS ADRIA LOW S/.229 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20ADIDAS%20ADRIA%20LOW%20S/.229%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			<div id="lookbook-detalle-16" class="lookbook-detalle rosa">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/16.jpg" alt="" class="img-responsive center-block">
					<br>
					REEBOK ZAPATILLA ROYAL CCJOGGER<br>
					16663744 - S/. 169
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/16.jpg" data-texto="¡Me fascinaron estas zapatillas! REEBOK ROYAL CCJOGGER S/.169 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20REEBOK%20ROYAL%20CCJOGGER%20S/.169%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			
			<div id="lookbook-detalle-19" class="lookbook-detalle blanco">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/19.jpg" alt="" class="img-responsive center-block">
					<br>
					NIKE ZAPATILLA EASTHAM MID<br>
					16997073 - S/. 299
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/19.jpg" data-texto="¡Me fascinaron estas zapatillas! NIKE EASTHAM MID S/.299 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20NIKE%20EASTHAM%20MID%20S/.299%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			<div id="lookbook-detalle-26" class="lookbook-detalle blanco">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/26.jpg" alt="" class="img-responsive center-block">
					<br>
					INDEX ZAPATILLA BRUNO<br>
					16625172 - S/. 79.90
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/26.jpg" data-texto="¡Me fascinaron estas zapatillas! INDEX BRUNO S/.79.90 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20INDEX%20BRUNO%20S/.79.90%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			<div id="lookbook-detalle-27" class="lookbook-detalle amarillo">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/27.jpg" alt="" class="img-responsive center-block">
					<br>
					INDEX ZAPATILLA NADI<br>
					16791638 - S/. 69.90
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/27.jpg" data-texto="¡Me fascinaron estas zapatillas! INDEX NADI S/.69.90 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20INDEX%20NADI%20S/.69.90%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			<div id="lookbook-detalle-7" class="lookbook-detalle rosa">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/07.jpg" alt="" class="img-responsive center-block">
					<br>
					CONVERSE ZAPATILLA STAR PLAYER 147461C<br>
					16994733 - S/. 199
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/07.jpg" data-texto="¡Me fascinaron estas zapatillas! CONVERSE STAR PLAYER S/.199 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20CONVERSE%20STAR%20PLAYER%20S/.199%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			
			<div id="lookbook-detalle-11" class="lookbook-detalle blanco">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/11.jpg" alt="" class="img-responsive center-block">
					<br>
					ADIDAS ZAPATILLA ZX-700 BELOW M19384<br>
					16900821 - S/. 229
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/11.jpg" data-texto="¡Me fascinaron estas zapatillas! ADIDAS ZX-700 BELOW S/.229 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20ADIDAS%20ZX-700%20BELOW%20S/.229%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			<div id="lookbook-detalle-13" class="lookbook-detalle azul">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/13.jpg" alt="" class="img-responsive center-block">
					<br>
					PUMA ZAPATILLA FTR TF-RACER<br>357624 05<br>
					16991363 - S/. 189
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/13.jpg" data-texto="¡Me fascinaron estas zapatillas! PUMA FTR TF-RACER S/.189 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20PUMA%20FTR%20TF-RACER%20S/.189%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			<div id="lookbook-detalle-17" class="lookbook-detalle blanco">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/17.jpg" alt="" class="img-responsive center-block">
					<br>
					REEBOK ZAPATILLA ROYAL JENSTALL M46859<br>
					16685797 - S/. 129
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/17.jpg" data-texto="¡Me fascinaron estas zapatillas! REEBOK ROYAL JENSTALL S/.129 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20REEBOK%20ROYAL%20JENSTALL%20S/.129%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			<div id="lookbook-detalle-20" class="lookbook-detalle rosa">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/20.jpg" alt="" class="img-responsive center-block">
					<br>
					NIKE ZAPATILLA EASTHAM<br>
					16997062 - S/. 289
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/20.jpg" data-texto="¡Me fascinaron estas zapatillas! NIKE EASTHAM S/.289 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20NIKE%20EASTHAM%20S/.289%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			
			<div id="lookbook-detalle-23" class="lookbook-detalle blanco">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/23.jpg" alt="" class="img-responsive center-block">
					<br>
					GOTCHA ZAPATILLA GT-1507<br>
					16653936 - S/. 129
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/23.jpg" data-texto="¡Me fascinaron estas zapatillas! GOTCHA GT-1507 S/.129 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20GOTCHA%20GT-1507%20S/.129%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
			<div id="lookbook-detalle-29" class="lookbook-detalle blanco">
				<p class="text-center">
					<img src="{{url()}}/img/lookbook/29.jpg" alt="" class="img-responsive center-block">
					<br>
					NEW BALANCE ZAPATILLA ML400SNF<br>
					16986608 - S/. 159
				</p>
				<p class="text-center">
					<a href="#" class="compartir-facebook" data-imagen="{{url()}}/img/lookbook/29.jpg" data-texto="¡Me fascinaron estas zapatillas! NEW BALANCE ML400SNF S/.159 Descubre más en www.viernesdezapatillas.pe #Moda #Ripley #viernesdezapatillas">
						<img src="{{url()}}/img/lookbook-compartir-facebook.png" alt="">
					</a>
					<a href="https://twitter.com/home?status=%C2%A1Me%20encantaron%20estas%20zapatillas!%20NEW%20BALANCE%20ML400SNF%20S/.159%20Descubre%20m%C3%A1s%20en%20viernesdezapatillas.pe%20%23Ripley%20%23viernesdezapatillas" target="_blank">
						<img src="{{url()}}/img/lookbook-compartir-twitter.png" alt="">
					</a>
					<br>
					<img src="{{url()}}/img/lookbook-compartela.png" alt="">
				</p>
			</div>
		</div>
		
	</body>
</html>