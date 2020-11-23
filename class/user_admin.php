<?php
ini_set('display_errors' , 'Off');
    include_once("connexion.php");
                class user extends connexion{

           public function insertUsers($nome,$prenom,$email,$telephone,$password){
            $conn=$this->Connect();
            $query = "insert into compte values (NULL,'".$nome."','".$prenom."','".$email."','".$telephone."','".$password."','user')";
            $conn->exec($query);
            return $conn;
           }
           public function Login($nome,$passwordr){
            $query="select * from compte";
            $result=$this->Connect()->query($query);
            $data=$result->fetchAll();
               for ($i=0; $i <count($data) ; $i++) { 
                   if($data[$i]["nom"]==$nome && $data[$i]["password"]==$passwordr && $data[$i]["statu"]=='admin'){
                        $_SESSION["admin"]=$nome; 
                        header('location:admin.php');
                       }
                    elseif($data[$i]["nom"]==$nome && $data[$i]["password"]==$passwordr && $data[$i]["statu"]=='user')
                       {
                        $_SESSION["user"]=$nome;
                        echo "<script type='text/javascript'>alert('bienvenuuu $nome!')</script>";
                       }   
                       
                   } 
            }
           
        }
        
            ?>

