<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Informations traitées</title>
	</head>
	<body style="background-image:url('../background/PARTIE.jpg');background-size:cover;">
		<?php
		session_start();
			$sexe = $_SESSION["sexe"];
			$heureArr = $_SESSION["heureArr"];
			$heureDep = $_SESSION["heureDep"];
			$heureDors = $_SESSION["heureDors"];
			$name = $_SESSION["name"];
			$TPRENOM = $TPRENOM = $_SESSION["TPRENOM"];
			$TPADRESSE = $_SESSION["TPADRESSE"];
			$TPCODEPOSTAL = $_SESSION["TPCODEPOSTAL"];
			$TPTEL = $_SESSION["TPTEL"];
			$TPVILLE = $_SESSION["TPVILLE"];
			$TPALLERGIE = $_SESSION["TPALLERGIE"];
			$TPMUSIQUE = $_SESSION["TPMUSIQUE"];
			$TPBOISSON = $_SESSION["TPBOISSON"];
			$nbboisson = $_SESSION["nbboisson"];
			$TPCOM = $_SESSION["TPCOM"];
		?>
		<?php
		function verifID($prenom,$nom){
			$handle = fopen("Invites.txt","r");
			$LinePrenom = "Prénom : ".$prenom.";\n";
			$LineNom = "Nom : ".$nom.";\n"; 
			$PrenomHere = false;
			$NomHere = false;
			if ($handle){
				while(!feof($handle)){
					$buffer = fgets($handle);
					if ($buffer == $LinePrenom){
						$PrenomHere = true;
					} 
					elseif ($buffer == $LineNom){
						$NomHere = true;
					}
					if ($PrenomHere == true and $NomHere == true){
						return false;
					}
				}
			return true;	
			}
		}
		if (verifID($TPRENOM,$name) == true){
			$fichier = fopen("Invites.txt","c+b");
			fseek($fichier, filesize('Invites.txt'));
			fwrite($fichier,"Prénom : ".$TPRENOM.";\n");
			fwrite($fichier,"Nom : ".$name.";\n");
			fwrite($fichier,"Sexe : ".$sexe.";\n");
			fwrite($fichier,"Numéro de téléphone : ".$TPTEL.";\n");
			fwrite($fichier,"Ville : ".$TPVILLE.";\n");
			fwrite($fichier,"Adresse : ".$TPADRESSE.";\n");
			fwrite($fichier,"Code postal : ".$TPCODEPOSTAL.";\n");
			if ($TPALLERGIE != ""){
				fwrite($fichier,"Allergie(s) :".$TPALLERGIE.";\n");
			} else {
				fwrite($fichier,"Allergie(s) : pas d'allergie renseigné !!;\n");
				}
			fwrite($fichier,"Heure d'arrivée : ".$heureArr.";\n");
			fwrite($fichier,"Heure de départ : ".$heureDep.";\n");
			fwrite($fichier,"Nombre de boisson(s) : ".$nbboisson." de ".$TPBOISSON.";\n");
			fwrite($fichier,"Musique(s) :".$TPMUSIQUE.";\n");
			if ($TPCOM != ""){
				fwrite($fichier,"Commentaire : ".$TPCOM.";\n \n");
			} else {
				fwrite($fichier,"Commentaire : pas de commentaire renseigné !!;\n \n");
				}
			echo"<h1 style='text-align:center;'>Les informations ont bien étées traitées !</h1>";
		} else {
			echo"<h1 style='text-align:center;'>Vos informations ont déjà étées renseignées !</h1>";
			}
		?>

	</body>


</html>