<html>
<head>
<meta charset="utf-8">
<title> ajout surface </title>
<link rel="stylesheet" href="../css/inscrptioncss.css" media="screen" type="text/css" />


</head>
<body>
<div class = "container flex">           
    <div><img src="../css/logo.gif" alt="" ></div>  
    <div class ="item">  <?php echo '<p> <a href="javascript:history.go(-1)"> Retour</a> </p>'; ?> </div>

    <div class ="item"><?php echo '<p> <a href="deconnexion.php"> Deconnexion</a> </p>'; ?> </div>

</div>   
<h1> Ajout surface </h1>

  <div id="container" align="center">
  <form action="insertion.php" method="post" class = "form">
  <p> 
         <label for ="identifiant_surface"> identifiant_surface </label>
         <input id="identifiant_surface" type ="text" name="identifiant_surface">
           
  </p>  
  <p> 
         <label for ="nom_surface"> nom_surface </label>
         <input id="nom_surface" type ="text" name="nom_surface">

  </p>
  <p> 
         <label for ="unite_surface"> unite_surface </label>
         <input id="unite_surface" type ="text" name="unite_surface">
           
  </p> 
  
  <p> 
         <input  type ="submit" class="lol" value="enregistrer">
           
  </p>
  </form>  
 
</body>
</html>     