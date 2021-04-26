
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
			  <div class ="item">  <?php echo '<p> <a href="javascript:history.go(-1)"> Retour</a> </p>'; ?> </div>

              <div class="item"><?php echo '<p> <a href="http://localhost/dashboard/Tests/Stage-master(2)/Stage-master/connexion2/connexion.php"> Deconnexion</a> </p>'; ?></div>


</div>	

                <form method="post" class = "re">
                    <label>Search</label>
                    <input type="text" name="search">
                    <input type="submit" name="submit">

                </form>

              </br>  
        

         <div class="BU">
        
      	     <button onclick="window.location.href = 'http://localhost/dashboard/Tests/app/admin/insertion/insertion_sous_code/';" class="a"> Nouveau sous code
      	     </button> 
          </div>


  
        <div class="BU">

      	     <button onclick="window.location.href = 'http://localhost/dashboard/Tests/app/admin/Import_excel/sous_code/';" class="b"> Importer sous code
      	     </button> 
      	    
        </div>  



      	<div class="BU">

      	      <button onclick="window.location.href = 'http://localhost/dashboard/Tests/app/admin/Affichage/Affichage_sous_codes/affichage_sous_code.php';" class="c"> Afficher sous code
      	      </button>
      	
      	
        </div>


 
         <div class="BU">

      	      <button onclick="window.location.href = 'analytique.html';" class="d"> Rechercher sous code
      	      </button>

      	</div> 
			 
			 <?php

$con = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
if (isset($_POST["submit"])) {
	$str = $_POST["search"];
  $sth = $con->prepare("SELECT nom_sous_code , identifiant_sous_code  FROM `sous_code` WHERE nom_sous_code = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	 if($row = $sth->fetch())
	   {
 ?>

<p>
		 <?php echo $row->nom_sous_code; ?>
		 <?php echo $row->identifiant_sous_code;  ?>

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

