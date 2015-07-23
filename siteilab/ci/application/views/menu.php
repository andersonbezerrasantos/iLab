<!DOCTYPE html>
<html>
<head lang ="pt-br">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>iLab2 - Sistema de Gerenciamento de Laboratórios</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />


	<script type="text/javascript">
		// Use jQuery com a variavel $j(...)
		var $j = jQuery.noConflict();
		$j(document).ready(function() {
			$j(".voltarTopo").hide();
			$j(function () {
				$j(window).scroll(function () {
					if ($j(this).scrollTop() > 300) {
						$j('.voltarTopo').fadeIn();
					} else {
						$j('.voltarTopo').fadeOut();
					}
				});
				$j('.voltarTopo').click(function() {
					$j('body,html').animate({scrollTop:0},600);
				}); 
			});
		});
	</script>
</head>
<body id="voltarTopo">

	<!--  selo pitagoras-->
	<div class="selo-pitagoras hidden-phone">
		<img src="../img/selo-pitagoras.svg" alt="">
	</div>
	<!-- fim selo -->

	<div class="container">
		<!-- <img style="float: left;" src="../img/ilabicon.00_jpg_srb" >
		<h1 style="text-align: center; font-size: 24px; letter-spacing:0.4em; font-weight: bold;">
			SISTEMA DE GERENCIAMENTO DE<br>LABORATÓRIOS
		</h1> -->

		<div class= "row-fluid">
			<div class= "box-top">
				<div class="logo-img"><a href="#"><img src="../img/logo.00_jpg_srb" alt=""></a></div>
				<div class="box-title hidden-phone"><h1 class="title"><p>Sistema de gerenciamento de</p> <p>laboratórios</p></h1></div>
			</div>
		</div>

		<!-- menu -->
		<header>
			<input type="checkbox" id="control-nav" />
			<label for="control-nav" class="control-nav"></label>
			<label for="control-nav" class="control-nav-close"></label>
			
			
				<nav class="nav-menu">
					<ul class="menu">
						<li><a class="menu-item active" href="http://localhost/siteilab/ci/home/">Início</a></li>
						<li><a class="menu-item active" href="calendario">Calendário</a></li>
						<li><a class="menu-item" href="sobre" >Sobre</a></li>
						<li><a class="menu-item" href="ajuda">Ajuda</a></li>
						<li><a class="menu-item-login btn btn-success" href="login">Login</a></li>
					</ul>
				</nav>
		</header>
	</div>