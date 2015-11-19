<?php
// Cohérent avec BD
class Utilisateur {

  var $idUser;
  var $libelle;
  var $description;
  var $siteWeb;
  var $tel;
  var $mail;
  var $mdp;

  var $zone;

  // Association avec lui-même avec les contacts
  var $contacts;


 	public login($mail,$mdp){
	  	if ($mail != NULL && $mdp !=NULL) {
	            try {
	            	$mdp = password($mdp);
	              	$q = "SELECT count(*) FROM Utilisateur WHERE mail=$mail and mdp=$mdp";
	              	$r = $this->db->exec($q);
	              	if ($r == 0) {
	              		return false;
	              	} else {
	              		return true;
	              	}

	            } catch (PDOException $e) {
	            	
	            }
	    } else {
	    	return false;
	    }
 	}


   	private password($mdp){
    	$salt = "9W5NXle5691ah08tWKz02DJB40E6XFU3";
    	$mdp = md5($mdp . $salt);
    	return $mdp;
	}

}
 ?>
