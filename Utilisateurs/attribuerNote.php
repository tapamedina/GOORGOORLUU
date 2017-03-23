<?php

	if(isset($_POST['go']) && $_POST['go']=='Valider'){
		if (!isset($_POST['note']) || !isset($_POST['code'])) {
					$erreur = 'La variable nécessaire au script n est pas définie.';
				}
				else {
					// on teste si les variables ne sont pas vides
					if (empty($_POST['note']) || empty($_POST['code'])) {
						$erreur = 'un des champs est vide.';
					}

				}
		}
	else {
		$base = mysql_connect ('localhost', 'root', '');
		mysql_select_db ('goorgoorluu', $base) ;
		$sql = "select * from serviceRendu;";
		$result=mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
		$ok=false;
		$note=14;
		$cod=4;
		while($donnee = mysql_fetch_array($result)){
			if($_POST['code']==(string)$donnee['code']){
				$ok=true;
				$sq="UPDATE serviceRendu SET note=$note WHERE  code=4;";
				mysql_query($Sq);
				break;
			}

		}
		
		if($ok==false){

			header('Location : note.php');
		}
		else{
		mysql_close();
		// on redirige vers la page d'accueil
		header('Location: Accueil.php');
	}
}
	
?>