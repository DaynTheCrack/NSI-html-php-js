<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>traitement en cours...</title>	
	</head>
	<body>
		<form action="traitementFini.php" name="traitementFini">
		<h1 class="titre"> Veuillez confirmer les informations saisies !!</h1>
		<!--Script PHP-->
		<?php 
		// récupération  des valeurs des variables dans le 'formulaire.html'
		//ouverture d'une session de sauvegarde des informations 
		session_start();
			$_SESSION["sexe"] = $_POST["sexe"];
			$_SESSION["heureArr"] = $_POST["heureArr"];
			$_SESSION["heureDep"] = $_POST["heureDep"];
			$_SESSION["heureDors"] = $_POST["heureDors"];
			$_SESSION["name"] = $_POST["name"];
			$_SESSION["TPRENOM"] = $_POST["TPRENOM"];
			$_SESSION["TPADRESSE"] = $_POST["TPADRESSE"];
			$_SESSION["TPCODEPOSTAL"] = $_POST["TPCODEPOSTAL"];
			$_SESSION["TPTEL"] = $_POST["TPTEL"];
			$_SESSION["TPVILLE"] = $_POST["TPVILLE"];
			$_SESSION["TPALLERGIE"] = $_POST["TPALLERGIE"];
			$_SESSION["TPMUSIQUE"] = $_POST["TPMUSIQUE"];
			$_SESSION["TPBOISSON"] = $_POST["TPBOISSON"];
			$_SESSION["nbboisson"] = $_POST["nbboisson"];
			$_SESSION["TPCOM"] = $_POST["TPCOM"];
	
		?>
		<article class="article">
		<?php 
		//affciher les valeurs retournées --> mise en  forme de la synthèse d'inscription
		echo"<h1><mark>Prénom</mark> : <i>".$_SESSION["TPRENOM"]."</i></h1>";
		echo"<h2><mark>Nom</mark> : <i>".$_SESSION["name"]."</i></h2>";
		echo"<h3><mark>Sexe</mark> : <i>".$_SESSION["sexe"]."</i></h3>"; 
		echo"<h3><mark>Adresse</mark> : <i>".$_SESSION["TPADRESSE"]."</i></h3>";
		echo"<h3><mark>Ville</mark> : <i>".$_SESSION["TPVILLE"]."</i></h3>";
		echo"<h3><mark>Code Postal</mark> : <i>".$_SESSION["TPCODEPOSTAL"]."</i></h3>";
		echo"<h3><mark>Numéro de téléphone</mark> : <i>".$_SESSION["TPTEL"]."</i></h3>";
		echo"<h3><mark>Heure de d'arrivé</mark> : <i>".$_SESSION["heureArr"]."</i>   <mark>Heure départ</mark> : <i>".$_SESSION["heureDep"]."</i></h3>";
		echo"<h3><mark>Dors sur place</mark> : <i>".$_SESSION["heureDors"]."</i></h3>";
		if ($_SESSION["TPALLERGIE"] != ""){
			echo"<h3><mark>Les allergies</mark> : <i>".$_SESSION["TPALLERGIE"]."</i></h3>";
			}
		else{
			echo"<h3><mark>Les allergies</mark> : <i class='alert'>pas d'allergie renseigné !!</i></h3>";
		}
		echo"<h3><mark>Musique(s) proposée(s)</mark> : <i>".$_SESSION["TPMUSIQUE"]."</i></h3>";
		echo"<h3><mark>Boisson(s) apportée(s)</mark> : <i>".$_SESSION["TPBOISSON"]."</i> <mark>Nombre de boisson(s)</mark> : <i>".$_SESSION["nbboisson"]."</i></h3>";
		if ($_SESSION["TPCOM"] != ""){
			echo"<h3><mark>Commentaire</mark> : <i>".$_SESSION["TPCOM"]."<i/></h3>";
			}
		else{
			echo"<h3><mark>Commentaire</mark> : <i class='alert'>pas de commentaire rensigné !!</i></h3>";
		}
		?>
		<!--Boutons de validation-->
		<div class="block">
			<input type="submit" name="submit" class="submit" value="Valider les informations">
			<input type="button" name="button"class="button" value="Modifier les informations" onclick="history.back()">
			<a href="AdminSession/admin.html"><input type="button" name="admin" class="admin" value="Accéder à la session admin"></a>
		</div>
		</article>
		</form>
	</body>
	<!--infos CSS (mise en page)-->
	<style>
		.titre{
			text-align:center;
			color:red;
			background-color:white;
			margin-left:25%;
			margin-right:25%;
			}
		.article{
			border: solid black 10px;
			border-radius: 25%;
			margin-left: 25%;
			margin-right: 15%;
			padding-bottom:2%;
			background-color:white;
			}
		h1{
			margin-left:25%;
			}
		h2{
			margin-left:25%;
			}
		h3{
			margin-left: 25%;
			}
		body{
			margin: 0;
			padding: 0;
			background-color:grey;
			}
		.block{
			margin-left:25%;
			}
		.alert{
			color:red;
			}
		input[type="submit"]:hover{
			background-color:black;
			color:white;
			}
		input[type="button"]:hover{
			background-color:black;
			color:white;
			}
	</style>





<!--http://127.0.0.1/FormulaireNSI/formulaire.html-->
</html>
