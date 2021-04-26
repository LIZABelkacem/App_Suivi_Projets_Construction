
		<?php
          $objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
          $pdoStat = $objetPdo->prepare('DELETE from sous_code WHERE id=:num LIMIT 1');
          $pdoStat->bindValue(':num', $_GET['numSousCode'],PDO::PARAM_INT);

          $executeIsOk = $pdoStat->execute();

          if($executeIsOk){
              $message = 'le sous code a été supprimé';
          }
          else{
            $message = "echec de la suppresion du sous code";
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