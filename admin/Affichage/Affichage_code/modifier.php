<?php 
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis','root', '');
$pdoStat = $objetPdo -> prepare ('UPDATE code set  identifiant_code = :identifiant_code, nom_code = :nom_code
                                  WHERE id=:num LIMIT 1');

$pdoStat->bindValue(':num', $_POST['numCode'], PDO::PARAM_INT);
$pdoStat->bindValue(':identifiant_code', $_POST['identifiant_code'], PDO:: PARAM_STR);
$pdoStat->bindValue(':nom_code', $_POST['nom_code'], PDO:: PARAM_STR);
$executeIsOk = $pdoStat->execute();
 


if($executeIsOk){
    $message = 'le code a été modifié';
}
else{
  $message = "echec de la modification du code";
}
?>
<html>
<head>
<meta charset="utf-8">
<title> modification : résultat </title>

</head>
<body>
<h1> résultat modification </h1>
 
<p> <?= $message ?>  </p> 
</body>
</html> 