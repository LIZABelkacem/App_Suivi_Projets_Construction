
		<?php
          $objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
          $pdoStat = $objetPdo->prepare('DELETE from entreprise WHERE id=:num LIMIT 1');
          $pdoStat->bindValue(':num', $_GET['numEntreprise'],PDO::PARAM_INT);

          $executeIsOk = $pdoStat->execute();

          if($executeIsOk){
              $message = 'l  entreprise  a été supprimée';
          }
          else{
            $message = "echec de la suppresion de l entreprise";
        }
        ?>
<html>
	<head>
		<meta charset="utf-8">
        <title> Document </title>

	</head>
	<body>
       <h1> Suppression </h1>
       <p> <?= $message ?> </p>
       <?php echo '<p> <a href="    javascript:history.go(-1)   "> Retour</a> </p>'; ?>

    </body>
</html>       