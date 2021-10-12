<!DOCTYPE html>
 <html>
	<head>
		<title>TP Web - HTML - CSS (Header)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="icon" type="images/png" href="images/logo.png">
	</head>
<body>

	<?php
            $servername = 'localhost';
            $username = 'tp_web';
            $password = 'tp_web';
            
            //On établit la connexion
            $conn = mysqli_connect($servername, $username, $password);
            
            //On vérifie la connexion
            if(!$conn){
                die('Erreur : ' .mysqli_connect_error());
            }
            //echo "Connexion réussie pour $username" ;
    ?>
		
	<div class="Conteneur">
		<div class="colonne1"></div>
		<div class="colonne2">
			<div class="" style="width: 100%;">
				<div class="container">
					<div class="">
						<div class="social_icon">
							<a href="https://facebook.com" target="_blank"><img class="imgHeader" src="images/icons/facebook_icon.svg"></a>
							<a href="https://twitter.com" target="_blank"><img class="imgHeader" src="images/icons/twitter_icon.svg"></a>
							<a href="https://instagram.com" target="_blank"><img class="imgHeader" src="images/icons/instagram_icon.svg"></a>
							<a href="https://linkedin.com" target="_blank"><img class="imgHeader" src="images/icons/linkedin_icon.svg"></a>
						</div>
						
						<div class="header_right">
						
							<div class="login_register_btn">
								<a href="#" class="btn" onclick="window.location='http://localhost/tp_web/html/login.html'">Login</a>     
								<a href="#" class="btn" onclick="window.location='http://localhost/tp_web/html/register.html'">Register</a>    
							</div>
						</div>
			
					</div>
					<div class="header">
						<div class="container">
							<div  class="logo">
								<a href="#"><img class="imgLogo" src="images/logo.png"></a>
							</div>
							<div class="navbar">
								<ul>
									<li class="active"><a href="index.php">Accueil</a></li>
									<li><a href="http://localhost/tp_web/html/products.html">Produits</a></li>   
									<li><a href="http://localhost/tp_web/html/offres.html">Offres</a></li>
									<li><a href="http://localhost/tp_web/html/agences.html">Nos agences</a></li>
									<li><a href="http://localhost/tp_web/html/contacts.html">Contacts</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- DEBUT SLIDER -->
			<div class="bodySlider">
					
				<div class="slideshow-container">
					
					<div class="mySlides fade">
						<div class="numbertext">1 / 3</div>
						<img class="imgSlider" src="images/slider/jpg/image3.jpg" style="width:100%">
						
					</div>
					
					<div class="mySlides fade">
						<div class="numbertext">2 / 3</div>
						<img class="imgSlider" src="images/slider/jpg/image2.jpg" style="width:100%">
						
					</div>
					
					<div class="mySlides fade">
						<div class="numbertext">3 / 3</div>
						<img class="imgSlider" src="images/slider/jpg/image4.jpg" style="width:100%">
						
					</div>
					
                    <!-- Boutons suivant et précédent -->					
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
						
				</div>
				<br>
				
	            <!-- Cercles -->
				<div style="text-align:center">
					<span class="dot" onclick="currentSlide(1)"></span> 
					<span class="dot" onclick="currentSlide(2)"></span> 
					<span class="dot" onclick="currentSlide(3)"></span> 
				</div>
			
			
			</div>
			<!-- FIN SLIDER -->
			
				<!-- text -->
			<div class="myOffersText">
	
			<h3>Nos Meilleur <span>produits</span> </h3>
			</div>
				
			<!-- CARTE DE PRIX -->
			<div class="row">

				<div class="column">
					<div class="divImgProduct"> <img class="imgProduct" src="images/cartes/bague.png"> </div>
					<div class="priceProduct">
						<label for="html">Bague Kabyle en Argent</label><br>
						<label for="html">9 500 DA</label><br>
					</div>
					<div class="selectProduct"> <a href="#" class="btn selectProduct">Ajouter au panier</a></div>
				</div>
				
				<div class="column"> 
					<div class="divImgProduct"> <div class=""> <img class="imgProduct" src="images/cartes/bracelet.png"> </div></div>
					<div class="priceProduct">
						<label for="html">Bracelet "Ameclux"</label><br>
						<label for="html">139 500 DA</label><br>
					</div>
					<div class="selectProduct"> <a href="#" class="btn selectProduct">Ajouter au panier</a></div>
				</div>
				
				<div class="column"> 
					<div class="divImgProduct"> <div class=""> <img class="imgProduct" src="images/cartes/parure.png"> </div></div>
					<div class="priceProduct">
						<label for="html">parure</label><br>
						<label for="html">205 000 DA</label><br>
					</div>
					<div class="selectProduct"> <a href="#" class="btn selectProduct">Ajouter au panier</a></div>
				</div>
			
			</div>
		<!-- FIN CARTE DE PRIX -->
		
		<!-- footer -->
			<footer class="footer-distributed">
				<div class="footer-left">
				
	             <h3>Berbere<span>jewelery</span></h3>

				<p class="footer-links">
					<a href="#">Acceuil</a>
					·
					<a href="#">Produits</a>
					·
					<a href="#">Nos agences</a>
					·
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">Copyrights @2020</p>

				<div class="footer-icons">

					<a href="https://facebook.com" target="_blank"><img class="imgHeader" src="images/icons/facebook_icon.svg"></a>
					<a href="https://twitter.com" target="_blank"><img class="imgHeader" src="images/icons/twitter_icon.svg"></a>
					<a href="https://instagram.com" target="_blank"><img class="imgHeader" src="images/icons/instagram_icon.svg"></a>
					<a href="https://linkedin.com" target="_blank"><img class="imgHeader" src="images/icons/linkedin_icon.svg"></a>

				</div>

			</div>

			<div class="footer-right">

				<p>Contact</p>

				<form action="#" method="post">

					<input type="text" name="email" placeholder="Email">
					<textarea name="message" placeholder="Message"></textarea>
					<button>envoyer</button>

				</form>

			</div>

		</footer>
		</div>
		
		<div class="colonnes colonne3"></div>
	</div>
	
	
	<!-- partie javascript du slider -->
	<script type="text/javascript"> 
	
		var slideIndex = 1;
		showSlides(slideIndex);
		
		function plusSlides(n) {
			showSlides(slideIndex += n);
		}
		
		function currentSlide(n) {
			showSlides(slideIndex = n);
		}
		
		function showSlides(n) {
			var i;
			// récupérationn de toutes les slides dans le tableau "slides"
			var slides = document.getElementsByClassName("mySlides");
			
			// récupérationn de tous les points dans le tableau "dots"
			var dots = document.getElementsByClassName("dot");
			
			// test du paramètre n 
			if (n > slides.length) {slideIndex = 1}    
			if (n < 1) {slideIndex = slides.length}
			
			// Réinitialisation de l'affichage des slides
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";  
			}
			
			// Désactivation des points 
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			
			// affichage de la slide demandée
			slides[slideIndex-1].style.display = "block";  
			// activation du points sur lequel on cliqué
			dots[slideIndex-1].className += " active";
		}
	
           
		  var myIndex = 0;
		  carousel();

			function carousel() {
			  var i;
			  var x = document.getElementsByClassName("mySlides");
			  for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			  }
			  myIndex++;
			  if (myIndex > x.length) {myIndex = 1}    
			  x[myIndex-1].style.display = "block";  
			  setTimeout(carousel, 4000); // Change image every 4 seconds
		}
     </script>



	
	
</body>
</html>

