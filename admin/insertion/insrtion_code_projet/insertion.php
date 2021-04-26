<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');

$pdoStat = $objetPdo -> prepare ('INSERT INTO code_projet VALUES ( :identifiant_projet , :identifiant_code ,  :montant_code_projet, NULL)');

$pdoStat->bindValue(':identifiant_projet', $_POST['identifiant_projet'], PDO:: PARAM_STR);
$pdoStat->bindValue(':identifiant_code', $_POST['identifiant_code'], PDO:: PARAM_STR);
$pdoStat->bindValue(':montant_code_projet', $_POST['montant_code_projet'], PDO:: PARAM_STR);


$executeIsOk = $pdoStat->execute();
 
if($executeIsOk){
    $message = 'le  code projet  a été ajouté';
}
else{
  $message = "echec de l'ajout du  code projet ";
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