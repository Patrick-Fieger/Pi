<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pi Design Group Darmstadt</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/foundation.css"/>
	
	<script src="js/custom.modernizr.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/easing.js"></script>
	<script src="js/jquery.debouncedresize.js"></script>
	<script src="js/script.js"></script>
	<style type="text/css">
	li{
		line-height: 18px;
	}
	h1{
		margin-bottom: 3px;
		font-family: kl !important;
		font-size: 65px;
	}

	p{
		line-height: 18px;

	}

	.websites a{
		font-size: 19px;
		font-family: km !important;
	}
	.text,.img{
		float: left; 
		z-index: 33;
	}
	div[bg]{
		left: 0 !important;
	}

	.text{
		margin-top: 0px;
	}

	div[bg]{
		opacity: 0;
		background-repeat: no-repeat !important;
		width: 100%;
		background-size: cover !important;
	}

	.website_wrapper{
		opacity: 1;
		position: fixed;
		bottom: 90px;
		left: 50%;
		margin-left: -470px;
		z-index: 1000;
		width: 1390px;
	}

	.img{
		margin-left: -330px;
	}

	.always{
		opacity: 1 !important;
	}

	@media only screen and (max-width: 700px){
		.img{
			display: none;
		}
	}

	</style>
</head>
<body>
	<?php include ("header.php"); ?>
	


		<div style="background:url(img/background_printmedien/Background_Einleitung_Printmedien.png);" bg="0" class="bg1"></div>

		<div class="website_wrapper" wrapper="1">

			<div class="text">
			<div class="websites">
				<h1>Printmedien</h1>
				<p style="margin-bottom:40px">Wir gestalten anspruchsvolle Printmedien in ihrer ganzen<br>
				Vielfalt. Ob Flyer oder umfassendes Katalogwerk, wir<br> begleiten und koordinieren alle Entwicklungsstufen:<br>
				Konzept und Layout, Fotographie und Illustration, Claims<br> und Texte sowie Druckvorstufe und Produktion.</p>

				<p style="font-size:18px;margin-bottom:17px" class="midbold">Unsere Leistungen</p>
				<ul style="margin-bottom:40px">
					<li>– Fyler / Folder / Prospekte</li>
					<li>– Imagebroschüren / Businessbroschüren</li>
					<li>– Zeischriften / Kundenmagazine</li>
					<li>– Kataloge / Kompendien / Buchbände</li>
					<li>– Display- und Verkaufsverpackungen</li>
				</ul>
				<a href="print_slider.php">Arbeitsbeispiele ansehen</a>
			</div>
			</div>
			
			<div class="img">
				<img style="margin-bottom: -24px;margin-left:15px;" class="websites" src="img/intro/exponat_intro2.png">
			</div>

		</div>

		<div class="back_grad"></div>



	<?php include ("footer.php"); ?>
	<script type="text/javascript">
	$(document).ready(function(){

		setTimeout(function(){
			$('.website_wrapper,div[bg]').animate({opacity:1}, 750,function(){
				$('div[bg]').addClass('always');	
			});
		},100)

		blink();

		function blink(){
			$('.websites a').animate({opacity:0.2}, 750,function(){
				$('.websites a').animate({opacity:1}, 750,function(){
					blink();
				});
			});
		}
	});
	</script>
</body>
</html>