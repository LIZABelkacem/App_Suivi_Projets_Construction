<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
$pdoStat = $objetPdo -> prepare ('SELECT * From entreprise WHERE  id = :num');
$pdoStat->bindValue(':num', $_GET['numEntreprise'],PDO::PARAM_INT);

$executeIsOk = $pdoStat->execute();

$entreprise = $pdoStat->fetch();
?>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="inscrptioncss.css" media="screen" type="text/css" />
<title> modifier entreprise </title>

</head>
<body>
<div class = "container flex">           
    <div><img src="../css/logo.gif" alt="" ></div>  
    <div class ="item">  <?php echo '<p> <a href="javascript:history.go(-1)"> Retour</a> </p>'; ?> </div>

    <div class ="item"><?php echo '<p> <a href="deconnexion.php"> Deconnexion</a> </p>'; ?> </div>

</div>
<h1> Modifier entreprise </h1>
<div id="container" align="center">      

<form action="modifier.php" method="post" class ="form"> 
    
  <input type="hidden" name="numEntreprise" value=" <?= $entreprise['id'];?>">
  
   <p> 
         <label for ="identifiant_entreprise"> identifiant_entreprise </label>
         <input id="identifiant_entreprise" type ="text" name="identifiant_entreprise" value="<?= $entreprise['identifiant_entreprise'];?>">

  </p>
  <p> 
         <label for ="nom_entreprise"> nom_entreprise </label>
         <input id="nom_entreprise" type ="text" name="nom_entreprise" value="<?= $entreprise['nom_entreprise'];?>">
             
  </p>  
  
  <p> 
         <input  type ="submit" value="enregistrer" class ="lol">
           
  </p>
</form>
</body>

</html>       

  