<html lang="fr">
	<head>
  		<title>Rendu TP - POO Avancé</title>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 	</head>
 	<body>
    	<?php 
    		echo'Donc les musiciens choisit pour ce concert est :<p>'
   		?>
    	<table border="10">
    	    <tr><th>Nom</th><th>Instrument</th><th>Groupe</th></tr>
        <?php foreach($tabFinale as $value){
            echo '<tr><td>'.$value["Musiciens"].'</td><td>'.$value["Instruments"].'</td><td>'.$value["Groupes"].'</td></tr>';
        } ?>
    	</table>
	</body>
</html>