<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
$pdoStat = $objetPdo -> prepare ('
SELECT DISTINCT P.nom_projet, SCP.identifiant_sous_code , SCP.montant, P.indice_projt,  SP.identifiant_surface ,
SP.montant_surface, 
(SELECT  identifiant_code  FROM sous_code SC WHERE  SC.identifiant_sous_code= SCP.identifiant_sous_code )AS identifiant_code,
(SELECT DISTINCT  nom_code  FROM code C WHERE  SC.identifiant_code= C.identifiant_Code AND SC.identifiant_sous_code = SCP.identifiant_sous_code )AS nom_code,
(SELECT  nom_sous_code  FROM sous_code SC WHERE  SC.identifiant_sous_code= SCP.identifiant_sous_code )AS nom_sous_code,

(SCP.montant DIV SP.montant_surface) AS ratio ,
(SELECT  indice  FROM   index_date WHERE  date_index=(SELECT MAX(date_index) FROM index_date))AS inx ,
((SELECT  indice  FROM   index_date WHERE  date_index=(SELECT MAX(date_index) FROM index_date)) 
* (SCP.montant DIV SP.montant_surface))div P.indice_projt  as ratioac

FROM  projet P  INNER JOIN sous_code_projet SCP  INNER JOIN surface_projet SP INNER JOIN sous_code SC
INNER JOIN  index_date I INNER JOIN code C


                                 ');
$executeIsOk = $pdoStat ->execute();

$sous_codes = $pdoStat -> fetchAll();
?>
 <!doctype html>
 <html>
   <head>
      <title>document</title>
      <link rel="stylesheet" href="" media="screen" type="text/css" />
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
   

              <h1>Fiche Ratio</h1>
         <ul>
         <?php foreach ($sous_codes as $sous_code): ?>

    
                 <table>
                       <tr>
                        <td>nom_projet</td>  
                        <td>identifiant_code </td>
                        <td> nom_code </td>  
                        <td>identifiant_sous_code</td>   
                        <td> nom_sous_code </td>  
                        <td> montant </td>
                        <td> indice_projet </td>  
                        <td> identifiant_surface </td>  
                        <td> montant_surface </td>  
                        <td> ratio </td>  
                        <td> index_actualisé </td>
                        <td> ratio_actualisé </td>  
                       </tr>       <tr>
                        <td> <?=$sous_code['nom_projet']?></td>
                        <td>  <?=$sous_code['identifiant_code']?>  </td>
                        <td>  <?=$sous_code['nom_code']?>  </td>    
                        <td>  <?=$sous_code['identifiant_sous_code']?>  </td>  
                        <td>  <?=$sous_code['nom_sous_code']?>  </td>  
                        <td> <?=$sous_code['montant']?></td>
                        <td> <?=$sous_code['indice_projt']?></td>
                        <td>  <?=$sous_code['identifiant_surface']?>  </td>  
                        <td>  <?=$sous_code['montant_surface']?>  </td>  
                        <td>  <?=$sous_code['ratio']?>  </td>  
                        <td> <?=$sous_code['inx']?></td>
                        <td>  <?=$sous_code['ratioac']?>  </td>  




                       </tr> 
                      
                  </table>
               <?php endforeach ; ?>
         </ul>   
         

         
   </body>
</html> 




