<html>
<head>
<meta charset="utf-8">
<title> ajout entreprise </title>
<link rel="stylesheet" href="../css/inscrptioncss.css" media="screen" type="text/css" />


</head>
<body>
<div class = "container flex">           
    <div><img src="../css/logo.gif" alt="" ></div>  
    <div class ="item">  <?php echo '<p> <a href="javascript:history.go(-1)"> Retour</a> </p>'; ?> </div>

    <div class ="item"><?php echo '<p> <a href="deconnexion.php"> Deconnexion</a> </p>'; ?> </div>

</div>
   <h1> Ajout entreprise </h1>

  <div id="container" align="center">
  <form action="insertion.php" method="post" class = "form">
    
  <p> 
         <label for ="nom_entreprise"> nom_entreprise </label>
         <input id="nom_entreprise" type ="text" name="nom_entreprise">

  </p>
  <p> 
         <label for ="identifiant_entreprise"> identifiant_entreprise </label>
         <input id="identifiant_entreprise" type ="text" name="identifiant_entreprise">
           
  </p>
  <p> 
         <input  type ="submit" class="lol" value="enregistrer">
           
  </p>
  </form>  

</body>
</html>     