<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="author" content="Robert Rak, HiR Soft, Prazo IT">
	<meta name="description" content="">
	<meta name="keywords" content="">

	<title>Laptop na Egzamin Radcowski / Komorniczy / Adwokacki</title>

	<link rel="shortcut icon" href="favicon.ico">

	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,700" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.scrollTo.min.js"></script>
	<script> 
		jQuery(function($){
			// funkcja do scrolla, aby menu płynie przechodziło
			$.scrollTo(0);
			$('#link1').click(function() { $.scrollTo($('body'), 1000); });
			$('#link2').click(function() { $.scrollTo($('#sec1'), 1000); });
			$('#link3').click(function() { $.scrollTo($('#sec2'), 1000); });
			$('#link4').click(function() { $.scrollTo($('#sec3'), 1000); });
			$('#link5').click(function() { $.scrollTo($('#sec4'), 1000); });
			$('.scrollup').click(function() { $.scrollTo($('body'), 1000); });
			$('.zambutton').click(function() { $.scrollTo($('#sec3'), 1000); });
		});

		// funkcja do pokazywania scrolla

		$(window).scroll(function(){
			if($(this).scrollTop()>180) $('.scrollup').fadeIn();
			else $('.scrollup').fadeOut();
			});

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
					<li><a id="link1" href="#">Home</a></li>
					<li><a id="link2" href="#">O nas</a></li>
					<li><a id="link3" href="#">Parametry</a></li>
					<li><a id="link4" href="#">Wypożycz</a></li>
					<li><a id="link5" href="#">Kontakt</a></li>
				</ul>	
			</nav>
		</header>
	</section>

<!-- Rozpoczęcie sekcji O nas -->
	<section id="sec1">
		<article>
			<div class="section1">
				<h1>O nas</h1>
				<p>PraZo Event specjalizuje się w zapewnieniu sprzętu na egzaminy:</p><p>radcowskie, komornicze oraz adwokackie</p>
				<p>Posiadamy wieloletnie doświadczenie w prowadzeniu tego typu egzaminów. Nasz zespół jest wyszkolony we wszelkich sprawach technicznych związanych z ich obsługą. Wypożyczenie od Nas sprzętu komputerowego pozwoli na bezstresowe podejście do zdawania tak ważnego egzaminu. Możecie Państwo także liczyć na wsparcie naszych techników w trakcie okresu wypożyczenia.</p>
				<p>Współpracujemy również z poszczególnymi Izbami, którym zapewniamy sprzęt komputerowy niezbędny do przeprowadzenia egzaminów.</p>			
				<a href="#" class="zambutton">Zarezerwuj już dzisiaj</a>
				
			</div>
		</article>
	</section>

<!-- Rozpoczęcie sekcji Opis -->
	<main id="sec2">
		<article>
			<div class="section2">
				<h1>Parametry sprzętu</h1>
					<div class="spec1">
						<div class="spec2">
							<h1>1</h1>
						</div>
						<div class="spec3">
							<p>Każdy z zapewnianych przez Nas laptopów jest dostosowany do wymogów Ministerstwa Sprawiedliwości.</p>
						</div>
					</div>
					<div class="spec1">
						<div class="spec2">
							<h1>2</h1>
						</div>
						<div class="spec3">
							<p>Specyfikacja sprzętowa komputerów to: Intel i5, 4GB RAM, 250 GB HDD, Windows 7 Professional z aktualną licencją</p>
						</div>
					</div>
					<div class="spec1">
						<div class="spec2">
							<h1>3</h1>
						</div>
						<div class="spec3">
							<p>Komputery dostępne są dzień przed egzaminem, aby móc przetestować system oraz przywyknąć do układu klawiatury. Na sprzęcie zainstalowany będzie również program DEMO, tożsamy z tym, który zobaczą Państwo w trakcie egzaminem.</p>
						</div>
					</div>
					<div class="spec1">
						<div class="spec2">
							<h1>4</h1>
						</div>
						<div class="spec3">
							<p>Za kwotę 350 złotych  otrzymują  Państwo od Nas sprzęt komputerowy na cały egzamin. Zestaw zawiera: laptop, zasilacz, myszkę przewodową, torbę na laptopa. Nie pobieramy opłat za dzień testowy – gratis od Firmy</p>
						</div>
					</div>
			</div>
		</article>
	</main>

<!-- Rozpoczęcie sekcji Wypozycz -->
	<section id="sec3">
		<article>
			<div class="section3">
				<h1>Wypożycz Laptopa</h1>
				<p>Poniżej podaj dane do zarezerwowania całego zestawu na egzamin.</p>
				<p>Zestaw zawiera:<br />
					Laptop<br />
					Zasilacz<br />
					Myszka przewodowa<br />
					Torba na laptopa<br />
				</p>
				<div>
					<form action="dodaj.php" method="post">
						<input type="text" name="imie" placeholder="Imię" required oninvalid="this.setCustomValidity('Proszę podać swoje Imię')" oninput="setCustomValidity('')"><br />
						<input type="text" name="nazwisko" placeholder="Nazwisko" required oninvalid="this.setCustomValidity('Proszę podać swoje Nazwisko')" oninput="setCustomValidity('')"><br />
						<input type="tel" name="telefon" placeholder="Numer telefonu" pattern="[0-9]{9}" required oninvalid="this.setCustomValidity('Proszę podać swój numer Telefonu, przykładowo 500500500')" oninput="setCustomValidity('')"><br />
						<input type="email" name="email" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required oninvalid="this.setCustomValidity('Podany email jest nieprawidłowy')" oninput="setCustomValidity('')">
				<div class="check">
					<p>
						Wybierz rodzaj egzaminu: <br />
						<input type="radio" id="radio1" name="egzamin" value="Egzamin Radcowski" required><label for="radio1" class="radio"><span>Radcowskie - odbiór 19.03.2018r. - zwrot 23.03.2018r.</span></label><br />
						<input type="radio" id="radio2" name="egzamin" value="Egzamin Adwokacki" required><label for="radio2" class="radio"><span>Adwokackie - odbiór 19.03.2018r. - zwrot 23.03.2018r. </span></label><br />
						<input type="radio" id="radio3" name="egzamin" value="Egzamin Komorniczy" required><label for="radio3" class="radio"><span>Komornicze - odbiór 7.03.2018r. - zwrot 9.03.2018r.</span> </label><br />
					</p>
					<p>
						<input type="checkbox" id="checkbox1" name="zgody" value="TAK" required><label for="checkbox1" class="checkbox">Wyrażam zgodę na przetwarzanie moich danych.</label>
					</p>
				</div>
						<input type="submit" name="wyślij" value="Wyślij zgłoszenie"><br />
					</form>
				</div>
			</div>
		</article>
	</section>

<!-- Rozpoczęcie sekcji Kontakt -->
	<section id="sec4">
		<article>
			<div class="section4">
				<h1>Kontakt</h1>
				<p>Jeżeli chcesz się z Nami skontaktować w sprawie ustalenia szczegółów napisz maila:</p>
				<a href="mailto:info@prazo.pl?Subject=Wynajem sprzętu na egzamin" target="_top">info@prazo.pl</a>
				<p>lub skontaktuj się z Naszym koordynatorem projektu – Robertem Rak pod numerem telefonu: 500 549 562</p>
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