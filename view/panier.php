
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/panier.css">
    <link rel="stylesheet" href="../public/offers1.css">
    <title>page panier</title>
    <link rel="shortcut icon" type="image/ico" href="../images/icone.png"/>
    <style>
/* @media screen and (max-width: 900px) {
        .row{
            margin-left:-400px;
        }
    } */

</style>
</head>
<body>
<?php
session_start();
       if(empty($_SESSION['user'])){
           header("location:index.php");
                           } 
       if(!empty($_SESSION['user'])){
            echo "<h1 style='margin-top: 0;color:white;background:#7621a7;width:100%;text-align:center;padding:10px;margin-bottom:0;font-family:cursive;font-size:20px'>Bienvenue <span style='color:red'>" .$_SESSION['user'] ."</span> à votre page!</h1>";
       }
?>
<?php
        if(isset($_POST['sube'])){
            session_start();
            session_unset();
            session_destroy();
            header("location:index.php");
        }
?>
        
    <?php
    include "header.php";
    ?>
    <br><br><br><br><br><br><br><br><br><br>
    <div class="container" style="" >
    <div class="row">

    <?php
    include "../class/classPanier.php";
    $idreservation = $_GET['idResrvation'];
   $object = new panier();
   $data = $object->afficheInfoPanier($idreservation);
   foreach($data as $row){
    ?>
    <br><br><br><br>
        
        <div class="col-lg-6 col-sm-2" style="" >
                <div class="product-image">					
						<h1 style="font-size:25px;font-family:cursive">Information de<span style="color:#7621a7;font-family:cursive;color:black"> <?php echo $row['nom'] ?></span> avec informations sur votre plat</h1><br><br>
                        
                    <span  style="color:#7621a7;font-family:cursive;color:black"><?php echo $row['nom'] ?></span><br><br>
                    <span  style="color:#7621a7;font-family:cursive;color:black"><?php echo $row['prenom'] ?></span><br><br>
                    <span  style="color:#7621a7;font-family:cursive;color:black"><?php echo $row['naissance'] ?></span><br><br>
                    <a href="https://mail.google.com"  style="font-family:cursive;color:black;text-decoration:none">vérifiez votre gmail  :<span style="color:blue"><?php echo $row['email'] ?></span></a><br><br>
                    
                    </div>
            </div>
            
            <?php
            
            }
            ?>
        <?php
    include "../class/classOffers.php";
    $idreservation = $_GET['id'];
    $object = new offers();
    $data = $object->afficheInfoOffers($idreservation);
    foreach($data as $row){
    ?>
        
        <div class="col-lg-6 col-sm-3"  >
            <div class="product-grid" >
                <div class="product-image">					
                        <a>
                    <img class="picture" src="../images/les plats/<?php  echo $row['image']?>" style="width: 102%;height: 344px;background-size: 30%;">
                    </a>
                    <span class="product-trend-label" style="background-color:#7621a7;padding: 5px 26px;cursor: pointer;text-transform: uppercase;border-radius: 10px 50px 50px 10px;top: 15px">nouvau</span>
                    <span class="product-trend-label-left" style="background-color:#7621a7;position: absolute;z-index: 10;top:16px;overflow: hidden;height: 34px;padding: 5px 15px;cursor: pointer;text-align: center;text-transform: capitalize;color: #ffffff;-webkit-border-radius: 30px;-moz-border-radius: 30px;border-radius: 30px;margin-left:430px;width:106px"> prix <?php echo $row['prix'] ?>DH</span>
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
			

<br><br><br><br><br><br>
 <?php
    include "footer.php";
    ?>
    
</body>
</html>
