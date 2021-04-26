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
       

  <div id="container" align="center">
  <h1> Ajout code </h1>
  <form action="insertion.php" method="post" class = "form">
    
  <p> 
         <label for ="nom_code"> nom_code </label>
         <input id="nom_code" type ="text" name="nom_code"">

  </p>
  <p> 
         <label for ="identifiant_code"> identifiant_code" </label>
         <input id="identifiant_code" type ="text" name="identifiant_code">
           
  </p>
  <p> 
         <input  type ="submit" class="lol" value="enregistrer">
           
  </p>
  </form>  

</body>
</html>     