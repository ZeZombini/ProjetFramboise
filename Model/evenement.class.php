<?php
// A revoir avec BD concernant les cardinalités
require_once("organisateur.class.php");
require_once("passage.class.php");
require_once("scene.class.php");
class Evenement {

  // Variables de l'événement
  var $idEvenement;
  var $nom;
  var $dateDeb;
  var $dateFin;
  var $periodeProg;
  var $hebergement;
  var $catering;
  var $remunerer;
  var $matosDispo;
  // Association avec Groupe via heure de passage
  var $passage; // Cardinalité : 1
  // Association avec Scène
  var $scene; // Cardinalité : 1..*
  // Association avec organisateur
  var $idOrga; // Cardinalité : 1
}
 ?>
