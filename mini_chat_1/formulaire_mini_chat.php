<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mini chat</title>
</head>
<body>
	<h1>Bienvenue dans le mini chat !</h1>
	<p>
	<form method="post" action="cible_mini_chat.php">
		Pseudo :
		<input type="texte" name="pseudo">
		<input type="submit" name="envoyer">
	</form>
	</p>
	<p>
	<form method="post" action="cible_mini_chat.php">
		Texte :
		<input type="texte" name="message">
		<input type="submit" name="envoyer">
	</form>
	</p>

</body>
</html>