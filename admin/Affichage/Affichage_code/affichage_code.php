<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
$pdoStat = $objetPdo -> prepare ('SELECT * From code');
$executeIsOk = $pdoStat ->execute();

$codes = $pdoStat -> fetchAll();
?>
 <!doctype html>
 <html>
   <head>
      <title>document</title>
      <me ta charset="utf-8">
      <link rel="stylesheet" href="../css/codecss.css" media="screen" type="text/css" />

   </head>
   <body>
   <div class ="container flex" >  
            <div class=""> <img src="../css/logo.gif" alt="">  </div>
              <div class="item">
              <div class ="item">  <?php echo '<p> <a href="javascript:history.go(-1)"> Retour</a> </p>'; ?> </div>
            </div>

              <div class="item">
                 <?php echo '<p> <a href="http://localhost/dashboard/Tests/Stage-master(2)/Stage-master/connexion2/connexion.php"> Deconnexion</a> </p>'; ?>
               </div>

   </div>
    

    
         <h1>Liste des codes</h1>
         
               <?php foreach ($codes as $code): ?>
              
                 <table>
                       <tr>
                          <td> <?= $code['nom_code']?> </td>
                          <td> <?=$code['identifiant_code']?>  </td>
                          <td> <a href= "suppression_form.php?numCode= <?= $code['id']?>"> Supprimer </a>  </td>
                          <td> <a href= "modification_form.php?numCode= <?= $code['id']?>"> Modifier </a>  </td>        
                        </tr>                  
                  
                  </table>
               <?php endforeach ; ?>


     
   </body>
</html> 




