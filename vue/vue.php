<?php

  class Vue{

  function demandePseudo(){
  header("Content-type: text/html; charset=utf-8");
  ?>
  <html>
    <body>
      <br/>
      <br/>
      <span>BONJOUR, connect toi :</span>
      <form method="post" action="index.php">
        Pseudonyme  <input type="text" name="pseudo"/>
        </br>
        Mot de passe <input type="text" name="mdp"/>
        </br>
        <input type="submit" name="soumettre" value="envoyer"/>
      </form>
      <br/>
      <br/>
    </body>
  </html>
  <?php
  }

  function jouer($pseudo){
    ?>Vue du jeu<?php
  }

}
?>
