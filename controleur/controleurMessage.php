<?php
require_once PATH_VUE."/vue.php";
require_once PATH_MODELE."/modele.php";


class ControleurMessage{

private $vue;
private $modele;

  function __construct(){
    $this->vue=new Vue();
    $this->modele=new Modele();
  }

 function ajoutMessage($message){

   $this->modele->majSalon($_COOKIE['pseudo'],$message);
   $message = $this->modele->get10RecentMessage();

   $this->vue->affichage($message);
 }

}
