document.getElementById("connexion").addEventListener("submit", function(e) {
	e.preventDefault();
	var id = document.getElementById("id").value;
	var mdp = document.getElementById("MDP").value;
	if (id == "admin" && mdp == "mdp") {
			document.location.href="../ListeInv.php"
	}
	if (id != "admin" || mdp != "mdp") {
		erreur = "L'identifiant ou le mot de passe est incorrecte !"
	}
	if (id == "" || mdp == ""){
		erreur = "Un champ n'a pas été renseigné !"
	}
	if (erreur) {
	 document.getElementById("erreur").innerHTML = erreur;
	} 
});