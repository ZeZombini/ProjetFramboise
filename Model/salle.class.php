<?php
// Cohérent avec la BD
require_once("organisateur.class.php");
require_once("scene.class.php");
require_once("lieu.class.php");

class Salle extends Lieu {

  // Variables de salle
  var $idLieu;
  var $idProprio;
  var $carte;
  var $description;
  var $bar;
  // Association avec organisateur
  var $idProprio; // Cardialité : 1

}
 ?>
