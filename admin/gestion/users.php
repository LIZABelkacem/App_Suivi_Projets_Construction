
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
              <div class="item"><?php echo '<p> <a href="javascript:history.go(-1)"> Retour</a> </p>'; ?> </div>

              <div class="item"><?php echo '<p> <a href="http://localhost/dashboard/Tests/Stage-master(2)/Stage-master/connexion2/connexion.php"> Deconnexion</a> </p>'; ?> </div>

</div>

                <form method="post" class = "re">
                    <label>Search</label>
                    <input type="text" name="search">
                    <input type="submit" name="submit">

                </form>

              </br>    


    
      	     <div class="BU">
               <button onclick="window.location.href = 'http://localhost/dashboard/Tests/app/admin/insertion/insertion_user/ajoutuser.php';" class="a"> Nouvel utilisateur
              </button>
             </div>
              
  
              
              <div class="BU">
                <button onclick="window.location.href = 'http://localhost/dashboard/Tests/app/admin/Affichage/affichage_users/affichage_user.php';" class="c"> Afficher les utlisateurs
              </button> 
              </div>
             
              <div class="BU">
                <button onclick="window.location.href = '';" class="d"> Rechercher utilisateur
              </button>
              </div>
              

              <?php

                 $con = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
                 if (isset($_POST["submit"])) {
	                 $str = $_POST["search"];
                   $sth = $con->prepare("SELECT * FROM `user` WHERE pseudo= '$str' OR mail= '$str'");

	                 $sth->setFetchMode(PDO:: FETCH_OBJ);
	                 $sth -> execute();

                  	if($row = $sth->fetch())
	                    {
	          	?>
		
		        <p>
           				<?php echo $row->pseudo; ?>
				          <?php echo $row->mail; ?>
				
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

