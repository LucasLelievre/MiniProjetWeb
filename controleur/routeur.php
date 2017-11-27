<?php

require_once 'controleurAuthentification.php';


class Routeur {

  private $ctrlAuthentification;
  private $controleurMessage;


  public function __construct() {
    $this->ctrlAuthentification= new ControleurAuthentification();

    }

  // Traite une requête entrante
  public function routerRequete() {

    try{
      if(isset($_POST["pseudo"])){
        setcookie("pseudo", $_POST["pseudo"]);
      }
      if(isset($_POST["pseudo"]) || isset($_COOKIE["pseudo"])){
          //$this->ctrl;//jouer
      } else{
        $this->ctrlAuthentification->accueil();
      }
    } catch(PDOException $e){
      $this->ctrlAuthentification->accueil();
    }
  }
}
?>
