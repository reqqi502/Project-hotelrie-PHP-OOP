<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/nicepage.css">
    <link rel="stylesheet" href="../public/offers1.css">
    <link rel="shortcut icon" type="image/ico" href="../images/favicone.png"/>
    <title>Page Admin</title>
    <style>
      .vde3 {
    height: 52% !important;
    width: 46% !important;
    margin: 229px 0px 0px 6px !important;
}
.vd2 {
    margin: -242px 0px 0px 920px !important; 
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
       <form action="" method="POST">
          <button class="nav-link" type="submit" name="sube" style="position: absolute;margin-left: 1389px;margin-top: 106px;z-index: 3;background-color:red;color:white;border-radius: 10% / 50%;border-color: red;">Logout</button>
       </form>

    <?php
    session_start();
        if(empty($_SESSION['admin'])){
        header("location:index.php");
    }else{
    echo "<h1 style='margin-top: 0;color:white;background:#7621a7;width:100%;text-align:center;padding:10px;margin-bottom:0;font-family:cursive;font-size:20px'>welcome <span style='color:red'>" .$_SESSION['admin'] ."</span> to your page!&nbsp;<span style='color:orange'>'ADMIN!'</span></h1>";
    }
    ?>
    <?php
         include "header.php";
    ?>
   <br><br><br><br><br>
<!---------------- ajouter loffre --------->
<section class="u-align-left u-black u-clearfix u-section-7" id="carousel_ccf3" >
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-left u-container-style u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h3 class="u-text u-text-1" style="color:#7621a7;font-size:45px;text-align:center;font-family:cursive">Ajouter un plat</h3><br>
            <p class="u-text u-text-2" style="font-size: 19px;text-align: center;color:white">Un cocept Innovant De Cuisine Et Equilibrée Pour Les Entreprises»</p><br>
          </div>
        </div>
        <div class="u-form u-form-1">
            <!------------------ insert offers --------------->
        <?php
             include_once('../class/classOffers.php');
             if(isset($_POST['submited'])){
              $image = $_POST['image'];
              $date = $_POST['date'];
              $nom = $_POST['nom'];
              $prix = $_POST['prix'];
             
                  $objet = new offers();
                  $objet->admininsertoffers($image,$date,$nom,$prix,);
             }                  
              ?>
            <form action="" method="POST">
              <div  class="u-clearfix u-form-spacing-20 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">
              
            <div class="u-form-email u-form-group u-form-partition-factor-2 u-form-group-1">
              <label for="email-f2a8" class="u-label u-text-grey-40" style="font-size: 21px;font-weight: 700;color:white">Image Url</label>
              <input type="text" placeholder="Entré Lurl De Limage" id="email-f2a8" name="image" class="u-border-1 u-border-grey-30 u-grey-80 u-input u-input-rectangle" required="" style="background-color: #c3b0c5;border: 4px solid #7621a7;color:#7621a7">
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-2">
              <label for="name-f2a8" class="u-label u-text-grey-40" style="font-size: 21px;font-weight: 700;color:white">La Date</label>
              <input type="Date" placeholder="Entré la dstination" id="name-f2a8" name="date" class="u-border-1 u-border-grey-30 u-grey-80 u-input u-input-rectangle" required="" style="background-color: #c3b0c5;border: 4px solid #7621a7;color:#7621a7">
            </div>
            <div class="u-form-date u-form-group u-form-partition-factor-2 u-form-group-3">
              <label for="date-4441" class="u-label u-text-grey-40" style="font-size: 21px;font-weight: 700;color:white">Le Nom</label>
              <input type="text" placeholder="le nom de plat" id="date-4441" name="nom" class="u-border-1 u-border-grey-30 u-grey-80 u-input u-input-rectangle" required="" style="background-color: #c3b0c5;border: 4px solid #7621a7;color:#7621a7">
            </div>
            <div class="u-form-group u-form-message u-form-group-5">
              <label for="message-f2a8" class="u-label u-text-grey-40" style="font-size: 21px;font-weight: 700;color:white">Entré le prix</label>
              <input type="number" placeholder="Entré Le prix"  rows="4" cols="50" id="message-f2a8" name="prix" class="u-border-1 u-border-grey-30 u-grey-80 u-input u-input-rectangle" required="" style="background-color: #c3b0c5;border: 4px solid #7621a7;width:300px;color:#7621a7"></input>
            </div>
            
            
            <div class="u-align-left u-form-group u-form-submit u-form-group-6">
              <button name="submited" class="u-border-2 u-none u-btn-1" id="btnS">SEND</button>
            </div>
            <input type="hidden" value="" name="recaptchaResponse">
            </form>
        </div>
      </div>
    </div>
    </section>
    
    <br><br><br><br>
    <!------------------ affichage offers --------------->
    <div class="container"style="text-align:center;max-width: 80%;" >
    <h2 style="font-size: 45px;text-align: center;margin-bottom: -98px;font-family: cursive;">Vous pouvez modifier ou annuler les plats</h2>

 </div><br><br><br><br><br><br><br><br>
 <div>
 <div class="row" style="padding-right: 100px;padding-left: 100px;" >
    <?php
      $object = new offers();
      $data = $object->afficheoffersadmin();
      for ($i=0; $i < count($data); $i++) { 
    ?>
             <div class="col-lg-3 col-sm-3" style="margin-bottom:20px">
		 <div class="product-grid">
			 <div class="product-image">
                    <a>
                    <img class="pic-1" src="../images/les plats/<?php echo $data[$i]['image']?>" style="width: 350px;height: 300px;background-size: 30%;">
                    </a>
                    <span class="product-trend-label" style="background-color:#7621a7;padding: 5px 26px;cursor: pointer;text-transform: uppercase;border-radius: 10px 50px 50px 10px;top: 15px">nouvau</span>
	
                   &nbsp;
                   <span class="product-trend-label-left" style="background-color:#7621a7;position: absolute;z-index: 10;top:16px;overflow: hidden;height: 34px;padding: 5px 15px;cursor: pointer;text-align: center;text-transform: capitalize;color: #ffffff;-webkit-border-radius: 30px;-moz-border-radius: 30px;border-radius: 30px;margin-left:236px;width:106px"> prix <?php echo $data[$i]['prix'] ?>$</span>
                    <a href="adminedite.php?id=<?php echo $data[$i]['id']; ?> " class="product-trend-label-left" style="background-color:#7621a7;position: absolute;z-index: 10;top: 260px;;overflow: hidden;height: 34px;padding: 5px 15px;cursor: pointer;text-align: center;text-transform: capitalize;color: #ffffff;-webkit-border-radius: 30px;-moz-border-radius: 30px;border-radius: 30px;margin-left: 213px;width: 129px;">Ajustement</a>
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
<br><br><br><br>
    <?php
    include "footer.php";
    ?>

</body>
</html>