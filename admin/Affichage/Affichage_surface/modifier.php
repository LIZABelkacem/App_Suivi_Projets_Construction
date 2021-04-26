<?php 
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis','root', '');
$pdoStat = $objetPdo -> prepare ('UPDATE surface set  identifiant_surface = :identifiant_surface, nom_surface = :nom_surface,
                                         unite_surface = :unite_surface
                                  WHERE id=:num LIMIT 1');

$pdoStat->bindValue(':num', $_POST['numSurface'], PDO::PARAM_INT);
$pdoStat->bindValue(':identifiant_surface', $_POST['identifiant_surface'], PDO:: PARAM_STR);
$pdoStat->bindValue(':nom_surface', $_POST['nom_surface'], PDO:: PARAM_STR);
$pdoStat->bindValue(':unite_surface', $_POST['unite_surface'], PDO:: PARAM_STR);
$executeIsOk = $pdoStat->execute();
 


if($executeIsOk){
    $message = 'la surface a été modifiée';
}
else{
  $message = "echec de la modification de la surface";
}
?>
<html>
<head>
<meta charset="utf-8">
<title> modification : résultat </title>

</head>
<body>
<?php echo '<p> <a href="    javascript:history.go(-1)   "> Retour</a> </p>'; ?>

<h1> résultat modification </h1>
 
<p> <?= $message ?>  </p> 
</body>
</html> 