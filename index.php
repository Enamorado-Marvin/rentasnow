<?php
    if(!isset($_SESSION['user'])) {
        $lifetime = 60 * 60 * 2; // 2 hours session
        session_set_cookie_params($lifetime);
        session_start();
    }
?>

<!DOCTYPE html>

<html lang="en-us">
 <head>
  <title>Apartments, Homes, Offices for rent | RentasNow.com</title>
  <meta charset="UTF-8"> 
  <meta name="author" content="Marvin Enamorado">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include 'modules/head-lines.php'; ?>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63932603-1', 'auto');
  ga('send', 'pageview');

 </script>
 </head>
 <body id="home">
  <div class="container">
  <header>
   <?php include 'modules/header.php'; ?>
  </header>
  </div>
  <main role="main">
    <div class="banner">
			<div class="search-bar">
				<h1>Find your next apartment</h1>
				<form>
					<fieldset class="home-search-bar hvr-wobble-horizontal">
						<input class="search-input" type="text" placeholder="City, zip code, Town">
						<div class="icon icon-location"></div>
						<button class="search-button btn" type="submit" value="Search">
							<span class="button-text">Find Now!</span>
              <span class="fa fa-search"></span>
						</button>
					</fieldset>
				</form>
			</div>
		</div>
   <section class="full-width">
    <div class="container space">
    <h1 class="centered">SERVICES</h1>
    <div class="section group" id="services">
      <div class="col span_1_of_3">
       <div class="service">
        <!--<img src="/RentasNow/images/apartment.jpg" alt="Living">-->
        <img src="/images/apartment.jpg" alt="Living">
        <h2>Apartments</h2>
        <p>Find the best places to live. Every month we add many properties in every city of Honduras - find apartments, houses or condos.</p>
        <div class="button2">
         <!--<a href="/RentasNow/services/living/" class="button">Read More</a>-->
         <a href="/services/living/" class="button">Read More</a>
        </div>
       </div>
      </div>
      <div class="col span_1_of_3">
       <div class="service">
        <!--<img src="/RentasNow/images/office.jpg" alt="Offices">-->
        <img src="/images/office.jpg" alt="Offices">
        <h2>Offices</h2>
        <p>Need an office for your new business? Or want an extension in another city? Let us help us find the right work place for you.</p>
        <div class="button2">
         <!--<a href="/RentasNow/services/offices.php" class="button">Read More</a>-->
         <a href="/services/offices.php" class="button">Read More</a>
        </div>
       </div>
      </div>
      <div class="col span_1_of_3">
       <div class="service">
        <!--<img src="/RentasNow/images/moving-services.jpg" alt="Moving Services">-->
        <img src="/images/moving-services.jpg" alt="Moving Services">
        <h2>Moving</h2>
        <p>We can help you find the right moving service at the best price. Just let us know what your budget is and we'll do the rest.</p>
        <div class="button2">
         <!--<a href="/RentasNow/services/moving-services.php" class="button">Read More</a>-->
         <a href="/services/moving-services.php" class="button">Read More</a>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <section class="full-width gray-bg">
    <div class="section group container space">
    <h1 class="centered">SEARCH APARTMENTS OR OFFICES BY CITY</h1>
    <div>
<!--     <a class="col span_1_of_5 centrar" href="#"><img src="/RentasNow/images/tegucigalpa.jpg" alt="Apartments in Tegucigalpa"></a>
      <a class="col span_1_of_5 centrar" href="#"><img src="/RentasNow/images/SanPedroSula.jpg" alt="Apartments in San Pedro Sula"></a>
      <a class="col span_1_of_5 centrar" href="#"><img src="/RentasNow/images/La-Ceiba.jpg" alt="Apartments in La Ceiba"></a>
      <a class="col span_1_of_5 centrar" href="/RentasNow/locations/el-progreso/"><img src="/RentasNow/images/El-Progreso.jpg" alt="Apartments in El Progreso"></a>
      <a class="col span_1_of_5 centrar" href="#"><img src="/RentasNow/images/puerto-cortes.jpg" alt="Apartments in Puerto Cortes"></a>-->
      <a class="col span_1_of_5 centrar" href="#"><img src="/images/tegucigalpa.jpg" alt="Apartments in Tegucigalpa"></a>
      <a class="col span_1_of_5 centrar" href="#"><img src="/images/SanPedroSula.jpg" alt="Apartments in San Pedro Sula"></a>
      <a class="col span_1_of_5 centrar" href="#"><img src="/images/La-Ceiba.jpg" alt="Apartments in La Ceiba"></a>
      <a class="col span_1_of_5 centrar" href="/locations/el-progreso/"><img src="/images/El-Progreso.jpg" alt="Apartments in El Progreso"></a>
      <a class="col span_1_of_5 centrar" href="#"><img src="/images/puerto-cortes.jpg" alt="Apartments in Puerto Cortes"></a>
     </div>
    <div class="cities">
     <div class="col span_1_of_8">
      <ul>
       <li><a href="#">Agua Blanca Sur</a></li>
       <li><a href="#">Baracoa</a></li>
       <li><a href="#">Choloma</a></li>
       <li><a href="#">Ciudad Choluteca</a></li>
       <li><a href="#">Cofradía</a></li>
			</ul>
     </div>
     <div class="col span_1_of_8">
      <ul>
       <li><a href="#">Comayagua</a></li>
       <li><a href="#">Copán</a></li>
       <li><a href="#">Cuyamel</a></li>
       <li><a href="#">Danlí</a></li>
       <li><a href="#">El Paraíso</a></li>
      </ul>
     </div>
     <div class="col span_1_of_8">
      <ul>
       <li><a href="#">Florida</a></li>
       <li><a href="#">Gracias</a></li>
       <li><a href="#">Intibucá</a></li>
       <li><a href="#">Juticalpa</a></li>
       <li><a href="#">La Entrada</a></li>
      </ul>
     </div>
     <div class="col span_1_of_8">
      <ul>
       <li><a href="#">La Esperanza</a></li>
       <li><a href="#">La Lima</a></li>
       <li><a href="#">La Paz</a></li>
       <li><a href="#">Marcala</a></li>
       <li><a href="#">Nacaome</a></li>
      </ul>
     </div>
     <div class="col span_1_of_8">
      <ul>
       <li><a href="#">Nueva Ocotepeque</a></li>
       <li><a href="#">Olanchito</a></li>
       <li><a href="#">Roatán</a></li>
       <li><a href="#">Sabá</a></li>
       <li><a href="#">San Juan Pueblo</a></li>
      </ul>
     </div>
     <div class="col span_1_of_8">
      <ul>
       <li><a href="#">San Lorenzo</a></li>
       <li><a href="#">San Manuel</a></li>
       <li><a href="#">San Marcos</a></li>
       <li><a href="#">S. Marcos de Colón</a></li>
       <li><a href="#">Santa Bárbara</a></li>
      </ul>
     </div>
     <div class="col span_1_of_8">
      <ul>
       <li><a href="#">Sta. Cruz de Yojoa</a></li>
       <li><a href="#">Santa Rita</a></li>
       <li><a href="#">Sta. Rosa de Copán</a></li>
       <li><a href="#">Siguatepeque</a></li>
       <li><a href="#">Talanga</a></li>
      </ul>
     </div>
     <div class="col span_1_of_8">
      <ul>
       <li><a href="#">Tela</a></li>
       <li><a href="#">Tocoa</a></li>
       <li><a href="#">Trujillo</a></li>
       <li><a href="#">Villanueva</a></li>
       <li><a href="#">Yoro</a></li>
      </ul>
     </div>
    </div>
    </div>
    </section>
  </main>
  <footer>
   <?php include 'modules/footer.php'; ?>
  </footer>
 </body>
</html>
