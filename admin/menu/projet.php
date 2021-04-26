
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>page code </title>
<link href="css/menucss.css" rel="stylesheet">
  <script src="script.js"></script>
</head>
<body>
<div class ="container flex" >  
              <div class=""> <img src="logo.gif" alt="">  </div>
              <div class ="item">  <?php echo '<p> <a href="javascript:history.go(-1)"> Retour</a> </p>'; ?> </div>

              <div class="item"><?php echo '<p> <a href="http://localhost/dashboard/Tests/Stage-master(2)/Stage-masterconnexion2//connexion.php"> Deconnexion</a> </p>'; ?></div>


</div>  

              
       
              <form method="post" class = "re">
                   <label>Search</label>
                   <input type="text" name="search">
                   <input type="submit" name="submit">
	
              </form>
 
             </br>
      	     <div class="BU">
               <button onclick="window.location.href = 'http://localhost/dashboard/Tests/app/admin/insertion/insertion_projet/ajout_projet.php';" class="a"> Nouveau projet
              </button>
             </div>
              
             <div class="BU"> 
               <button onclick="window.location.href = 'http://localhost/dashboard/Tests/app/admin/Import_excel/projet/' ;" class="b"> Importer projet
              </button>
             </div> 
              
              <div class="BU">
                <button onclick="window.location.href = 'http://localhost/dashboard/Tests/app/admin/Affichage/Affichage%20-%20projet/affichageprojet.php';" class="c"> Afficher projet 
              </button> 
              </div>
             
              <div class="BU">
                <button onclick="window.location.href = '';" class="d"> Rechercher projet
              </button>
              </div>
               
              


              <?php

                 $con = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
                 if (isset($_POST["submit"])) {
	                 $str = $_POST["search"];
                   $sth = $con->prepare("SELECT * FROM `projet` WHERE nom_projet = '$str' ");

	                 $sth->setFetchMode(PDO:: FETCH_OBJ);
	                 $sth -> execute();

                  	if($row = $sth->fetch())
	                    {
	          	?>
		
		        <p>

                   <?php echo $row->nom_projet; ?>
                   <?php echo $row->montant_ht_sans_frais_EG; ?>
                   <?php echo $row->montant_ht_frais_EG; ?>
                   <?php echo $row->maitre_ouvrage; ?>
                   <?php echo $row->maitre_ouvrage_delegue; ?>
                   <?php echo $row->architecte; ?>
                   <?php echo $row->architecte; ?>
                   <?php echo $row->delais_travaux; ?>
                   <?php echo $row->image_projet; ?>
                   <?php echo $row->date_projet; ?>
                   <?php echo $row->IGH; ?>
                   <?php echo $row->nombre_niveau_infra; ?>
                   <?php echo $row->nombre_niveau_super; ?>
                   <?php echo $row->localisation_geographique; ?>
                   <?php echo $row->lien_excel; ?>
                   <?php echo $row->type_projet; ?>
                   <?php echo $row->indice_confiance; ?>
                   <?php echo $row->id; ?>
                   <?php echo $row->identifiant_projet; ?>
                   <?php echo $row->indice_projt; ?>
				          <a href= "suppression_form.php"> Supprimer </a> 
                  <a href= "modification_form.php"> Modifier </a>
				       <br/>		
			     </p>
 
          	 <?php 
          	} 
	            else {
	            	 echo "nom inexistant";
	            }
            }
		              
             ?>

             



 

</body>
</html>

