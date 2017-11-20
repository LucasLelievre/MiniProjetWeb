<?php

require_once 'controleurAuthentification.php';
require_once 'controleurMessage.php';


class Routeur {

  private $ctrlAuthentification;
  private $controleurMessage;


  public function __construct() {
    $this->ctrlAuthentification= new ControleurAuthentification();
    $this->controleurMessage= new ControleurMessage();

    }

  // Traite une requête entrante
  public function routerRequete() {

try{
    if(isset($_POST["pseudo"])){
        setcookie("pseudo", $_POST["pseudo"]);
      }
   if(isset($_POST["pseudo"]) || isset($_COOKIE["pseudo"])){
        if(isset($_POST["message"])){

              $this->controleurMessage->ajoutMessage($_POST["message"]);
        }
    }

    else{
      $this->ctrlAuthentification->accueil();
    }
 }
catch(PDOException $e){
  $this->ctrlAuthentification->accueil();
}

 }
}
?>
