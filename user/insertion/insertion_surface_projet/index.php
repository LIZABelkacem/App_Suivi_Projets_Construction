<html>
<head>
<meta charset="utf-8">
<title> ajout code </title>
<link rel="stylesheet" href="../css/inscrptioncss.css" media="screen" type="text/css" />


</head>
<body>
<div class = "container flex">           
    <div><img src="../css/logo.gif" alt="" ></div>  
    <div class ="item">  <?php echo '<p> <a href="javascript:history.go(-1)"> Retour</a> </p>'; ?> </div>

    <div class ="item"><?php echo '<p> <a href="deconnexion.php"> Deconnexion</a> </p>'; ?> </div>

</div>
       
   <h1> Ajout surface projet </h1>
  <div id="container" align="center">
  <form action="insertion.php" method="post" class = "form">
    
  <p> 
         <label for ="identifiant_projet"> identifiant_projet </label>
         <input id="identifiant_projet" type ="text" name="identifiant_projet">

  </p>
  <p> 
         <label for ="identifiant_surface"> identifiant_surface" </label>
         <input id="identifiant_surface" type ="text" name="identifiant_surface">
           
  </p>
  <p> 
         <label for ="montant_surface"> montant_surface" </label>
         <input id="montant_surface" type ="text" name="montant_surface">
           
  </p>
  <p> 
         <input  type ="submit" class="lol" value="enregistrer">
           
  </p>
  </form>  

</body>
</html>     