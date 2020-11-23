<?php

include_once("connexion.php");

  class panier extends connexion{

public function afficheInfoPanier($idreservation){
  $query = "select * from reservation where idReservation='".$idreservation."'";
  $result=$this->Connect()->query($query);
  $data=$result->fetchAll();
  return $data;
      }
    }

 ?>