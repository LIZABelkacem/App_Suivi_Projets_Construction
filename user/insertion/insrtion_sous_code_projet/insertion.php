<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');

$pdoStat = $objetPdo -> prepare ('INSERT INTO sous_code_projet VALUES (NULL , :identifiant_projet , :identifiant_sous_code ,  :montant)');


$pdoStat->bindValue(':identifiant_projet', $_POST['identifiant_projet'], PDO:: PARAM_STR);
$pdoStat->bindValue(':identifiant_sous_code', $_POST['identifiant_sous_code'], PDO:: PARAM_STR);
$pdoStat->bindValue(':montant', $_POST['montant'], PDO:: PARAM_STR);


$executeIsOk = $pdoStat->execute();
 
if($executeIsOk){
    $message = 'le sous  code projet  a été ajouté';
}
else{
  $message = "echec de l'ajout du sous code projet ";
}
?>

<html>
<head>
<meta charset="utf-8">

<title> document </title>

</head>
<body>
<h1> insertion des  sous codes projets  </h1>

<p> <?php echo $message; ?> </p>
  
</body>
</html>     