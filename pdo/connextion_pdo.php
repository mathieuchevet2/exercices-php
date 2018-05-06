<?php
	try 
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
	} 
		
	catch (Exception $e) 
	{
		die('Erreur :' . $e->getMessage());
	}

    $reponse = $bdd->query('SELECT * FROM jeux_video');
    while ($donnees = $reponse->fetch()) 
    {
?>
		<p>
			<strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />
			Le possesseur de ce jeu est : <?php echo $donnees['possesseur'];  ?> , et il le vend a <?php echo $donnees['prix'];  ?> euros !<br/>
			Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer a <?php echo $donnees['nbre_joueurs_max'];  ?> au maximum <br/>
			<?php echo $donnees['possesseur']; ?> a laisse ces commentaires sur<?php echo $donnees['nom']; ?> :<?php echo $donnees['commentaires']; ?>
		</p>
		<?php
    }

    $reponse->closeCursor();

    $reponse = $bdd->query('SELECT nom, possesseur FROM jeux_video WHERE possesseur=\'Patrick\'');
    while ($donnees = $reponse->fetch())
    {
    	echo $donnees['nom'] . ' appartient a ' . $donnees['possesseur'] . '<br/>';
    }

    $reponse->closeCursor();
    $reponse = $bdd->query('SELECT nom, possesseur, console, prix FROM jeux_video WHERE console=\'Xbox\' OR console=\'PS2\' ORDER BY prix DESC LIMIT 0,10');
    while ($donnees = $reponse->fetch())
    {
    	echo $donnees['nom'] . ' appartient a ' . $donnees['possesseur'] . '<br/>' . $donnees['console'] . ' ' . $donnees['prix'] . 'euros <br/>';
    }

    $reponse->closeCursor();
?>