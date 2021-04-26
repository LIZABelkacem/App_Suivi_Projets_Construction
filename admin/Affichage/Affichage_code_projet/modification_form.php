<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
$pdoStat = $objetPdo -> prepare ('SELECT * From code_projet WHERE  id = :num');
$pdoStat->bindValue(':num', $_GET['numCodeProjet'],PDO::PARAM_INT);

$executeIsOk = $pdoStat->execute();

$sous_code = $pdoStat->fetch();
?>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/inscrptioncss.css" media="screen" type="text/css" />
<title> modifier  code projet  </title>

</head>
<body>
<div class = "container flex">           
    <div><img src="../css/logo.gif" alt="" ></div>  
    <div class ="item">  <?php echo '<p> <a href="javascript:history.go(-1)"> Retour</a> </p>'; ?> </div>

    <div class ="item"><?php echo '<p> <a href="deconnexion.php"> Deconnexion</a> </p>'; ?> </div>

</div>  
<h1> Modifier code projet  </h1>
<div id="container" align="center">

<form action="modifier.php" method="post" class ="form"> 
    
  <input type="hidden" name="numSousCodeProjet" value=" <?= $sous_code['id'];?>">
   <p> 
         <label for ="identifiant_projet"> identifiant_projet </label>
         <input id="identifiant_projet" type ="text" name="identifiant_projet" value="<?= $sous_code['identifiant_projet'];?>">

   </p> 
   <p> 
         <label for ="identifiant_code"> identifiant_code </label>
         <input id="identifiant_code" type ="text" name="identifiant_code" value="<?= $sous_code['identifiant_code'];?>">

  </p>
 
  <p> 
         <label for ="montant_code_projet"> montant </label>
         <input id="montant_code_pojet" type ="text" name="montant_code_projet"value="<?= $sous_code['montant_code_projet'];?>">
             
  </p>  
  
  <p> 
         <input  type ="submit" value="enregistrer" class ="lol">
           
  </p>
</form>  
<?php echo '<p> <a href="http://localhost/dashboard/Tests/Stage-master(2)/Stage-master/Affichage/Affichage_sous_codes/affichage_sous_code.php"> Retour</a> </p>'; ?>

</body>
</html>       

  