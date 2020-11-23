<?php
include_once("connexion.php");
class search extends connexion{
   

  public function recherche($date,$nom){
     $dateactulle = date('y/m/d');
    $querys="select * from offers where date<='$date' and nom='$nom'";
    $result=$this->Connect()->query($querys);
    $data=$result->fetchAll();
    if(empty($data)){
      $message = "Vous ne pouvez pas commander quelque chose en retard !!!!";
      echo "<script type='text/javascript'>alert('$message')</script>";
    }
   
      return $data;
    

}



 }


?>

