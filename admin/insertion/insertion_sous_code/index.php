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
<h1> Ajout sous code </h1>

  <div id="container" align="center">
  <form action="insertion.php" method="post" class = "form">
  <p> 
         <label for ="identifiant_code"> identifiant_code </label>
         <input id="identifiant_code" type ="text" name="identifiant_code">
           
  </p>  
  <p> 
         <label for ="nom_sous_code"> nom_sous_code </label>
         <input id="nom_sous_code" type ="text" name="nom_sous_code">

  </p>
  <p> 
         <label for ="identifiant_sous_code"> identifiant_sous_code </label>
         <input id="identifiant_sous_code" type ="text" name="identifiant_sous_code">
           
  </p> 
  
  <p> 
         <input  type ="submit" class="lol" value="enregistrer">
           
  </p>
  </form>

  
</body>
</html>     