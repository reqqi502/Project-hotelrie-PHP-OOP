<?php
    include_once("connexion.php");
    class offers extends connexion{


    public function admininsertoffers($image,$date,$nom,$prix){
     $conn=$this->Connect();
        $query = "insert into offers values (NULL,'".$image."','".$date."','".$nom."','".$prix."')";
        $result = $conn->exec($query); 
        return true;
    }

    public function afficheoffersadmin(){
        $conn=$this->Connect();
        $query = "SELECT * FROM `offers`";
        $result=$conn->query($query);   
         $data=$result->fetchAll(); 
        return $data;
    }
    public function afficheanEdit($id){
      $conn=$this->Connect();
      $query = "SELECT * FROM `offers` WHERE id= '".$id."'";
      $result=$conn->query($query);   
       $data=$result->fetchAll(); 
      return $data;
  }
    public function supprimeroffers($key){
    $conn=$this->Connect();
    $query = "DELETE FROM `offers` WHERE `id` = '$key'";
    $stmt=$conn->query($query);
    $result = $stmt->execute();
    if($result){
        echo '<script>alert("le plat a été supprimer")</script>'; 
      }else{
          echo "data not deleted !!! ..";
    }
}


public function modifierloffre($key,$image,$date,$nom,$prix){
  $conn=$this->Connect();
  $query = "update offers set image='$image',date='$date',nom='$nom',prix='$prix' where id='$key'";
  $result = $conn->query($query);
  if($result){
    $messageA = "data insert";
  echo "<script type='text/javascript'>alert('$messageA');</script>";
  }else{
    $messageB = "data not insert";
    echo "<script type='text/javascript'>alert('$messageB');</script>";
  }
}
  
  public function afficheInfoOffers($idreservation){
    $query = "Select * from offers   where id = '".$idreservation."'";
    $result=$this->Connect()->query($query);
    $data=$result->fetchAll();
  return $data;
}
public function GetIdRservation(){
  $query = "Select * from reservation";
  $result=$this->Connect()->query($query);
  $data=$result->fetchAll();
return $data;

  }
 }
?>