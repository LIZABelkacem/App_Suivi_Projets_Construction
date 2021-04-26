<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
$pdoStat = $objetPdo -> prepare ('SELECT * From user');
$executeIsOk = $pdoStat ->execute();

$users = $pdoStat -> fetchAll();
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
   
    
         <h1>Liste des users</h1>
         
               <?php foreach ($users as $user): ?>
                  <table>
                    <tr>    
                        <td> <?=$user['pseudo']?>    </td>
                        <td>  <?= $user['mail']?>    </td>
                        <td>  <a href= "suppression_form.php?numUser= <?= $user['id']?>"> Supprimer </a> </td>
                        
                    </tr>

                  </table> 
                 <li>
                           
                        
                 </li>
               <?php endforeach ; ?>
       
  
   </body>
</html> 




