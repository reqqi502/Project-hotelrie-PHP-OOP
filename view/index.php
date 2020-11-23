<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/offers1.css">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/annimation.css">
    <link rel="stylesheet" href="../public/testimonial.css">
    <link rel="stylesheet" href="../public/scroltop.css">
    <link rel="shortcut icon" type="image/ico" href="../images/icone.png"/>
    <title>Page Home</title>
    <style>
      body{
        overflow-x:hidden;
      }
      @media and screen (min-width:900px){
        .product-grid .title{
          color:green;         
      }
    }

    .picture{
      background-size: 30%;   
     }

     @media and screen (min-width:900px){
       .product-trend-label-left{
          visibility:hidden;
         }
         .imim{
           background-color:red;
           margin-left:0;
           margin-right:0;
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
    
session_start();
 
if(!empty($_SESSION['user'])){
	echo "<h1 style='margin-top: 0;color:white;background:#7621a7;width:100%;text-align:center;padding:10px;margin-bottom:0;font-family:cursive;font-size:20px'>Bienvenue <span style='color:red'>" .$_SESSION['user'] ."</span> à votre page!</h1>";
	echo"<form action='' method=\"POST\">
	<button class='nav-link' type='submit' name='sube' style='position:absolute;margin-left: 1389px;margin-top: 66px;z-index: 3;background-color:red;color:white;border-radius: 10% / 50%;border-color: red;'>Logout</button>
 </form>";
}

?>
<?php
include "header.php";
?>
<br><br><br><br><br>


<br><br><br><br><br>
<div class="container"style="text-align:center;max-width: 80%;" >
       <h1 style="font-weight:800;color:#7621a7;font-family:Optima;text-transform:uppercase;font-size: 2.5rem;margin-bottom: 1.5rem;margin-top: 60px;"> Vous allez adorer manger au bureau</h1>
       <h2 style="font-size:30px">Des recettes pour tous les goûts</h2>
    </div><br><br><br>
    <div>
    <div class="row" style="padding-right: 100px;padding-left: 100px;" >
<?php
    include "../class/classIndex.php";
    $object =  new offersDetail();
     $data = $object->affichOffers();
     $rand = rand(1,6);
    foreach($data as $rand){
    ?>
             <div class="col-lg-3 col-sm-3" style="margin-bottom:20px" >
            <div class="product-grid" >
                <div class="product-image">
                    <a>
                    <img class="picture" src="../images/les plats/<?php  echo $rand['image']?>" style="width: 350px;height: 300px;background-size: 30%;">
                    </a>
                    <span class="product-trend-label" style="background-color:#7621a7;padding: 5px 26px;cursor: pointer;text-transform: uppercase;border-radius: 10px 50px 50px 10px;top: 15px">nouvau</span>
			              	</span>
                    <span class="product-trend-label-left" style="background-color:#7621a7;position: absolute;z-index: 10;top:260px;overflow: hidden;height: 34px;padding: 5px 15px;cursor: pointer;text-align: center;text-transform: capitalize;color: #ffffff;-webkit-border-radius: 30px;-moz-border-radius: 30px;border-radius: 30px;margin-left:16px;width:106px"> prix <?php echo $rand['prix'] ?>DH</span>
                    <a href="reservation.php?id=<?php echo $rand['id']; ?>" class="product-trend-label-left" style="background-color:#7621a7;position: absolute;z-index: 10;top: 260px;;overflow: hidden;height: 34px;padding: 5px 15px;cursor: pointer;text-align: center;text-transform: capitalize;color: #ffffff;-webkit-border-radius: 30px;-moz-border-radius: 30px;border-radius: 30px;margin-left: 213px;width: 108px;">Réserver</a>
                    <ul class="social" style="left: 99px;top: 73%;">
                        <li><a href="#" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
        </div>
  </div>
   
<?php
 
}
?>
 </div>
</div>




<!--------------start testemionials-------------->
        <br>
        
<!--------------end testemionials-------------->
<div class="testimonials" id="testimonials">
          <div class="inner">
          <h1 style="font-family:arial-tahoma;color:#7621a7;font-family:Optima;text-transform:uppercase;font-size: 2.5rem;font-weight:800">Nos avantages</h1>
            <div class="border"></div>
            <img src="../images/home1-img-32.png" alt="" style="height: 85px;">
         <div class="row">
          <div class="col">
            <div id="testimonial" class="testimonial" style="background-color:white">
              <div class="name">PAS BESOIN DE PLANIFIER LES REPAS.</div><br><br>
              <p class="name">DES MENUS TRÈS VARIÉS.</p><br><br>
              <p class="name">PAS BESOIN DE MIJOTER SON REPAS.</p>
              <div class="stars">
                
              </div>
            </div>
          </div>
          <div class="col" >
            <div class="testimonial" id="testimonial" style="background-color:white">
              <img src="../images/home1-img-53.png" alt="" style="width: 335px;height: 363px;">
              <div class="name"></div>
              <div class="stars">
              </div>
              
            </div>
          </div>
          <div class="col">
            <div class="testimonial"id="testimonial" style="background-color:white"><br><br>
              <div class="name">UNE ÉQUIPE FLEXIBLE, À L'ÉCOUTE DE VOS BESOINS.</div><br><br><br>
              <p class="name">UNE UNITÉ DE PRODUCTION QUI RÉPOND AUX NORMES HACCP.</p>
              <div class="stars">
                
              </div>
              
            </div>
          </div>
          </div>
          </div>
          </div>
          </div>




        
<div class="testimonials">
          <div class="inner">
          <h1 style="font-family:arial-tahoma;color:#7621a7;font-family:Optima;text-transform:uppercase;font-size: 2.5rem;font-weight:800">Solutions pour les clients pendant la pandémie de COVID-19</h1>
            <div class="border"></div>
         <div class="row">
          <div class="col">
            <div class="testimonial" style="background-color:#f1f1f1">
            <svg fill="#7621a7" width="7em" height="6em" viewBox="0 0 16 16" class="bi bi-menu-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
           <path fill-rule="evenodd" d="M15 3.207v9a1 1 0 0 1-1 1h-3.586A2 2 0 0 0 9 13.793l-1 1-1-1a2 2 0 0 0-1.414-.586H2a1 1 0 0 1-1-1v-9a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-13 11a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-3.586a1 1 0 0 0-.707.293l-1.353 1.354a.5.5 0 0 1-.708 0L6.293 14.5a1 1 0 0 0-.707-.293H2z"/>
           <path fill-rule="evenodd" d="M15 5.207H1v1h14v-1zm0 4H1v1h14v-1zm-13-5.5a.5.5 0 0 0 .5.5h6a.5.5 0 1 0 0-1h-6a.5.5 0 0 0-.5.5zm0 4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0 4a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5z"/>
          </svg>
              <div class="name">Remboursements et annulations</div>
              <p class="message" style="margin-top: 0;margin-bottom: 1rem;font-size: 13px;">En savoir plus sur nos nombreuses options de remboursement comme les remboursements auto-assistés auprès du transporteur et les remboursements instantanés.</p>
              <div class="stars">
              <button style="padding:10px;background-color:#7621a7;color:white;border:1px blue">En savoir plus</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="testimonial" style="background-color:#f1f1f1">
            <svg fill="#7621a7" width="7em" height="6em" viewBox="0 0 16 16" class="bi bi-cpu-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5A1.5 1.5 0 0 0 5 6.5v3A1.5 1.5 0 0 0 6.5 11h3A1.5 1.5 0 0 0 11 9.5v-3A1.5 1.5 0 0 0 9.5 5h-3zm0 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
            </svg>
             <div class="name">Demander un remboursement</div>
              <p class="message" style="margin-top: 0;margin-bottom: 1rem;font-size: 13px;">La page Gérer ma réservation vous permet d'annuler vos trip ou de recevoir un remboursement le plus rapidement et le plus simplement possible.</p>
              <div class="stars">
              <button style="padding:10px;background-color:#7621a7;color:white;border:1px blue">En savoir plus</button>
              </div>
              
            </div>
          </div>
          <div class="col">
            <div class="testimonial"style="background-color:#f1f1f1">
            <svg fill="#7621a7" width="7em" height="6em" viewBox="0 0 16 16" class="bi bi-badge-vo" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.508 11h1.429l1.99-5.999H6.61L5.277 9.708H5.22L3.875 5.001H2.5L4.508 11zM13.5 8.39v-.77c0-1.696-.962-2.733-2.566-2.733-1.604 0-2.571 1.029-2.571 2.734v.769c0 1.691.967 2.724 2.57 2.724 1.605 0 2.567-1.033 2.567-2.724zm-1.204-.778v.782c0 1.156-.571 1.732-1.362 1.732-.796 0-1.363-.576-1.363-1.732v-.782c0-1.156.567-1.736 1.363-1.736.79 0 1.362.58 1.362 1.736z"/>
            <path fill-rule="evenodd" d="M14 3H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
             </svg>
              <div class="name">Informations récentes relatives au coronavirus</div>
              <p class="message" style="margin-top: 0;margin-bottom: 1rem;font-size: 13px;">En savoir plus sur l'épidémie du coronavirus et ses conséquences sur votre voyage.</p>
              <div class="stars">
                <button style="padding:10px;background-color:#7621a7;color:white;border:1px blue;margin-top: 37px;">En savoir plus</button>
              </div>
            </div>
          </div>
          </div>
          </div>
          </div>
          </div>
     <br>
<div class="col-lg-12" style="margin-bottom:-80px">
  <img src="../images/home1.jpg" alt="" style="background-size:cover;width:103%;height:600px;margin-left: -14px;">
  <img class="imim" src="../images/home2.png" alt="" style="z-index:10;margin-left:550px;margin-top:-590px">

</div>
       
<br><br><br><br><br>

<script src="../public/scroltop.js" type="text/javascript"></script>
   <?php
    include_once("footer.php");
    ?>
</body>
</html>