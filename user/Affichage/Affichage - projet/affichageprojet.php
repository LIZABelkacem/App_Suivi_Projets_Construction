<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
$pdoStat = $objetPdo -> prepare ('SELECT * From projet');
$executeIsOk = $pdoStat ->execute();

$projets = $pdoStat -> fetchAll();
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
                <?php echo '<p> <a href="javascript:history.go(-1)"> Retour</a> </p>'; ?>
            </div>

              <div class="item">
                 <?php echo '<p> <a href="http://localhost/dashboard/Tests/Stage-master(2)/Stage-master/connexion2/connexion.php"> Deconnexion</a> </p>'; ?>
               </div>

   </div>
 

         <h1>Liste des projets</h1>
         <ul>
               <?php foreach ($projets as $projet): ?>
                  <table>
                    <tr>    
                        <td>nom projet</td>
                        <td>montant ht sans frais EG</td>
                        <td>montant ht frais EG</td>
                        <td>maitre ouvrage</td>
                        <td>maitre ouvrage delegue</td>
                        <td>architecte</td>
                        <td>delais travaux</td>
                        <td>image projet</td>
                        <td>date projet</td>
                        <td>IGH</td>
                        <td>nombre niveau infra</td>
                        <td>nombre niveau super</td>
                        <td>localisation geographique</td>
                        <td>lien excel</td>
       
                        <td>type projet</td>
                        <td>indice confiance</td>
                        <td> identifiant_projet </td>
                        <td>fiche ratio</td>
                        <td>Modification</td>
                    </tr>
                    <tr>    
                        <td> <?= $projet['nom_projet']?>   </td>
                        <td> <?=$projet['montant_ht_sans_frais_EG']?>   </td>
                        <td> <?= $projet['montant_ht_frais_EG']?>   </td>
                        <td> <?= $projet['maitre_ouvrage']?>   </td>
                        <td> <?= $projet['maitre_ouvrage_delegue']?>   </td>
                        <td> <?= $projet['architecte']?>  </td>
                        <td> <?= $projet['delais_travaux']?>  </td>
                        <td> <?= $projet['image_projet']?>   </td>
                        <td> <?= $projet['date_projet']?>   </td>
                        <td> <?= $projet['IGH']?>   </td>
                        <td> <?= $projet['nombre_niveau_infra']?>   </td>
                        <td> <?= $projet['nombre_niveau_super']?>   </td>
                        <td>  <?= $projet['localisation_geographique']?></td>
                        <td>  <a href="<?php echo $projet['lien_excel']; ?>">'<?php echo $projet['lien_excel']; ?></a></td>
                        <td>  <?= $projet['type_projet']?>  </td>
                        <td>  <?= $projet['indice_confiance']?>     </td>
                        <td>  <?= $projet['identifiant_projet']?>     </td>
                        <td>  <a href= "fiche_ratio.php?numProjet= <?= $projet['id']?>"> Fiche Ratio </a>  </td>
                        <td>  <a href= "modification_form.php?numProjet= <?= $projet['id']?>"> Modifier </a>  </td>
                       
                    </tr>

                  </table> 
                 
               <?php endforeach ; ?>

         </ul>
         
   </body>
</html> 




