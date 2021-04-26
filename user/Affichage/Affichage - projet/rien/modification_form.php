<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
$pdoStat = $objetPdo -> prepare ('SELECT * From contact WHERE  id = :num');
$pdoStat->bindValue(':num', $_GET['numContact'],PDO::PARAM_INT);

$executeIsOk = $pdoStat->execute();

$contact = $pdoStat->fetch();
?>

<html>
<head>
<meta charset="utf-8">
<title> modifier contact </title>

</head>
<body>
<h1> Modifier contact </h1>
<form action="modifier.php" method="post"> 
    
  <input type="hidden" name="numContact" value=" <?= $contact['id'];?>">
   <p> 
         <label for ="nom"> nom </label>
         <input id="nom" type ="text" name="firstName" value="<?= $contact['nom'];?>">

  </p>
  <p> 
         <label for ="prenom"> Prenom </label>
         <input id="prenom" type ="text" name="lastName"value="<?= $contact['prenom'];?>">
             
  </p>  
  <p> 
         <label for = "tel"> Telephone </label>
         <input id="tel" type ="text" name="phone" value="<?= $contact['tel'];?>">
           
  </p>
  <p> 
          <label for ="mel"> Adresse electronique </label>
         <input id="mel" type ="email" name="mail" value="<?= $contact['mel'];?>">
           
  </p>
  <p> 
         <input  type ="submit" value="enregistrer">
           
  </p>
</form>  
</body>
</html>       

  