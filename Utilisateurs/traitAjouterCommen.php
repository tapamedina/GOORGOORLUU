<?php
		if(isset($_POST['go']) && $_POST['go']=='poster'){
				if (!isset($_POST['message']) || !isset($_POST['auteur'])) {
					$erreur = 'La variable nécessaire au script n est pas définie.';
				}
				else {
					// on teste si les variables ne sont pas vides
					if (empty($_POST['message']) || empty($_POST['message'])) {
						$erreur = 'un des champs est vide.';
					}

				}
		}
	// si tout est bon, on peut commencer l'insertion dans la base
	else {
		// on se connecte à notre base
		$base = mysql_connect ('localhost', 'root', '');
		mysql_select_db ('goorgoorluu', $base) ;
		$mess = $_POST['message'];
		$nom = $_POST['auteur'];
		// préparation de la requête d'insertion (pour la table forum_sujets)
		$sql = "INSERT INTO commentaire(id,comment,nom) VALUES('','$mess','$nom')";

		// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
		mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

		// on recupère l'id qui vient de s'insérer dans la table forum_sujets
		$id_sujet = mysql_insert_id();
		// on ferme la connexion à la base de données
		mysql_close();

		// on redirige vers la page d'accueil
		header('Location: commentaire.php');
	}
  			
?>