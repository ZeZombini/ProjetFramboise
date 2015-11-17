
<?php
// Coerent avec la BD
require_once("groupe.class.php");
require_once("evenement.class.php");
require_once("scene.class.php");

class Passage {
  // Variables deorganisateur
  var $heureBalance;
  var $heurePassage;
  var $jourPassage; // Pas sur diagramme de class
  // Association avec Groupe
  var $groupes; // Cardinalité : *
  // Association avec Evenement
  var $evenements; // Cardinalité : *
}
 ?>
