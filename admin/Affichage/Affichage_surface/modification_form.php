<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
$pdoStat = $objetPdo -> prepare ('SELECT * From surface WHERE  id = :num');
$pdoStat->bindValue(':num', $_GET['numSurface'],PDO::PARAM_INT);

$executeIsOk = $pdoStat->execute();

$surface = $pdoStat->fetch();
?>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/inscrptioncss.css" media="screen" type="text/css" />
<title> modifier surface </title>

</head>
<body>
<div class = "container flex">           
    <div><img src="../css/logo.gif" alt="" ></div>  
    <div class ="item">  <?php echo '<p> <a href="javascript:history.go(-1)"> Retour</a> </p>'; ?> </div>

    <div class ="item"><?php echo '<p> <a href="deconnexion.php"> Deconnexion</a> </p>'; ?> </div>

</div> 
<h1> Modifier surface </h1>
<div id="container" align="center">       

<form action="modifier.php" method="post" class ="form"> 
    
  <input type="hidden" name="numSurface" value=" <?= $surface['id'];?>">
  
   <p> 
         <label for ="identifiant_surface"> identifiant_surface </label>
         <input id="identifiant_surface" type ="text" name="identifiant_surface" value="<?= $surface['identifiant_surface'];?>">

  </p>
  <p> 
         <label for ="nom_surface"> nom_surface </label>
         <input id="nom_surface" type ="text" name="nom_surface"value="<?= $surface['nom_surface'];?>">
             
  </p>  
  <p> 
         <label for ="unite_surface"> unite_surface </label>
         <input id="unite_surface" type ="text" name="unite_surface"value="<?= $surface['unite_surface'];?>">
             
  </p> 
  
  <p> 
         <input  type ="submit" value="enregistrer" class ="lol">
           
  </p>
</form>  
</body>
</html>       

  