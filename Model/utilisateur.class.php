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
	              		flash('dberror', 'Ce compte n\'existe pas.');
	              		return false;
	              	} else {
	              		flash('connexion', 'Connexion effectuée.');
	              		return true;
	              	}

	            } catch (PDOException $e) {
	            	
	            }
	    } else {
	    	return false;
	    }
 	}

 	public logout(){

 	}

 	public register($mail,$mdp){
 		$mdp = password($mdp);

 	}

   	private password($mdp){
    	$salt = "9W5Ntleg691h4208tWKz02D40E6XmFU3";
    	$mdp = hash('sha512', $salt . $mdp);
    	return $mdp;
	}

}
 ?>
