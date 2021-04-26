<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
$pdoStat = $objetPdo -> prepare ('SELECT * From locations WHERE  id = :num');
$pdoStat->bindValue(':num', $_GET['numLoc'],PDO::PARAM_INT);

$executeIsOk = $pdoStat->execute();

$code = $pdoStat->fetch();
?>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/inscrptioncss.css" media="screen" type="text/css" />
<title> modifier code </title>

</head>
<body>
<div class = "container flex">           
    <div><img src="../css/logo.gif" alt="" ></div>  
    <div class ="item">  <?php echo '<p> <a href="javascript:history.go(-1)"> Retour</a> </p>'; ?> </div>

    <div class ="item"><?php echo '<p> <a href="deconnexion.php"> Deconnexion</a> </p>'; ?> </div>

</div> 
<h1> Modifier code </h1>
<div id="container" align="center">        

<form action="modifier.php" method="post" class="form"> 
    
  <input type="hidden" name="numLoc" value=" <?= $code['id'];?>">
  
   <p> 
         <label for ="name"> Nom projet  </label>
         <input id="name" type ="text" name="name" value="<?= $code['name'];?>">

  </p>
  <p> 
         <label for ="address">   Adresse  </label>
         <input id="address" type ="text" name="address" value="<?= $code['address'];?>">

  </p>
  <p> 
         <label for ="lat"> Latitude  </label>
         <input id="lat" type ="text" name="lat" value="<?= $code['lat'];?>">

  </p>
  <p> 
         <label for ="lon"> Longitude  </label>
         <input id="lon" type ="text" name="lon" value="<?= $code['lon'];?>">

  </p>
  <p> 
         <label for ="description"> Description </label>
         <input id="description" type ="text" name="description" value="<?= $code['description'];?>">

  </p>


  
  
  <p> 
         <input  type ="submit" class="lol" value="enregistrer">
           
  </p>
</form>  

</body>
</html>       

  