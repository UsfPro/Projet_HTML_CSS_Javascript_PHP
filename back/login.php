<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"  content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../css/register.css">
		<link rel="stylesheet" type="text/css" href="../css/button.css">
		
        <title>FORMULAIRE</title>
    </head>
    <body>
		<div class="logo"><img src="../images/Logo_berbere.png" alt="Logo"> </div>
		
		<?php
			function redirectToProductsPage(){
				header("Location: http://localhost/tp_web/html/products.html");
			}
			$host = 'localhost';
			$dbname = 'tp_web';
			$username = 'tp_web';
			$password = 'tp_web';
			
			if(isset($_POST['select'])){
				try {
					// se connecter à mysql
					$pdo = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");
				} catch (PDOException $exc) {
					echo $exc->getMessage();
					exit();
				}
				
				// récupération des champs saisis
				$login = $_POST['login'];
				$password = $_POST['pwd'];
					
				// Préparation de la requête
				$stmt = $pdo->prepare("SELECT * FROM User where login= :login and password= :pwd");
				$stmt->execute(['login' => $login, 'pwd' => $password]); 
				//$stmt->execute(['password' => $pwd]); 
				// récupérer l'utilisateur
				$user = $stmt->fetch();
				
				// vérifier si la requête d'insertion a réussi
				if(!empty($user)){
					//echo 'Données insérées';
				?>
					<div class="form">
						<h3 class="titre">Connexion réussie !</h3>
						<br><br>
						<a href="http://localhost/tp_web/html/products.html" class="btn" >Continuez sur notre site</a>
						<a href="#" class="btn btnMenu" onclick="window.history.go(-1)">Précédent</a>
						</form>
					</div>
				<?php
				}else{
					//echo "Échec de l'opération d'insertion";
				?>
					<div class="form">
						<h3 class="titre">Connexion échouée !</h3>
						<br><br>
						<a href="#" class="btn" onclick="window.history.go(-1)">Précédent</a>
						</form>
					</div>
				<?php
				}
			}
		
		?>
</body>
</html>



