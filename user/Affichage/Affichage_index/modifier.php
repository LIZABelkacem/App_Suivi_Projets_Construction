<?php 
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis','root', '');
$pdoStat = $objetPdo -> prepare ('UPDATE index_date set  year = :year , month = :month , indice = :indice
                                  WHERE id=:num LIMIT 1');

$pdoStat->bindValue(':num', $_POST['numIndexDate'], PDO::PARAM_INT);
$pdoStat->bindValue(':year', $_POST['year'], PDO:: PARAM_STR);
$pdoStat->bindValue(':month', $_POST['month'], PDO:: PARAM_STR);
$pdoStat->bindValue(':indice', $_POST['indice'], PDO:: PARAM_STR);
$executeIsOk = $pdoStat->execute();
 


if($executeIsOk){
    $message = ' l indice a été modifiée';
}
else{
  $message = "echec de la modification de l indice";
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