<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<title>Goorgoorlu</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css"/>
	<link rel="stylesheet" type="text/css" href="../css/styleMainPrestataire.css"/>
	
<?php
  if(isset($_POST['go1']) && $_POST['go1']=='Valider'){
    if (!isset($_POST['opt'])) {
          $erreur = 'La variable nécessaire au script n est pas définie.';
        }
        else {
          // on teste si les variables ne sont pas vides
          if (empty($_POST['opt'])) {
            $erreur = 'un des champs est vide.';
          }

        }
  }
  else{
    $base = mysql_connect('localhost','root','');
    mysql_select_db('goorgoorluu',$base);
    $login = $_POST['opt'];
    $sql = "INSERT INTO servicerendu(log,dat) values('$login','".date("Y-m-d")."')";
    mysql_query($sql);
    $code = mysql_insert_id();
    $sql1 = "UPDATE  prestataire set disponibilite = false where login='$login' ";  
    mysql_query($sql1);
   	$code = mysql_insert_id();
   	$sq = "SELECT note from servicerendu where log='$login'";
   	$rq= mysql_query($sq);
   	$n=0;
   	$i=0;
   	while ($d=mysql_fetch_array($rq)) {
   		$n +=$d['note'];
   		$i++;
   	}
   	if($i>1){
   		$n = $n /($i-1);
   	}
   	else{
   		$n = $n/1;
   	}
   	$n1=(String)$n;
   	mysql_query("UPDATE prestataire set moyenne='$n1' where login='$login'");
    mysql_close();

  }
?>	
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
			<p style="border:4px solid black;width: 9em;height:9em;margin-left: 50em;border-radius: 4px;">
				<img src="../images/profiles/default.png" style="width: 110px;height: 110px;">
			</p>
			<div class="fieldset" style="margin-top: 5em;margin-left: 26em;">
					
				<form action="user.php" method="POST">

					<label style="font-size: 14px;">Name</label>
					<div style="padding: 1em 8em;">
						<div style="padding: 1em 8em;">
							<input type="text" name="nom" placeholder="nom" style="width: 20em">
						</div>
						<div style="padding: 1em 8em;">
							<input type="text" name="prenom" placeholder="prenom" style="width: 20em">
						</div>
						<button class="button" style="margin-top: 2em; margin-left: 16em;" name="go">Valider</button>	
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