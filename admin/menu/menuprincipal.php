

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>page menu principal </title>
<link href="css/menucss.css" rel="stylesheet">
  <script src="script.js"></script>
</head>
<body class="UB" > 
  <div class = "container flex">           
    <div><img src="logo.gif" alt="" ></div>  
    <div class ="item">  <?php echo '<p> <a href="javascript:history.go(-1)"> Retour</a> </p>'; ?> </div>

    <div class ="item"><?php echo '<p> <a href="http://localhost/dashboard/Tests/app/admin/connexion2/deconnexion.php"> Deconnexion</a> </p>'; ?> </div>

</div>



         <div class="BU">
        
      	     <button onclick="window.location.href = 'projet.php';" class="a">Projet 
      	     </button> 
          </div>


  
        <div class="BU">

      	     <button onclick="window.location.href = 'entreprise.php';" class="b">Entreprise 
      	     </button> 
      	    
        </div>  



      	<div class="BU">

      	      <button onclick="window.location.href = 'table.php';" class="c"> Table
      	      </button>
      	
      	
        </div>


 
         <div class="BU">

      	      <button onclick="window.location.href = 'analytique.php';" class="d">Analytique
      	      </button>
		  </div>
		

</body>
</html>

