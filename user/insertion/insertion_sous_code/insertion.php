<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');

$pdoStat = $objetPdo -> prepare ('INSERT INTO sous_code VALUES ( :identifiant_code, NULL, :nom_sous_code , :identifiant_sous_code)');

$pdoStat->bindValue(':identifiant_code', $_POST['identifiant_code'], PDO:: PARAM_STR);
$pdoStat->bindValue(':nom_sous_code', $_POST['nom_sous_code'], PDO:: PARAM_STR);
$pdoStat->bindValue(':identifiant_sous_code', $_POST['identifiant_sous_code'], PDO:: PARAM_STR);

$executeIsOk = $pdoStat->execute();
 
if($executeIsOk){
    $message = 'le sous code a été ajouté';
}
else{
  $message = "echec de l'ajout du sous code";
}
?>

<html>
<head>
<meta charset="utf-8">

<title> document </title>

</head>
<body>
<h1> insertion des codes </h1>

<p> <?php echo $message; ?> </p>
  
</body>
</html>     