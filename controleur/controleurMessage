<?php
require_once PATH_VUE."/vue.php";
require_once PATH_MODELE."/modele.php";


class ControleurAuthentification{

private $vue;
private $modele;

  function __construct(){
    $this->vue=new Vue();
    $this->modele=new Modele();
  }

  function accueil(){
    $this->vue->demandePseudo();
  }

  function verifierIdentification($pseudo){
    if($this->modele->exists($pseudo)){
      $message = $this->modele->get10RecentMessage();
      $this->vue->affichage($message);
    }
    else{
        $this->vue->demandePseudo();
    }
  }

}
