<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
$pdoStat = $objetPdo -> prepare ('SELECT * From index_date WHERE  id = :num');
$pdoStat->bindValue(':num', $_GET['numIndexDate'],PDO::PARAM_INT);

$executeIsOk = $pdoStat->execute();

$index_date = $pdoStat->fetch();
?>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/inscrptioncss.css" media="screen" type="text/css" />
<title> modifier index_date </title>

</head>
<body>
<div class = "container flex">           
    <div><img src="../css/logo.gif" alt="" ></div>  
    <div class ="item">  <?php echo '<p> <a href="javascript:history.go(-1)"> Retour</a> </p>'; ?> </div>

    <div class ="item"><?php echo '<p> <a href="deconnexion.php"> Deconnexion</a> </p>'; ?> </div>

</div> 
<h1> Modifier index_date </h1>
<div id="container" align="center">        

<form action="modifier.php" method="post" class ="form"> 
    
  <input type="hidden" name="numIndexDate" value=" <?= $index_date['id'];?>">
  
   <p> 
         <label for ="year "> année </label>
         <input id="year " type ="text" name="year" value="<?= $index_date['year'];?>">

  </p>
  <p> 
         <label for ="month "> mois </label>
         <input id="month " type ="text" name="month" value="<?= $index_date['month'];?>">

  </p>
  <p> 
         <label for ="date_index "> date_index </label>
         <input id="date_index" type ="text" name="date_index" value="<?= $index_date['date_index'];?>">

  </p>
  <p> 
         <label for ="indice"> indice </label>
         <input id="indice" type ="text" name="indice"value="<?= $index_date['indice'];?>">
             
  </p> 
  <p> 
         <input  type ="submit" value="enregistrer" class ="lol">
           
  </p>
</form>

</body>
</html>       

  