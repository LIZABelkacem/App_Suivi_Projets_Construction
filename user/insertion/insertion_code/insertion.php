<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');

$pdoStat = $objetPdo -> prepare ('INSERT INTO code VALUES (:nom_code , NULL, :identifiant_code)');


$pdoStat->bindValue(':nom_code', $_POST['nom_code'], PDO:: PARAM_STR);
$pdoStat->bindValue(':identifiant_code', $_POST['identifiant_code'], PDO:: PARAM_STR);

$executeIsOk = $pdoStat->execute();
 
if($executeIsOk){
    $message = 'le code a été ajouté';
}
else{
  $message = "echec de l'ajout du code";
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