
		<?php
          $objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
          $pdoStat = $objetPdo->prepare('DELETE from surface WHERE id=:num LIMIT 1');
          $pdoStat->bindValue(':num', $_GET['numSurface'],PDO::PARAM_INT);

          $executeIsOk = $pdoStat->execute();

          if($executeIsOk){
              $message = 'la surface  a été supprimée';
          }
          else{
            $message = "echec de la suppresion de la surface";
        }
        ?>
<html>
	<head>
		<meta charset="utf-8">
        <title> Document </title>

	</head>
	<body>
    <?php echo '<p> <a href="    javascript:history.go(-1)   "> Retour</a> </p>'; ?>

       <h1> Suppression </h1>
       <p> <?= $message ?> </p>
    </body>
</html>       