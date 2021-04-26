<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
$pdoStat = $objetPdo -> prepare ('SELECT * From sous_code WHERE  id = :num');
$pdoStat->bindValue(':num', $_GET['numSousCode'],PDO::PARAM_INT);

$executeIsOk = $pdoStat->execute();

$sous_code = $pdoStat->fetch();
?>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/inscrptioncss.css" media="screen" type="text/css" />
<title> modifier sous code </title>

</head>
<body>
<div class = "container flex">           
    <div><img src="../css/logo.gif" alt="" ></div>  
    <div class ="item">  <?php echo '<p> <a href="javascript:history.go(-1)"> Retour</a> </p>'; ?> </div>

    <div class ="item"><?php echo '<p> <a href="deconnexion.php"> Deconnexion</a> </p>'; ?> </div>

</div> 
<div id="container" align="center">
<h1> Modifier sous code </h1>
      
<form action="modifier.php" method="post" class ="form"> 
    
  <input type="hidden" name="numSousCode" value=" <?= $sous_code['id'];?>">
   <p> 
         <label for ="identifiant_code"> identifiant_code </label>
         <input id="identifiant_code" type ="text" name="identifiant_code" value="<?= $sous_code['identifiant_code'];?>">

   </p> 
   <p> 
         <label for ="identifiant_sous_code"> identifiant_sous_code </label>
         <input id="identifiant_sous_code" type ="text" name="identifiant_sous_code" value="<?= $sous_code['identifiant_sous_code'];?>">

  </p>
 
  <p> 
         <label for ="nom_sous_code"> nom_sous_code </label>
         <input id="nom_sous_code" type ="text" name="nom_sous_code"value="<?= $sous_code['nom_sous_code'];?>">
             
  </p>  
  
  <p> 
         <input  type ="submit" value="enregistrer" class ="lol">
           
  </p>
</form>  
<?php echo '<p> <a href="http://localhost/dashboard/Tests/Stage-master(2)/Stage-master/Affichage/Affichage_sous_codes/affichage_sous_code.php"> Retour</a> </p>'; ?>

</body>
</html>       

  