<?php
// Cohérent avec BD
require_once("utilisateur.class.php");
require_once("passage.class.php");
require_once("groupe.class.php");

class Groupe extends Utilisateur {

  // Variables de groupe
  var $style;
  //var $note;
  var $taille;
  var $matDispo;

  // Association avec booker
  var $bookers; // Cardinalité : *
  // Association avec Evenement via heure de passage
  var $passage; // Cardinalité : 1
}
 ?>
