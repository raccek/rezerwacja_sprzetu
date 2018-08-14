<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="author" content="Robert Rak, HiR Soft, Prazo IT">
	<meta name="description" content="">
	<meta name="keywords" content="">

	<meta http-equiv="refresh" content="30;url=http://egzamin.prazo.pl/" />

	<title>Laptop na Egzamin Radcowski / Komorniczy / Adwokacki</title>

	<link rel="shortcut icon" href="favicon.ico">

	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,700" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.scrollTo.min.js"></script>
	<script> 
	

	</script>
	<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>

	<a href="#" class="scrollup"></a>
<!-- rozpoczęcie menu, rozpoczęci sekcji Home-->
	<section id="top">
		<header>

			<h1 class="logo">Wypożycz laptopa na Egzamin</h1>
			<nav class="topnav">  
				<ul class="menu"> 
					<li><a id="link1" href="http://egzamin.prazo.pl/">Home</a></li>
					<!-- <li><a id="link2" href="#">O nas</a></li>
					<li><a id="link3" href="#">Opis</a></li>
					<li><a id="link4" href="#">Wypożycz</a></li>
					<li><a id="link5" href="#">Kontakt</a></li> -->
				</ul>	
			</nav>
		</header>
	</section>

<!-- Rozpoczęcie sekcji O nas -->
	<section id="sec1">
		<article>
			<div class="section1">
				<p>Serdecznie dziękujemy za rezerwację na Naszej stronie! </p>
				<p>Na maila dostaną Państwo szczegółowe informację w sprawie wypożyczenia sprzętu komputerowego.</p>
				<p>Jeżeli mają Państwo jakiekolwiek pytania zapraszamy do kontaktu z Naszą firmą.</p>
				<p>Zespół Prazo Event</p>				
			</div>
		</article>
	</section>


<!-- Rozpoczęcie stopki -->
	<footer id="sec5">
		<div class="footer">
		<?php echo date("Y"); ?> &copy; <a href="www.prazo.pl">HiR Soft</a>
		</div>
	</footer>

	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>

	<script>
		$(document).ready(function() {
		var stickyNavTop = $('.topnav').offset().top;

		var stickyNav = function(){
		var scrollTop = $(window).scrollTop();

		if (scrollTop > stickyNavTop) { 
		$('.topnav').addClass('sticky');
		} else {
		$('.topnav').removeClass('sticky');
		}
		};

		stickyNav();

		$(window).scroll(function() {
		stickyNav();
		});
		});
	</script>

</body>
</html>