<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<title>Goorgoorlu</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css"/>
	<link rel="stylesheet" type="text/css" href="../css/listePrestataires.css"/>
	<!--[if lt IE 7]>
	<link rel="stylesheet" href="ie.css" type="text/css">
<![endif]-->


</head>
<body>
<div id="wrap">

	<div id="header">
		<p><img src="../images/logo.jpg" style="float: right;margin: -0.8em 2em; width:80px; height: 55px;"></p>
	</div>

	<div id="content-wrap" style="overflow: hidden;">
		<div id="content">
		<form action="infoUtilisateur.php" method="POST">
				<div class="fieldset1" style="overflow-x: hidden;">
					 
					   <div class="field">
                  <div class="special cards" style="margin: 1em;">
                 	
     <?php   

			if(isset($_POST['go']) && $_POST['go']=='Valider'){
				if (!isset($_POST['nom']) || !isset($_POST['prenom'])) {
					$erreur = 'La variable nécessaire au script n est pas définie.';
				}
				else {
					// on teste si les variables ne sont pas vides
					if (empty($_POST['nom']) || empty($_POST['prenom'])) {
						$erreur = 'un des champs est vide.';
					}

				}
		}
	// si tout est bon, on peut commencer l'insertion dans la base
	else {
		// on se connecte à notre base
		$base = mysql_connect ('localhost', 'root', '');
		mysql_select_db ('goorgoorluu', $base) ;
		$serv=$_POST['service'];
		$loc=$_POST['loc'];
		// préparation de la requête d'insertion (pour la table soliciteur)
		$sql = "SELECT login,tel,nom,prenom,moyenne,service,rayonCouverture,photo,disponibilite from prestataire where service='$serv' and rayonCouverture='$loc' and disponibilite=true ";
		 $req = mysql_query($sql);
		 	while($data = mysql_fetch_array($req)){
                    echo '<div class="card">';
                        	echo '<div class=" image">';
                          		echo '<img src="../images/profiles/'.htmlentities(trim($data['photo'])).'" 	style="width:23.8em;height:14em"/>';
                       		 echo '</div>';
                        	echo '<div class="content">';
                         			echo '<a class="header">';
                         				echo htmlentities(trim($data['prenom']));
                         				echo htmlentities(trim($data['nom']));
                        			 echo '</a>';
                          			echo '<a class="header">Tel :';
                          				echo htmlentities(trim($data['tel']));;
                          			echo '</a>';
                         			echo '<a class="header">Moyenne :';
                          				echo htmlentities(trim($data['moyenne']));;
                          			echo '</a>';
                       		echo '</div>';
                        	echo '<div class="extra content">';
                        			echo '<input type="radio" name="opt" value="';
                         				echo htmlentities(trim($data['login']));
                        			echo '"/> Choisi';
                        	echo '</div>';
                    echo '</div>';

                 }
         }        
      ?>
                  	</div>
                  </div>
                  
              
                </div>
                <div style=" margin-left: 60rem;margin-top: 0.8em;">
                  		<button class="button" style="width: 10em;margin-top:1em" name="go1">Valider</button>
                 </div>
               </form>
	       </div>
      </div>
   
	<div id="footer">
		<div id="labfooter">
			<p><a href="http://www.456bereastreet.com/lab/">a propos</a> | <a href="http://www.456bereastreet.com/">Conditions d'utilisations</a> | <a href="http://www.456bereastreet.com/lab/">confidentialite</a> </p>
		</div>	
	</div>

</div>
</body>
</html>		