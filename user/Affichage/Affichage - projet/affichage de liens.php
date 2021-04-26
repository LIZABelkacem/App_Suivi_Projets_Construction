<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
          $bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');
         

  
          $reponse = $bdd->query('SELECT * FROM clients');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
      <?php echo $donnees['id_projet']; ?> <?php echo $donnees['architecte']; ?> 
     <?php echo $donnees['annee']; ?> 
    <a href="<?php echo $donnees['endroit']; ?>">'<?php echo $donnees['endroit']; ?></a>
    <br/>

     <?php echo $donnees['sujet']; ?> 
     
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
          


  <a href="D:\tz.html">lien</a>
	
</body> 

</html>


<table>
                    <tr>    
                        <td>    </td>
                        <td>    </td>
                        <td>    </td>
                        <td>    </td>
                        <td>    </td>
                        <td>    </td>
                        <td>    </td>
                        <td>    </td>
                        <td>    </td>
                        <td>    </td>
                        <td>    </td>
                        <td>    </td>
                        <td>    </td>
                        <td>    </td>
                        
                    </tr>

                  </table> 