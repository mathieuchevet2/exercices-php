<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>bonjour</title>
</head>
<body>
	<p> <?php
	if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter'])) 
		{
			$_GET['repeter'] = (int) $_GET['repeter'];

			if ($_GET['repeter'] >= 1 AND $_GET['repeter'] <= 100) 
			{
				for ($i=0; $i < $_GET['repeter']; $i++) 
				{ 
					echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . '! <br/> ';
				}
			}
		
	 	} 
	else
	{
		echo 'Il faut renseigner un nom, un prenom et un nombre de repetition !';
	}
	?></p>

	<form method="post" action="cible.php">
		<p>
			Entrez un prenom :
			<input type="texte" name="pseudo" value="mathieu" />
			<input type="submit" name="Valider" />
			<textarea name="message" rows="8" cols="45">
				Votre texte ici.
			</textarea>
		</p>
		<p>
			<select name="choix">
				<option value="choix1">Choix1</option>
				<option value="choix2">Choix2</option>
				<option value="choix3">Choix3</option>
				<option value="choix4">Choix4</option>
			</select>
		</p>
		
	</form>

</body>
</html>