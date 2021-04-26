<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
$pdoStat = $objetPdo -> prepare ('SELECT * From index_date');
$executeIsOk = $pdoStat ->execute();

$index_dates = $pdoStat -> fetchAll();
?>
 <!doctype html>
 <html>
   <head>
      <title>document</title>
      <link rel="stylesheet" href="../css/codecss.css" media="screen" type="text/css" />
      <me ta charset="utf-8">
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
   
         <h1>Liste des index_date</h1>
         <?php foreach ($index_dates as $index_date): ?>

               <table>
                     <tr>
                          <td><?=$index_date['year']?></td>
                          <td><?=$index_date['month']?></td>

                          <td><?= $index_date['indice']?> </td>
                          <td><a href= "suppression_form.php?numIndexDate= <?= $index_date['id']?>"> Supprimer </a> </td>
                          <td><a href= "modification_form.php?numIndexDate= <?= $index_date['id']?>"> Modifier </a>  </td>
                     
                     </tr>

               </table>
               <?php endforeach ; ?>
 

   </body>
</html> 




