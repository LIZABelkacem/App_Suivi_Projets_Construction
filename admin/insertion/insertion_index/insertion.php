<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');

$pdoStat = $objetPdo -> prepare ('INSERT INTO index_date VALUES ( NULL, :year , :indice , :month)');


$pdoStat->bindValue(':year', $_POST['year'], PDO:: PARAM_STR);
$pdoStat->bindValue(':month', $_POST['month'], PDO:: PARAM_STR);
$pdoStat->bindValue(':indice', $_POST['indice'], PDO:: PARAM_STR);

$executeIsOk = $pdoStat->execute();
 
if($executeIsOk){
    $message = 'l index a été ajouté';
}
else{
  $message = "echec de l'ajout de l'index";
}
?>

<html>
<head>
<meta charset="utf-8">

<title> document </title>

</head>
<body>
<h1> insertion des index </h1>

<p> <?php echo $message; ?> </p>
  
</body>
</html>     