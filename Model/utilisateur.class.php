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
	              	$temp = $this->db->query("SELECT count(*) FROM Utilisateur WHERE mail=$mail and mdp=$mdp");
	              	if ($temp != FALSE) {
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
		if ($mail != NULL && $mdp !=NULL) {
	            try {
	            	$mdp = password($mdp);
	              	$temp = $this->db->query("SELECT count(*) FROM Utilisateur WHERE mail=$mail");
	              	if ($temp == FALSE) {
	              		flash('dberror', 'Cette adresse email est déja utilisée.');
	              		return false;
	              	} else {
	              		$q = "INSERT INTO Utilisateur (mail,mdp) VALUES ('$mail','$mdp')";
	              		$r = $this->db->exec($q);
	              		flash('connexion', 'Inscription réussie.');
	              		return true;
	              	}
	            } catch (PDOException $e) {
	            	
	            }
	    } else {
	    	return false;
	    }
 	}

   	private password($mdp){
    	$salt = "9W5Ntleg691h4208tWKz02D40E6XmFU3";
    	$mdp = hash('sha512', $salt . $mdp);
    	return $mdp;
	}

}
 ?>
