<?php
// Coherent avec BD
require_once("utilisateur.class.php");
class Booker extends Utilisateur {

  // Variables de booker
  var $stylePref;
  var $pourceCom;
  var $tailleGrp;
  // Association avec groupe
  var $groupes; // Cardialité : *


   function __construct() {

     
   }
}
 ?>
