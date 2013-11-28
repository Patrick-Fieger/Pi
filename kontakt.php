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


	.img{
		margin-bottom: -24px;
	}
	div[bg]{
		left: 0 !important;
		width: 100%;
		background-position-x: 60% !important;
	}

	.text{
		margin-top: 20px;
		width: 446px;
	}

	div[bg]{
		opacity: 0;
	}

	.website_wrapper{
		opacity: 0;
		position: fixed;
		bottom: 273px;
		left: 50%;
		margin-left: -470px;
		z-index: 1000;
		width: 906px;
	}

	.always{
		opacity: 1 !important;
	}


	.back_grad{
		background:url(img/background_kontakt/bgkont.png);
		height: 740px;
	}

	</style>
</head>
<body>
	<?php include ("header.php"); ?>
	


		<div style="background:url(img/background_kontakt/Background_Kontakt.png);" bg="0" class="bg1"></div>

		<div class="website_wrapper">

			<div class="text">
				<div class="websites active">
				<h1 style="margin-bottom:20px">Kontakt</h1>
				<p>
				<span class="bold">Pi Design Group</span><br>
				Im Hauptbahnhof 20<br>
					Eingangshalle Hauptbahnhof<br>
					64293 Darmstadt
				</p>
				<p>Tel. 06151. 90677-90<br>
				Fax. 06151. 90677-93
				</p>

				<p>Email: info@pi-design.de</p>
				

			
			</div>
			</div>
		

		</div>

		<div class="back_grad"></div>



	<?php include ("footer.php"); ?>		
	<script src="js/foundation.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){

		setTimeout(function(){
			$('.website_wrapper,div[bg]').animate({opacity:1}, 750,function(){
				$('div[bg]').addClass('always');	
			});
		},100)

		// blink();

		// function blink(){
		// 	$('.websites a').animate({opacity:0.2}, 750,function(){
		// 		$('.websites a').animate({opacity:1}, 750,function(){
		// 			blink();
		// 		});
		// 	});
		// }
	});
	</script>
	<script>
		$(document).foundation();
  	</script>
</body>
</html>