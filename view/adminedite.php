<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/offers3.css">
    <title>Modifier Ajouter Supprimer les plats</title>
    <link rel="shortcut icon" type="image/ico" href="../images/icone.png"/>
    <style>
      body{
        overflow-x:hidden;
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
          <button class="nav-link" type="submit" name="sube" style="position: absolute;margin-left: 1389px;margin-top:102px;z-index: 3;background-color:red;color:white;border-radius: 10% / 50%;border-color: red;">Logout</button>
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
<br><br><br><br><br><br>

<?php
        include_once('../class/classOffers.php');
        if(isset($_POST['upload'])){
          $key = $_GET['id'];
          $image = $_POST['image'];
          $date = $_POST['date'];
          $nom = $_POST['nom'];
          $prix = $_POST['prix'];
          $objct = new offers();
          $objct->modifierloffre($key,$image,$date,$nom,$prix);
                                   }
    ?>
    <!------ for supprimer offers --->
    <?php
    include_once('../class/classOffers.php');
      if(isset($_POST['submitdeletebtn'])){
      $key = $_GET['id'];
      $objct = new offers();
      $objct->supprimeroffers($key);
                                        }
    ?>
    <div class="container"style="text-align:center;max-width: 100%;" >
    </div><br>
    <div>
    <div class="row" style="padding-right:300px;padding-left: 300px;" >
    <?php
      $object = new offers();
      $id = $_GET['id'];
      $data = $object->afficheanEdit($id);
      for ($i=0; $i < count($data); $i++) { 
    ?>
             <div class="col-lg-3 col-sm-3" style="margin-bottom:20px">
             <div class="product-grid">
			 <div class="product-image">
                <form action="" method="POST">
                    <a href="#">
                    <span class="product-trend-label" style="background-color:#7621a7;padding: 5px 26px;cursor: pointer;text-transform: uppercase;border-radius: 10px 50px 50px 10px;top: 15px;position: absolute;color: white;text-decoration: none;">Offre</span>
                    <img  class="imgnv" src="../images/les plats/<?php echo $data[$i]['image']; ?>">
                    </a>
                </div>  
        </div>
      </div>
      <div class="col-lg-3" style="margin-left:200px;margin-top:0;background-color:#f7f7f7;padding:30px;height:400px">
                    <input type="text" name="image" placeholder="dernière url img :<?php echo $data[$i]['image'] ;?>.." style="box-shadow: 3px 2px #888888;color:gray;background-color: #f9f9f9;padding: 7px 20px;width: 313px;"><br><br>
                    <input type="date" name="date" placeholder="dernière date :<?php echo $data[$i]['date']; ?>.." style="box-shadow: 3px 2px #888888;color: gray;background-color:#f9f9f9;padding: 7px 20px;width: 313px;"><br><br>
                    <input type="text" name="nom" placeholder="dernier nom :<?php echo $data[$i]['nom']; ?>..."  style="box-shadow: 3px 2px #888888;color: gray;background-color: #f9f9f9;width:90%;height:130px;box-sizing:border-box;padding: 7px 20px;width: 313px;"></input><br><br>
                    <input type="number" name="prix" class="price" placeholder="dérnier prix :<?php echo $data[$i]['prix'] ?>$" style="box-shadow: 3px 2px #888888;color: gray;background-color: #f9f9f9;padding: 7px 20px;width: 313px;"> &nbsp;<br><br>
                    <button type="submit"  name="submitdeletebtn" value="<?php echo $data[$i]['id']; ?>" class="btn1" >Supprimer L'offre</button>
                    <button type="submit"  name="upload" value="<?php echo $data[$i]['id']; ?>" class="btn2">Update</button>
      </div>
      </form>
    <?php
        }
    ?>
 </div>
</div>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
    <?php
    include "footer.php";
    ?>



      
    
</body>
</html>