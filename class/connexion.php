<?php 
 class connexion{
    protected $host ='localhost';
    protected $dbname='hotel-bio';
    protected $username='root';
    protected $password='';
    
    protected function Connect(){
        try{
            $conn=new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username,$this->password);  
           }

           catch (PDOException $e){
            echo $e->getMessage();
                                  }
           return $conn;
                                }
              }

?>