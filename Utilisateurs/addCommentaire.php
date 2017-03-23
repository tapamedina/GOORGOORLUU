
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<title>Goorgoorlu</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css"/>
	<link rel="stylesheet" type="text/css" href="../css/styleAccueil.css">
	<link rel="stylesheet" type="text/css" href="../css/styleMainPrestataire.css"/>
	<!--[if lt IE 7]>
	<link rel="stylesheet" href="ie.css" type="text/css">
<![endif]-->
</head>
<body>
<div id="wrap">

	<div id="header">
		<p><img src="images/logo.png" style="float: right;margin: 0.5em 2em;"></p>
	</div>

	<div id="content-wrap">
		
		<div id="content">
			
			<div>
				<ul>
				     <li><a href="#">✿</a></li><!--
				  --><li><a href="Accueil.php">Accueil</a></li><!--
				  --><li><a href="note.php">Notes</a></li><!--
				  --><li><a href="commentaire.php">Commentaire</a></li><!--
				  --><li><a href="addCommentaire">Add Commentaire</a></li>
				</ul>
			</div>
			<div class="fieldset1" style="padding-left: 6em;">
				<form method="POST" action="traitAjouterCommen.php">
					<div style="margin-left: 6em;">
						Auteur : <input type="text" name="auteur">
					</div>
					<div style="margin-left: 10em;margin-top: 2em;">
						<textarea rows="9" cols="60" name="message">
							
						</textarea>
					</div>
					<div style="margin-left: 10em;"><button class="button" style="margin-top: 2em;" name="go">Poster</button></div>
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