
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>page menu principal </title>
<link href="css/menucss.css" rel="stylesheet">
  <script src="script.js"></script>
</head>
<body> 

<div class ="container flex" >  
              <div class=""> <img src="logo.gif" alt="">  </div>
              <div class="item"><?php echo '<p> <a href="javascript:history.go(-1)"> Retour</a> </p>'; ?></div>

              <div class="item"><?php echo '<p> <a href="http://localhost/dashboard/Tests/Stage-master(2)/Stage-master/connexion2/connexion.php"> Deconnexion</a> </p>'; ?></div>

</div>
          

		  

                <form method="post" class = "re">
                    <label>Search</label>
                    <input type="text" name="search">
                    <input type="submit" name="submit">

                </form>

              </br>  
     

         <div class="BU">
        
      	     <button onclick="window.location.href = 'http://localhost/dashboard/Tests/app/user/insertion/insertion_surface/';" class="a"> Nouvelle surface
      	     </button> 
          </div>


  
        <div class="BU">

      	     <button onclick="window.location.href = 'http://localhost/dashboard/Tests/app/user/Import_Excel/surface/';" class="b"> Importer surface
      	     </button> 
      	    
        </div>  



      	<div class="BU">

      	      <button onclick="window.location.href = 'http://localhost/dashboard/Tests/app/user/Affichage/Affichage_surface/affichage_surface.php';" class="c"> Afficher surfaces
      	      </button>
      	
      	
        </div>


 
         <div class="BU">

      	      <button onclick="window.location.href = '';" class="d"> Rechercher surface
      	      </button>
      	</div>	  

              <?php

                 $con = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
                 if (isset($_POST["submit"])) {
	                 $str = $_POST["search"];
                   $sth = $con->prepare("SELECT identifiant_surface ,  nom_surface , unite_surface FROM `surface` WHERE nom_surface= '$str' ");

	                 $sth->setFetchMode(PDO:: FETCH_OBJ);
	                 $sth -> execute();

                  	if($row = $sth->fetch())
	                    {
	          	?>
		
		        <p>     
         				<?php echo $row->identifiant_surface;?>
          				<?php echo $row->nom_surface; ?>
				          <?php echo $row->unite_surface;?>
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

