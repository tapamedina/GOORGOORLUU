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
	  else{
	  	 	$base = mysql_connect('localhost','root','');
    		mysql_select_db('goorgoorluu',$base);
	  		$nom=$_POST['nom'];
	  		$prenom = $_POST['prenom'];
	  		$sql =  " INSERT INTO soliciteur(nom,prenom) VALUES('$nom','$prenom') ";
	  		mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
	  		$id=mysql_insert_id();
	  		$code = "SELECT code FROM servicerendu ORDER BY code DESC LIMIT 1";
	  		$result = mysql_query($code);
	  		while ($data =mysql_fetch_array($result)) {
	  			$code= $data['code'];
	  		}
	  		$sql1="UPDATE servicerendu set user=$id where code=$code";
	  		mysql_query($sql1) or die('Erreur SQL !'.$sql1.'<br />'.mysql_error());
	  		echo '<script> alert("voici le code a saisir pour noter ce prestataire apres son service '.$code.'");
	  				document.location.href ="Accueil.php";
	  		      </script>';
	  	
	  		mysql_close();
	  		}

  ?>
  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<title>Goorgoorlu</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css"/>
	<link rel="stylesheet" type="text/css" href="../css/styleMainPrestataire.css"/>
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
		<div id="content">
			<div class="fieldset" style="margin-top: 15em;">
				<form action="" method="">

					<label>Name</label>
					<div style="padding: 1em 10em;">
						<div style="padding: 1em 10em;">
							<input type="text" name="" placeholder="nom">
						</div>
						<div style="padding: 1em 10em;">
							<input type="text" name="" placeholder="prenom">
						</div>
						<button class="button" style="margin-top: 2em; margin-left: 11.5em;" name="go">Valider</button>	
					</div>	
				</form>
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