<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>#viernesdezapatillas</title>
		<link href="{{url()}}/css/animate.css" rel="stylesheet">
		<link href="{{url()}}/css/bootstrap.min.css" rel="stylesheet">
		<link href="{{url()}}/css/jquery.fullPage.css" rel="stylesheet">
		<link href="{{url()}}/css/colorbox.css" rel="stylesheet">
		<link href="{{url()}}/css/main.css" rel="stylesheet">
		<script src="{{url()}}/js/queryloader2.min.js"></script>
		<script type="text/javascript">
			var urlBase = '{{url()}}';
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
		<script src="{{url()}}/js/jquery.slimscroll.min.js"></script>
		<script src="{{url()}}/js/jquery.fullPage.min.js"></script>
		<script src="{{url()}}/js/isotope.pkgd.min.js"></script>
		<script src="{{url()}}/js/jquery.colorbox-min.js"></script>
		<script src="{{url()}}/js/main.js"></script>
	</head>
	<body>
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
						<li><a href="#landing">Landing</a></li>
						<li><a href="#home">Home</a></li>
						<li><a href="https://www.youtube.com/watch?v={{$videoCampana}}" target="_blank">Campaña</a></li>
						<li><a href="#calendario">Calendario</a></li>
						<li><a href="#top5">top5</a></li>
						<li><a href="#lookbook">Lookbook</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<div id="fullpage">
			<div class="section landing">
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
						<img id="hashtag" src="{{url()}}/img/landing-hashtag.png" alt="" class="center-block img-responsive">
					</div>
				</div>
			</div>
			<div class="section home">
				<div class="contenido">
					<div class="row visible-xs">
						<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
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
						<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
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
							<a href="http://www.youtube.com/embed/{{$videoCampana}}?rel=0&amp;wmode=transparent" class="youtube">
								<img src="{{url()}}/img/menu-campana.jpg" alt="" class="center-block img-responsive">
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
			<div class="section campana">
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">
						<p>
							<span class="hidden-xs"><br><br><br></span>
							<img src="{{url()}}/img/campana.jpg" alt="" class="center-block img-responsive">
							<br><br>
						</p>
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<div class="row">
									<div class="col-xs-6">
										<a href="#">
											<img src="{{url()}}/img/ver-todas.jpg" alt="" class="pull-left">
										</a>
									</div>
									<div class="col-xs-6">
										<p class="text-right">
											<img src="{{url()}}/img/ver-por.jpg" alt="">
											<a href="#">
												<img src="{{url()}}/img/ver-twitter.jpg" alt="">
											</a>
											<a href="#">
												<img src="{{url()}}/img/ver-instagram.jpg" alt="">
											</a>
										</p>
									</div>
								</div>
								<div id="resultados" class="grid">
									
								</div>
								<p class="text-center">
									<a href="#">
										<img src="{{url()}}/img/cargar-mas-fotos.jpg" alt="" class="center-block hidden-xs">
										<img src="{{url()}}/img/cargar-mas-fotos-mobile.jpg" alt="" class="center-block visible-xs">
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section calendario">
				<p class="relleno-top">&nbsp;</p>
				<div class="row">
					<div class="hidden-xs col-sm-3">
						<img src="{{url()}}/img/calendario.jpg" alt="" class="center-block img-responsive" style="margin-top:30%">
					</div>
					<div class="col-xs-9 col-sm-6">
						<div class="table-responsive">
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
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="02">
											<img src="{{url()}}/img/calendario/02.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="03">
											<img src="{{url()}}/img/calendario/03.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="04">
											<img src="{{url()}}/img/calendario/04.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="05">
											<img src="{{url()}}/img/calendario/05.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="06">
											<img src="{{url()}}/img/calendario/06.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="07">
											<img src="{{url()}}/img/calendario/07.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda izquierda" style="display:none">
									</td>
								</tr>
								<tr>
									<td class="calendario">
										<a href="#" data-dia="08">
											<img src="{{url()}}/img/calendario/08.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="09">
											<img src="{{url()}}/img/calendario/09.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="10">
											<img src="{{url()}}/img/calendario/10.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="11">
											<img src="{{url()}}/img/calendario/11.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="12">
											<img src="{{url()}}/img/calendario/12.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="13">
											<img src="{{url()}}/img/calendario/13.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="14">
											<img src="{{url()}}/img/calendario/14.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda izquierda" style="display:none">
									</td>
								</tr>
								<tr>
									<td class="calendario">
										<a href="#" data-dia="15">
											<img src="{{url()}}/img/calendario/15.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="16">
											<img src="{{url()}}/img/calendario/16.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="17">
											<img src="{{url()}}/img/calendario/17.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="18">
											<img src="{{url()}}/img/calendario/18.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="19">
											<img src="{{url()}}/img/calendario/19.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="20">
											<img src="{{url()}}/img/calendario/20.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="21">
											<img src="{{url()}}/img/calendario/21.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda izquierda" style="display:none">
									</td>
								</tr>
								<tr>
									<td class="calendario">
										<a href="#" data-dia="22">
											<img src="{{url()}}/img/calendario/22.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="23">
											<img src="{{url()}}/img/calendario/23.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="24">
											<img src="{{url()}}/img/calendario/24.jpg" alt="" class="center-block img-responsive">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="25">
											<img src="{{url()}}/img/calendario/25.jpg" alt="" class="center-block">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="26">
											<img src="{{url()}}/img/calendario/26.jpg" alt="" class="center-block">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="27">
											<img src="{{url()}}/img/calendario/27.jpg" alt="" class="center-block">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="28">
											<img src="{{url()}}/img/calendario/28.jpg" alt="" class="center-block">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda izquierda" style="display:none">
									</td>
								</tr>
								<tr>
									<td class="calendario">
										<a href="#" data-dia="29">
											<img src="{{url()}}/img/calendario/29.jpg" alt="" class="center-block">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="30">
											<img src="{{url()}}/img/calendario/30.jpg" alt="" class="center-block">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
									<td class="calendario">
										<a href="#" data-dia="31">
											<img src="{{url()}}/img/calendario/31.jpg" alt="" class="center-block">
										</a>
										<img src="{{url()}}/img/ayuda.png" alt="" class="ayuda" style="display:none">
									</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-xs-3">
						<p class="look vacio">
							&nbsp;
						</p>
						<p class="zapatilla">
							<img src="{{url()}}/img/zapatillas/zapatilla-01.jpg" alt="" class="center-block img-responsive">
							<br>
						</p>
						<p class="compartir text-center">
							<img src="{{url()}}/img/compartir-facebook.png" alt="">
							&nbsp;
							<img src="{{url()}}/img/compartir-twitter.png" alt="">
							<br><br>
							<img src="{{url()}}/img/comparte.png" alt="">
						</p>
					</div>
				</div>
				<p class="relleno-bottom">&nbsp;</p>
			</div>
			<div class="section">
				top5
			</div>
			<div class="section">
				lookbook
			</div>
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
	</body>
</html>