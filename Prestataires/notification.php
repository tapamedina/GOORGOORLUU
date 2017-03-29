<?php
	session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<title>Goorgoorlu</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css"/>
	<link rel="stylesheet" type="text/css" href="../css/notification.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
	<!--[if lt IE 7]>
	<link rel="stylesheet" href="ie.css" type="text/css">
<![endif]-->
</head>
<body>
<div id="wrap">

	<div id="header">
		<p><img src="../images/logo.jpg" style="float: right;margin: -0.8em 2em; width:80px; height: 55px;"></p>
	</div>

	<div id="content-wrap">
			<div class="nav-side-menu">
			    <div class="brand">Menu</div>
			    <i class=" material-icons toggle-btn" data-toggle="collapse" data-target="#menu-content" style="background: lightgrey">menu</i>
			  
			        <div class="menu-list">
			            <ul id="menu-content" class="menu-content collapse out">
			                <li >
			                  <a href="account.php">
			                  	 <i class="material-icons"> account_circle</i> 
			                  	 <span>Account</span>   	 
			                  </a>
			                </li>
			                <li data-toggle="collapse" class="collapsed active">
			                	<a href="notification.php">
			                  	 <i class="material-icons"> announcement</i>
			                  	 <span>Notifications</span>
			                   </a>
			                </li>  
			                <li data-toggle="collapse"  class="collapsed">
			                  <a href="statistique.php">	
			                    <i class="material-icons">assessment</i>
			                    <span>Statistiques</span>
			                   </a>			                   
			                </li>
			                 <li data-toggle="collapse" class="collapsed">
		                  		<a href="parametres.php"><i class="material-icons">settings</i>
		                  			<span>Parametres</span>
		                  		</a>
			                </li>
			                <li data-toggle="collapse" class="collapsed">
								<a href="?deconnex=true"><i class="material-icons">lock outline</i>
									<span>Deconnexion</span>
								</a>
							</li>
			            </ul>
			    	</div>
			</div>
<?php
				// on se connecte à notre base de données
				$base = mysql_connect ('localhost', 'root', '');
				$photo;
				mysql_select_db ('goorgoorluu', $base) ;	
				$request=mysql_query("SELECT service from prestataire where login='".$_SESSION['login']."'");
				while($donnee=mysql_fetch_array($request)){
					$serv=$donnee['service'];
				}			
				$request1=mysql_query("SELECT logo from service where libelle='$serv'");
				while($donne1 = mysql_fetch_array($request1)){
					$photo=$donne1['logo'];
				}

			echo '<div id="content">';

				echo '<div class="fieldset1" style="float: right;margin-bottom: -5em;">';
					echo '<img src="../images/services/'.$photo.'"
					style="border:4px solid black;border-radius: 30px;width: 90px;height: 90px;margin-left: 30em;padding: 0.5em;background: black">';
				echo '</div>';
?>
				<div class="fieldset" style="float: right;">
					<div class="cards">
					

<?php				// préparation de la requete
				
				$sql = "SELECT dat,note,user from servicerendu where log='".$_SESSION['login']."'";


				// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
				$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

				

				// on compte le nombre de sujets du forum
				$nb_sujets = mysql_num_rows ($req);
				if ($nb_sujets == 0) {
				echo 'Aucun service rendu';
				}
				else {
					while ($data = mysql_fetch_array($req)) {
							$user=$data['user'];
							$s=" SELECT * from soliciteur where id=$user ";
							$req1=mysql_query($s) or die('Erreur SQL !'.$s.'<br />'.mysql_error());
							echo '<div class="card" style="padding:1.5em;"';
								echo '<div class="content" style="padding: 1em;">';
									echo '<div class="header">';
										while($dat=mysql_fetch_array($req1)){
											echo 'Soliciteur : '.htmlentities(trim($dat['prenom'])).' ' ;
											echo htmlentities(trim($dat['nom']));
										}
									echo '</div>';
									echo '<div class="meta">';
										echo 'Date : '.htmlentities(trim($data['dat']));
									echo '</div>';
									echo '<div class="description">';
										echo 'Note Attribuee : '.htmlentities(trim($data['note']));
									echo '</div>';
								echo '</div>';
							
				  	}
				  }
				  mysql_close();
				  
				  	if(isset($_GET['deconnex'])){
									session_destroy();
									header("location:../index.php");
								}		

?>							
		    </div> 
		       </div>
				
			
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