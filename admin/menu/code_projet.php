
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title> code projet </title>
<link href="css/menucss.css" rel="stylesheet">
  <script src="script.js"></script>
</head>
<body>   
<div class ="container flex" >  
              <div class=""> <img src="logo.gif" alt="">  </div>
              <div class ="item">  <?php echo '<p> <a href="javascript:history.go(-1)"> Retour</a> </p>'; ?> </div>
              <div class="item"> <?php echo '<p> <a href="http://localhost/dashboard/Tests/Stage-master(2)/Stage-master/connexion2/connexion.php"> Deconnexion</a> </p>'; ?></div>

</div>

              <form method="post" class = "re">
                   <label>Search</label>
                   <input type="text" name="search">
                   <input type="submit" name="submit">
	
              </form>
 
             </br>

  

         <div class="BU">
        
      	     <button onclick="window.location.href = 'http://localhost/dashboard/Tests/app/admin/insertion/insrtion_code_projet/';" class="a"> Nouveau  code projet
      	     </button> 
          </div>


  
        <div class="BU">

      	     <button onclick="window.location.href = 'http://localhost/dashboard/Tests/app/admin/Import_excel/code_projet/';" class="b"> Importer  code projet
      	     </button> 
      	    
        </div>  



      	<div class="BU">

      	      <button onclick="window.location.href = 'http://localhost/dashboard/Tests/app/admin/Affichage/Affichage_code_projet/affichage_sous_code.php';" class="c"> Afficher code projet
      	      </button>
      	
      	
        </div>


 
         <div class="BU">

      	      <button onclick="window.location.href = 'analytique.html';" class="d"> Rechercher sous code projet
      	      </button>
      	</div>
		





 

</body>
</html>

