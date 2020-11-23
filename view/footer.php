<html>
<head>		
		<!-- Bootstrap CSS -->
		<link href="../public/bootstrap.min.css" rel="stylesheet">	
		<!-- Font awesome CSS -->
		<link href="../public/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="../public/style-color.css" rel="stylesheet">
		<!-- Styles -->
		<link rel="stylesheet" href="../public/bootstrap.min.css">
		<link rel="stylesheet" href="../public/fontawesome.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<link rel="stylesheet" href="../public/footer.css">
		<!-- Favicon -->
    <style>
        @media screen and (max-width:600px) {
		.logo{
              visibility:hidden;
		}
	}
	</style>
</head>
<body>
			<footer>
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-12">
							<a href="index.html" class="logo"><img src="../images/logofooter.png" style="position: absolute;top: -25px;width: 145px;right: 25px;" alt="#" /></a>
						</div>
						<div class="col-lg-9 col-12">
							<div class="row">
								<div class="col-md-4 col-12">
									<i class="fas fa-map-marker-alt fa-2x"></i>
                                    <span> 'maroc' safi lamiaa N°657   </span>
								</div>
								<div class="col-md-4 col-12">
									<i class="fas fa-phone fa-2x"></i>
									<span>(+212) 05246-11673</span>
								</div>
								<div class="col-md-4 col-12">
									<i class="fas fa-envelope fa-2x"></i>
									<span> contact@bio-hotel.com </span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="item">
								<h4 class="text-capitalize">À propos</h4>
								<p>Le bio-hotel du Maroc, nouveau concept de restauration rapide avec l’installation de distributeurs de repas pour les entreprises. Le bio-hotel du Maroc est un concept de restauration rapide, installation sur les lieux ou simplement une installation d’un distributeur de repas pour les entreprises. La Buvette du Maroc offre aux employés une solution de déjeuners variés et équilibrés à travers une cuisine faite-maison élaborée à partir de produits frais, locaux et de saison.</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="item">
								<h4 class="text-capitalize">Menu</h4>
								<ul class='text-capitalize main-list'>
									<li><a href="index.php">home</a></li>
									<li><a href="offers.php">Offers</a></li>
									<li><a href="reservation.php">Reservation</a></li>
									<li><a href="panier.php">Panier</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="item">
								<h4 class="text-capitalize">Heures d'ouverture</h4>
								<ul class="text-capitalize">
									<li><a href="#">Lundi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 08:00 - 18:00</a></li>
									<li><a href="#">Mardi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 08:00 - 18:00</a></li>
									<li><a href="#">Mercredi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 08:00 - 18:00</a></li>
									<li><a href="#">Jeudi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 08:00 - 18:00</a></li>
									<li><a href="#">Vendredi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 08:00 - 18:00</a></li>
									<li><a href="#">Samedi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 08:00 - 18:00</a></li>
									<li><a href="#">Dimanche &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; fermé</a></li>
								</ul>
							</div>
						</div>
						
						<?php
                            include_once("../class/classIndex.php");
							if(isset($_POST['sube'])){
								$email = $_POST['email'];
								echo $email;
								$object = new offersDetail();
								$object->insertEmail($email);
							      }
							?>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="item">
								<h4 class="text-capitalize">envoyer votre email</h4>
								<form method="POST" action="">
									<input type="text" name="email" placeholder="Enter your email" required>
									<input type="submit" name="sube" value="Envoyer">
								</form>
							</div>
						</div>
					</div>
					<ul class="social-media">
						<li><a href="#"><i class="fab fa-facebook-square fa-2x"></i></a></li>
						<li><a href="#"><i class="fab fa-google-plus-square fa-2x"></i></a></li>
					    </ul>
					<div class="copyright">
						<p> 2020 tout les droit © se sans reservez</p>
					</div>
				</div>
			</footer> 
			
			 
</body>
</html>