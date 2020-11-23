<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les offres </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="../public/offers1.css">
	<link rel="stylesheet" href="../public/offers.css">
   <link rel="stylesheet" href="../public/products.css">
   <link rel="stylesheet" href="../public/scroltop.css">
   <link rel="shortcut icon" type="image/ico" href="../images/favicone.png"/>
   <style>
	   @media screen and (max-width:900px){
		   h3{
			   font-size:12px;
		   }
	   }
   </style>
</head>
<body>

<?php
if(isset($_POST['sube'])){
session_start();
session_unset();
session_destroy();
header("location:index.php");
}
?>
<?php

if(!empty($_SESSION['user'])){
	echo "<h1 style='margin-top: 0;color:white;background:green;width:100%;text-align:center;padding:10px;margin-bottom:0;font-family:cursive;font-size:20px'>Bienvenue <span style='color:red'>" .$_SESSION['user'] ."</span> à votre page!</h1>";
	echo"<form action='' method=\"POST\">
	<button class='nav-link' type='submit' name='sube' style='position: absolute;margin-left: 1389px;margin-top: 125px;z-index: 3;background-color:red;color:white;border-radius: 10% / 50%;border-color: red;'>Logout</button>
 </form>";
}

?>

<?php
include "header.php";
?>
<br><br><br><br><br><br><br><br><br><br>

<div class="header">	
			<div>	
				<h2 style="font-size: 45px;text-align:center">Réservez votre plat préféré avec nous</h2>
				<p style=";text-align:center">Nous proposons des plats  bien  et pratiqués avec des offres attractives.</p>
			</div>	
			<br>
		<div class="search-box">

			<div class="content-opt">
			</div>	
			<div class="cont-value">
				<form method="POST" action="">
					<div class="form-get-val">
						<fieldset style="width: 60%;margin: 0px 140px;"><legend>les plats</legend>
							<select  name="lesplats" required>
								<option value="tajine poulet">tajine poulet marocain</option>
								<option value="tajine poulet">tajine poulet</option>
								<option value="plat vietnamie">plat vietnamie</option>
								<option value="couscous">couscous</option>
								<option value="poulet-hampignions">poulet hampignions</option>
								<option value="brochettes-de-poulet">brochettes-de-poulet</option>
								<option value="sandwich-poulet">sandwich-poulet</option>
								<option value="sandwich-thon">sandwich-thon</option>
								<option value="sandwich-jambon-fromage">sandwich-jambon-fromage</option>
								<option value="sandwich-kebab">sandwich-kebab</option>
								<option value="sandwich-burger">sandwich-burger</option>
								<option value="sandwich-chawarma">sandwich-chawarma</option>
								<option value="chocolat-oreo">chocolat-oreo</option>
								<option value="sandwich-suprem-poulet">sandwich-suprem-poulet</option>
								<option value="cotta">cotta</option>
								<option value="mahalabia">mahalabia</option>

								
							</select>
						</fieldset>
					</div>
					<div class="form-get-val">
						<fieldset style="width: 100%;margin: 0px 95px;"><legend>La Date</legend>
							<input type="date" name="date">
						</fieldset>
					</div>
					
					
					
					<input style="position:absolute;margin: 102px 0px 0px -233px;width: 153px;" type="submit" name="chercher" value="Chercher">

				</form>
			</div>
		</div>
	</div>

	<div class="container"style="text-align:center;max-width: 80%;" >
 </div><br><br><br><br><br><br><br><br>
 <div>
 <div class="row" style="padding-right: 100px;padding-left: 100px;" >
    <?php
    include('../class/classSearch.php');
	if(isset($_POST["chercher"])){
		$date = $_POST['date'];
		$nom = $_POST['lesplats'];
		$vol = new search();
		$data= $vol->recherche($date,$nom);
        foreach($data as $row):
    ?>
		  <div class="col-lg-3 col-sm-3" style="margin-bottom:20px" >
		 <div class="product-grid" >
			 <div class="product-image">
				 <a>
				 <img class="picture" src="../images/les plats/<?php  echo $row['image']?>" style="width: 350px;height: 300px;background-size: 30%;">
				 </a>
				 <span class="product-trend-label" style="background-color:#7621a7;padding: 5px 26px;cursor: pointer;text-transform: uppercase;border-radius: 10px 50px 50px 10px;top: 15px">nouvau</span>
			 </span>
			 <span class="product-trend-label-left" style="background-color:#7621a7;position: absolute;z-index: 10;top:16px;overflow: hidden;height: 34px;padding: 5px 15px;cursor: pointer;text-align: center;text-transform: capitalize;color: #ffffff;-webkit-border-radius: 30px;-moz-border-radius: 30px;border-radius: 30px;margin-left:236px;width:106px"> prix <?php echo $row['prix'] ?>DH</span>
                    <a href="reservation.php?id=<?php echo $row['id']; ?> " class="product-trend-label-left" style="background-color:#7621a7;position: absolute;z-index: 10;top: 260px;;overflow: hidden;height: 34px;padding: 5px 15px;cursor: pointer;text-align: center;text-transform: capitalize;color: #ffffff;-webkit-border-radius: 30px;-moz-border-radius: 30px;border-radius: 30px;margin-left: 213px;width: 129px;">Réserver</a>
				 <ul class="social" style="left: 99px;top: 73%;">
					 <li><a href="#" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
				 </ul>
			 </div>
	 </div>
</div>

<?php
 endforeach;
}
?>
</div>

	<div class="container"style="text-align:center;max-width: 80%;" >
 </div><br><br><br>
 <div>
 <div class="row" style="padding-right: 100px;padding-left: 100px;" >
<?php
 include "../class/classIndex.php";
 if(empty($_POST['date']) && empty($_POST['destination'])){
 $object =  new offersDetail();
  $data = $object->affichOffers();
 foreach($data as $row):
 ?>
		  <div class="col-lg-3 col-sm-3" style="margin-bottom:20px" >
		 <div class="product-grid" >
			 <div class="product-image">
				 <a>
				 <img class="picture" src="../images/les plats/<?php  echo $row['image']?>" style="width: 350px;height: 300px;background-size: 30%;">
				 </a>
				 <span class="product-trend-label" style="background-color:#7621a7;padding: 5px 26px;cursor: pointer;text-transform: uppercase;border-radius: 10px 50px 50px 10px;top: 15px">nouvau</span>
			 </span>
			 <span class="product-trend-label-left" style="background-color:#7621a7;position: absolute;z-index: 10;top:16px;overflow: hidden;height: 34px;padding: 5px 15px;cursor: pointer;text-align: center;text-transform: capitalize;color: #ffffff;-webkit-border-radius: 30px;-moz-border-radius: 30px;border-radius: 30px;margin-left:236px;width:106px"> prix <?php echo $row['prix'] ?>DH</span>
                    <a href="reservation.php?id=<?php echo $row['id']; ?> " class="product-trend-label-left" style="background-color:#7621a7;position: absolute;z-index: 10;top: 260px;;overflow: hidden;height: 34px;padding: 5px 15px;cursor: pointer;text-align: center;text-transform: capitalize;color: #ffffff;-webkit-border-radius: 30px;-moz-border-radius: 30px;border-radius: 30px;margin-left: 213px;width: 129px;">Réserver</a>
				 <ul class="social" style="left: 99px;top: 73%;">
					 <li><a href="#" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
				 </ul>
			 </div>
	 </div>
</div>

<?php
 endforeach;
}
?>
</div>
</div>
		
    <!-- /.row -->
    <!-- Features Section -->
  
<!-- <div class="dddddddd" style="margin-top:100px">
	<div class="dd-div">
		<h1 style="font-size: 20px; font-family: bungee inline;color:#03018c;">POURQUOI RÉSERVER AVEC NOUS..?</h1>
	</div><div class="borderr"></div>
	<div class="dd-div1">
		<h4>Réservation facile</h4>
		<p>Nous proposons des réservations de vols simples et pratiques avec des offres attractives.</p>
	</div>
	<div class="dd-div1">
		<h4>Prix le plus bas</h4>
		<p>Nous garantissons des tarifs bas sur les forfaits vacances et les billets d'avion.</p>
	</div>
	<div class="dd-div1">
		<h4>Offres intéressantes</h4>
		<p>Profitez d'offres intéressantes sur les vols et les voyages organisés.</p>
	</div>
	<div class="dd-div1">
		<h4>Pourquoi Réserver avec nous..?</h4>
		<p>Obtenez une assistance 24h / 7j. Nous sommes heureux de vous assister.</p>
	</div><br clear="all">
</div>
</div>
</div>  -->
<br><br><br><br>

<a href="#" class="to-top"><i class="fas fa-angle-double-up"></i></a>


<?php
include "footer.php";
?>
<script src="../public/scroltop.js" type="text/javascript"></script>
</body>
</html>