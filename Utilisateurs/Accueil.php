
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
<?php
	$base = mysql_connect ('localhost', 'root', '');
		mysql_select_db ('goorgoorluu', $base) ;
?>
</head>
<body>
<div id="wrap">

	<div id="header">
		<p><img src="../images/logo.jpg" style="float: right;margin: -0.8em 2em; width:80px; height: 55px;"></p>
	</div>

	<div id="content-wrap">
		
		<div id="content">
			
			<div>
				<ul>
				     <li><a href="#">✿</a></li><!--
				  --><li><a href="Accueil.php">Accueil</a></li><!--
				  --><li><a href="note.php">Notes</a></li><!--
				  --><li><a href="commentaire.php">Commentaire</a></li><!--
				  --><li><a href="addCommentaire.php">Add Commentaire</a></li>
				</ul>
			</div>
			<div class="fieldset1">

				<form action="listePrestataire.php" method="POST">
						<label style="padding-top: 4em;font-size: 14px;margin-left: -1em;">Services Proposees</label>
						<div style="padding: 2em 20em;">
							<select class="dropdown" name="service" style="width: 20em;">
								<?php
									$query1="select * from service";
									$result1=mysql_query($query1);
									while ($ligne1=mysql_fetch_row($result1)) {
								?>
										<option value="<?php echo $ligne1[0]; ?>"><?php echo $ligne1[0]; ?></option>
								<?php }?>
										
							</select>
						</div>
						<label style="font-size: 14px;margin-left: -1em;">Localisation</label>	
							<div style="padding: 2em 20em;">
								<select class="dropdown" name="loc" style="width: 20em;">
									<?php
									$query1="select * from zonecouverture";
									$result1=mysql_query($query1);
									while ($ligne1=mysql_fetch_row($result1)) {
								?>
										<option value="<?php echo $ligne1[0]; ?>"><?php echo $ligne1[0]; ?></option>
								<?php }?>
								</select>
							</div>
						<div style=" margin-left: 26em;margin-top: 2em;">
							<button class="button" style="width: 10em;" name="go">Valider</button>
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