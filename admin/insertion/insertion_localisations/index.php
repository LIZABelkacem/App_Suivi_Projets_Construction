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
  <h1> Ajout localisations </h1>
  <form action="insertion.php" method="post" class = "form">
    
  <p> 
         <label for ="name"> nom projet </label>
         <input id="name" type ="text" name="name">

  </p>
  <p> 
         <label for ="address"> Adresse </label>
         <input id="address" type ="text" name="address">
           
  </p>
  <p> 
         <label for ="lat"> Latitude  </label>
         <input id="lat" type ="text" name="lat">
           
  </p>
  <p> 
         <label for ="lon">Longitude </label>
         <input id="lon" type ="text" name="lon">
           
  </p>
  <p> 
         <label for ="description">  description </label>
         <input id="description" type ="text" name="description">
           
  </p>

  <p> 
         <input  type ="submit" class="lol" value="enregistrer">
           
  </p>
  </form>  

</body>
</html>     