<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>reservation</title>
    <link rel="stylesheet" href="../public/reservation.css">
    <link rel="stylesheet" href="../public/scroltop.css">
    <link rel="shortcut icon" type="image/ico" href="../images/icone.png"/>
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
    if(empty($_SESSION['user'])){
        echo "<h1 style='margin-top: 0;color:white;background:#7621a7;width:100%;text-align:center;padding:10px;margin-bottom:0;font-family:cursive;font-size:20px'> Bienvenue <span style='color:red'>vous devez vous connecter</span> pour demander les plats
        !</h1>";
    
                       } 
    if(!empty($_SESSION['user'])){
        echo "<h1 style='margin-top: 0;color:white;background:#7621a7;width:100%;text-align:center;padding:10px;margin-bottom:0;font-family:cursive;font-size:20px'>Bienvenue <span style='color:red'>" .$_SESSION['user'] ."</span> à votre page!</h1>";
        echo"<form action='' method=\"POST\">
        <button class='nav-link' type='submit' name='sube' style='position: absolute;margin-left: 1389px;margin-top: 66px;z-index: 3;background-color:red;color:white;border-radius: 10% / 50%;border-color: red;'>Logout</button>
    </form>";
}

?>
<?php
    include "header.php";
?>
    <?php
    include('../class/classReservation.php');
    if(isset($_POST['reserver'])){
    $id = $_GET['id'];
    $nom  = $_POST['nom'];
    $prenom  = $_POST['prenom'];
    $email  = $_POST['email'];
    $naissance = $_POST['naissance'];
    $sex  = $_POST['sex'];
    $cart  = $_POST['cart'];
    $cvc  = $_POST['cvc'];
   $objet = new reserve();
   $objet->insertReservation($id,$nom,$prenom,$email,$naissance,$sex,$cart,$cvc);
   $sub = "addresse client :" .$address;
    $msg = "Votre plat sera bientôt livré chez vous à cette adresse ";
    $rec = $email;
    if($mail = mail($email,$sub,$msg)){
     echo "<script type='text/javascript'>alert('mail send we ganna repply !!!')</script>";
    }else{
        echo "<script type='text/javascript'>alert('mail not send ')</script>";
        header("location:index.php");
    }
    }
    ?>
    <br><br><br><br><br>
<div class="wrapper">
        <h3>Payment Form</h3>
<form method="POST" action="">
            <h2>Compte</h2>
              <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="Nom" required class="name" name="nom" required>
                    <i class="fa fa-user icon"></i>
                </div>
                      <div class="input-box">
                    <input type="text" placeholder="Prenom" required class="name" name="prenom" style="width: 98%;" required>
                    <i class="fa fa-user icon"></i>
                </div>
                </div>
                <div class="input-group">
                <div class="input-box">
                    <input type="email" placeholder="Email" required name="email" class="name" style="width: 98%;" required>
                    <i class="fa fa-envelope icon"></i>
                </div>
                </div>
                <div class="input-group">
                <div class="input-box" >
                
                    <h2>Date de naissance</h2>
                    <input type="date" placeholder="Date De Naisance" name="naissance" class="dob" style="width:99%" required>
                    
                    
                </div>
                <div class="input-box">
                    <h2>le sexe</h2>
                    <select name="sex" style="width:98%;" resquired>
                    <option type="radio" id="b1"  name="gendar" value="male" >male</option>
                    <option type="radio" id="b2" name="gendar" value="femal">female</option>
                    </select>
                </div>
                </div>
                <div class="input-group" style="float:right;margin-top:-475px;margin-right:-661px;">
                <div class="input-box">
                    <h2>Détails de paiement</h2>
                    <input type="radio" name="pay" id="bc1" checked class="radio" >
                    <label for="bc1"><span><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-credit-card-2-front-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zm0 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                     </svg></i> Carte de crédit</span></label>
                    <input type="radio" name="pay" id="bc2" class="radio">
                    <label for="bc2"><span><i class="fab fa-paypal"></i> Paypal</span></label>
                
                </div>
               <div class="input-group">
                <div class="input-box">
                    <input type="tel" name="cart" max="8" min="7" placeholder="Numéro de carte" required class="name" resquired>
                    <i class="fa fa-credit-card icon" style="height: 54px;"></i>
                </div>
                </div>
                <div class="input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Carte CVC" required class="name" name="cvc" required>
                    <i class="fa fa-user icon"></i>
                </div>
                </div>
                </div>
                <div class="input-group">
                <div class="input-box">
                    <button type="submit" name="reserver" class="btn">PAYER MAINTENANT</button>
                </div>
       </div>
</form>
</div>
<a href="#" class="to-top"><i class="fas fa-angle-double-up"></i></a>
<br><br><br><br><br><br><br><br><br>
    <?php
include "footer.php";
?>
<script src="../public/scroltop.js" type="text/javascript"></script>

</body>
</html>
