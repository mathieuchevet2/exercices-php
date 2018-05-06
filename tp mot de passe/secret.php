	
	

		<!DOCTYPE html>
		<html>
		<head>
					<title></title>
		</head>
		<body>
			<?php  
				if(isset($_POST['motdepasse']) AND $_POST['motdepasse'] == "kangourou")
				{
					echo ($_SERVER['REMOTE_ADDR']);
			?>
				<h1>Voici les codes d'acces :</h1>
				<p><strong>CRDS-DSFF-HFED-NHNK-1234</strong></p>
			<?php  

				}
				else
				{

					echo "<p>Mot de passe incorrect</p>";

				}

			?>

		
		</body>
		</html>

	
	