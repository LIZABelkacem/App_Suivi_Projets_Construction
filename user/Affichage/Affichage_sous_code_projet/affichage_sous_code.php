<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
$pdoStat = $objetPdo -> prepare ('SELECT * From sous_code_projet');
$executeIsOk = $pdoStat ->execute();

$sous_codes = $pdoStat -> fetchAll();
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
 

         <h1>Liste des sous codes projet </h1>
         <?php foreach ($sous_codes as $sous_code): ?>

         <table>
                    <tr>    
                        <td> <?=$sous_code['identifiant_projet']?>   </td>
                        <td> <?=$sous_code['identifiant_sous_code']?>   </td>
                        <td> <?= $sous_code['montant']?>      </td>
                        <td> <a href= "suppression_form.php?numSousCodeProjet= <?= $sous_code['id']?>"> Supprimer </a>    </td>
                        <td>  <a href= "modification_form.php?numSousCodeProjet= <?= $sous_code['id']?>"> Modifier </a>   </td>
                      
                        
                    </tr>

                  </table> 

               <?php endforeach ; ?>
               

         
   </body>
</html> 




