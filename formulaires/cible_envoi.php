<?php
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0) { // test si le fichier est bien envoye
	
		if ($_FILES['monfichier']['size'] <= 1000000) 
		{
		
			$infofichier = pathinfo($_FILES['monfichier']['name']);
			$extension_upload = $infofichier['extention'];
			$extention_autorisees = array('jpg', 'jpeg', 'gif', 'png');

			if (in_array($extension_upload, $extention_autorisees)) 
			{
			
				move_uploaded_file($_FILES['monfichier']['tmp_name'], 'upload/' . basename($_FILES['monfichier']['name']));
				echo "L'envoi du fichier a bien ete effectue";

			}

		}

       }



?>