<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');

$pdoStat = $objetPdo -> prepare ('INSERT INTO entreprise VALUES (:nom_entreprise , NULL, :identifiant_entreprise)');


$pdoStat->bindValue(':nom_entreprise', $_POST['nom_entreprise'], PDO:: PARAM_STR);
$pdoStat->bindValue(':identifiant_entreprise', $_POST['identifiant_entreprise'], PDO:: PARAM_STR);

$executeIsOk = $pdoStat->execute();
 
if($executeIsOk){
    $message = 'l entreprise a été ajouté';
}
else{
  $message = "echec de l'ajour de l'entreprise";
}
?>

<html>
<head>
<meta charset="utf-8">

<title> document </title>

</head>
<body>
<h1> insertion des entreprises </h1>

<p> <?php echo $message; ?> </p>
  
</body>
</html>     