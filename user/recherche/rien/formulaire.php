<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;port=3308;dbname=espace_membre', 'root', '');
$pdoStat = $objetPdo -> prepare ('INSERT INTO contact VALUES (NULL, :nom , :prenom, :tel , :mel)');


$pdoStat->bindValue(':nom', $_POST['firstName'], PDO:: PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['lastName'], PDO:: PARAM_STR);
$pdoStat->bindValue(':tel', $_POST['phone'], PDO:: PARAM_STR);
$pdoStat->bindValue(':mel', $_POST['mail'], PDO:: PARAM_STR);

$executeIsOk = $pdoStat->execute();
 
if($executeIsOk){
    $message = 'le contact a été ajouté';
}
else{
  $message = "echec de l'ajour du contact";
}
?>

<html>
<head>
<meta charset="utf-8">
<title> document </title>

</head>
<body>
<h1> insertion des contacts </h1>

<p> <?php echo $message; ?> </p>
  
</body>
</html>     