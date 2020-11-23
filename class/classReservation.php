<?php
include_once("connexion.php");
class reserve extends connexion{
  public function insertReservation($id,$nom,$prenom,$email,$naissance,$sex,$cart,$cvc){
    $conn=$this->Connect();
    $query="insert into reservation  values (NULL,'".$nom."','".$prenom."','".$email."','".$naissance."','".$sex."','".$cart."','".$cvc."','".$id."')";
      echo $query;
      $conn->exec($query);
      $idResevation = $conn->lastInsertId();
      echo "<br>id reservation= ".$idResevation;
    if(empty($result)){
      $message = "votre paiement a été effectué avec succès !";
      echo "<script type='text/javascript'>alert('$message')</script>";
      header("location:panier.php?id=$id && idResrvation=$idResevation");
      ob_get_contents();
    }else{
      header("location:offers.php");
    }
return $data;
     }
  }


?>
