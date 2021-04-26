<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
$pdoStat = $objetPdo -> prepare ('SELECT * From code WHERE  id = :num');
$pdoStat->bindValue(':num', $_GET['numCode'],PDO::PARAM_INT);

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
<div id="container" align="center">        
<h1> Modifier code </h1>
<form action="modifier.php" method="post" class="form"> 
    
  <input type="hidden" name="numCode" value=" <?= $code['id'];?>">
  
   <p> 
         <label for ="identifiant_code"> identifiant_code </label>
         <input id="identifiant_code" type ="text" name="identifiant_code" value="<?= $code['identifiant_code'];?>">

  </p>
  <p> 
         <label for ="nom_code"> nom_code </label>
         <input id="nom_code" type ="text" name="nom_code"value="<?= $code['nom_code'];?>">
             
  </p>  
  
  <p> 
         <input  type ="submit" class="lol" value="enregistrer">
           
  </p>
</form>  

</body>
</html>       

  