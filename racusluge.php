<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="description" content=""/>
		<meta name="author" content=""/>
		<title>
			SKIP - racunovodstvena agencija
		</title>
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link href="css/bootstrap-social.css" rel="stylesheet"/>
		<link href="css/style.css" rel="stylesheet"/>
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
		<style>
#slika {
    width: 100%;
    height: 455px;
    background-image: url(images/background.jpg);
    -moz-background-size: cover;
    -o-background-size: cover;
    -webkit-background-size: cover;
    background-size: cover;
    margin-top: -35px;
}

.blog-section {
    background-image: url('images/blogbg.jpg');
    width: 100%;
    height: auto;
    -moz-background-size: cover;
    -o-background-size: cover;
    -webkit-background-size: cover;
    background-size: cover;
}
		</style>
	</head>
	<body>
<?php
	include ('includes/header.php');

	include ('includes/nav.php');
?>
                                        	<!-- ODAVDE IDE SADRZAJ SVAKE STRANICA POSEBNO  -->
			<!-- /.SLIKA -->
			<div id="slika">
            <div class="container">
            <div class="slika-text">
										<h1>RAČUNOVODSTVENE USLUGE</h1>
            </div>
            </div>
            </div>

            <div class="container">
							<div class="col-md-2 col-sm-12" style="background-color: white;"></div>
        <div class="col-md-8 col-sm-12 tekstovi">
<p><h2>Agencija Skip pruža u okviru sektora računovodstva :</h2>
			<div style="width: 10%; height: 2px; background: #3c3e47; overflow: hidden; position: absolute; left: 50%; right: 50m; margin-left: -5%;">
			</div>
<br><h3>Knjigovodstvene usluge</h3>
<p>
<p><h4>Knjigovodstvene usluge obuhvataju:</h4>
<br>•	Robno i finansijsko knjigovodstvo
<br>•	Vođenje registra osnovnih sredstava
<br>•	Evidentiranje finansijskih transakcija
<br>•	Knjiženje u skladu sa MRS/MSFI
<br>•	Obradu dokumentacije za izveštajni paket
<br>•	Izrada i kontrola mesečnih, kvartalnih i godišnjih bilansa
<br>•	Usklađenost sa lokalnim računovodstvenim standardima i propisima
<br>•	Sastavljanje poreskih obračuna i izveštaja u skladu sa važećim zakonima

<br><h3>Obračun zarada</h3>

<p>Neke od najznačajnijih usluga iz segmenta obračuna zarada podrazumevaju:
<br>•	Obračun zarada, poreza i doprinosa na zarade zaposlenih
<br>•	Obračun naknada zarada, troškova i drugih primanja
<br>•	Izrada mesečnih i godišnjih obračunskih listića i odgovarajućih poreskih prijava
<br>•	Komunikacija sa nadležnim institucijama, Poreskom upravom i fondom za socijalno osiguranje
<br>•	Prijava i odjava zaposlenih kod državnih organa.
<br>•	Obaveštavanje o svim izmenama u zakonskoj regulativi koja se tiče isplata

<br><h3>Izrada finansijskih izveštaja i izveštavanje prema grupi</h3>

<p>Naše usluge obuhvataju izradu finansijskih izveštaja koji obuhvataju izradu:
<br>•	Bilansa stanja
<br>•	Bilansa uspeha
<br>•	Statistički aneks
<br>•	izveštaj o tokovima gotovine
<br>•	izveštaj o promenama na kapitalu
<br>•	Napomene uz finansijske izveštaje

				</div>
				<div class="col-md-2 col-sm-12" style="background-color: white;"></div>
            </div><?php
	include ('includes/footer.php');
?>
<div class="copy">
					<div class="container">
						<div>
							2017 SKIP d.o.o., sva prava zadržana.
						</div>
					</div>
				</div>
				<div class="top">
					<a href="#" class="scrollToTop">
					<i class="fa fa-chevron-circle-up fa-2x"  style="color:#000000;"></i></a>
				</div>
				<!-- jQuery Version 1.11.1 -->
				<script src="js/jquery.js">
				</script>
				<!-- Bootstrap Core JavaScript -->
				<script src="js/bootstrap.min.js">
				</script>
				<script>
                $(document).ready(function(){
                $(window).scroll(function(){
                if ($(this).scrollTop() > 100) {
                $('.scrollToTop').fadeIn();
                } else {
                $('.scrollToTop').fadeOut();
                }
                });

                //Click event to scroll to top
                $('.scrollToTop').click(function(){
                $('html, body').animate({scrollTop : 0},800);
                return false;
                });
                });
				</script>
	</body>

</html>
