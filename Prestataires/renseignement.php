
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<title>Goorgoorlu</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css"/>
	<link rel="stylesheet" type="text/css" href="../css/styleMainPrestataire.css">
	<style type="text/css">
				.fieldset1 {
		  border: 1px solid #c0c0c0;
		  margin-left: 15em;
		  margin-top: 1.5em;
		  margin-bottom: 1em;
		  padding-left: 5em;
		  padding-top: 3em;
		  padding-bottom: 3em;
		 /* padding: 0.35em 0.625em 0.75em;*/
		  width: 70%;
		  height: 25em;
		  overflow-x: hidden;
		}

	 select {
	  display: block;
	  height: auto;
	  width: 60%;
	  background: #ffffff;
	  border: 1px solid rgba(34, 36, 38, 0.15);
	  border-radius: 0.28571429rem;
	  box-shadow: 0em 0em 0em 0em transparent inset;
	  padding: 0.62em 1em;
	  color: rgba(0, 0, 0, 0.87);
	  -webkit-transition: color 0.1s ease, border-color 0.1s ease;
	  transition: color 0.1s ease, border-color 0.1s ease;
	}
	select.dropdown {
	  height: 38px;
	  padding: 0.5em;
	  border: 1px solid rgba(34, 36, 38, 0.15);
	  visibility: visible;
	}
	</style>
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
			<h1>Renseignements</h1>
			<div class="fieldset1">

				<form action="" method="POST">
						<label style="padding-top: 2em;">Services Proposees</label>
						<div style="padding: 1em 20em;">
							<select class="dropdown">
								<option value="">Mecanique <!-- <input type="checkbox" name=""> --></option>
								<option value="1">Plombier</option>
							</select>
						</div>
						<label>Rayon de Couverture</label>
						<div style="padding: 1em 20em;">
							<select class="dropdown" multiple="multiple"  size="10">
								<option value="">Mariste</option>
								<option value="">Yoff</option>
								<option value="">Mariste</option>
								<option value="">Yoff</option>
								<option value="">Mariste</option>
								<option value="">Yoff</option>
							</select>
						</div>

						<label>Marge Prix</label>	
						<div style="padding: 1em 20em;">
							<input type="number" name="" placeholder="prix" style="width: 55%">
						</div>
						<label>Mot de passe</label>	
						<div style="padding: 1em 20em;">
							<input type="password" name="" placeholder="password" style="width: 55%">
						</div>
						<div style=" margin-left: 35em;margin-top: 2em;">
							<button class="button" style="width: 10em;">Valider</button>
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