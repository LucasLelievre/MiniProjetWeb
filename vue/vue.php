<?php
require_once PATH_METIER."/Message.php";

  class Vue{

  function demandePseudo(){
  header("Content-type: text/html; charset=utf-8");
  ?>
  <html>
    <body>



        <br/>
        <br/>
        <form method="post" action="index.php">
        Pseudonyme  <input type="text" name="pseudo"/>
        </br>
        Mot de passe <input type="text" name="mdp"/>
      </br>
      <input type="submit" name="soumettre" value="envoyer"/>
    </form>
    <br/>
  <br/>
  <?php
  }

  function affichage($message){
    header("Content-type: text/html; charset=utf-8");

  ?>
  <html>
    <body>
      <form method="post" action="index.php">
      Entrer un message  <input type="text" name="message"/>
  </form>
      <br/>
    <br/>
    <ol>
      <?php
      foreach ($message as $value) {
        ?>
        <li> <?php echo($value->pseudo); ?> Message : <?php echo($value->message); ?>
        <?php

      }
      ?>
    </ol>
    <br/>
  <br/>

  <?php
}
}
?>
