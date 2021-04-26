<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
          $bdd = new PDO('mysql:host=127.0.0.1;port=3308;dbname=espace_membre', 'root', '');
         

  
          $reponse = $bdd->query('SELECT * FROM clients');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p> 
     <?php echo $donnees['nom']; ?> <?php echo $donnees['id_projet']; ?> <?php echo $donnees['architecte']; ?> 
     <?php echo $donnees['annee']; ?> <?php echo $donnees['endroit']; ?>
     <?php echo $donnees['sujet']; ?>  <a href="suppression_form.php?numclient= <? $donnees['id_projet']?>"> supprimer <a><a href="modification_form.php?numclient= <? $donnees['id_projet']?>"> modifier <a>
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
          



	
	</body> 
</html>