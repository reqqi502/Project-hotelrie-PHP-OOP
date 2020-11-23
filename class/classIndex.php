<?php
include_once("connexion.php");
class offersDetail extends connexion{
public function affichOffers(){
    $conn=$this->Connect();
    $query = "select * from offers order by rand() limit 12";
    $result = $conn->query($query);
    $data = $result->fetchAll();

  return $data ;
} 

public function insertEmail($email){
  $conn = $this->Connect();
  $query = "INSERT INTO `semail`(`id`, `email`) VALUES (NULL,'.$email.')";
  $result = $conn->query($query);
  if(!empty($result)){
    $messageA = "Nous avons atteint votre message, nous vous satisferons bientôt";
    echo "<script type='text/javascript'>alert('$messageA')</script>";
  }else{
    $messageB = "Nous n'avons pas reçu votre message";
    echo "<script type='text/javascript'>alert('$messageB')</script>";
  }
}

}
?>