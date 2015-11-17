<?php
// Cohérent avec la BD
require_once("organisateur.class.php");
require_once("scene.class.php");

class Lieu {

  // Variables de lieu
  var $idLieu;
  var $adresse;
  // Association avec scene
  var $scenes; // Cardialité : *
  // Association avec organisateur
  var $proprietaire; // Cardialité : 1

}
 ?>
