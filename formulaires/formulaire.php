<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>formulaire fichier</title>
</head>
<body>
	<form action="cible_envoi.php" method="post" enctype="multipart/form-data">
		<p>
			Formulaire d'envoi de fichier :<br />
			<input type="file" name="monfichier" /><br />
			<input type="submit" value="Envoyez le fichier">


		</p>
	</form>
</body>
</html>