<html>
<head>
<meta charset="utf-8">
<title> ajout index </title>
<link rel="stylesheet" href="../css/inscrptioncss.css" media="screen" type="text/css" />


</head>
<body>
<div class = "container flex">           
    <div><img src="../css/logo.gif" alt="" ></div>  
    <div class ="item">  <?php echo '<p> <a href="javascript:history.go(-1)"> Retour</a> </p>'; ?> </div>

    <div class ="item"><?php echo '<p> <a href="deconnexion.php"> Deconnexion</a> </p>'; ?> </div>

</div>    
  <div id="container" align="center">
  <h1> Ajout index </h1>
  <form action="insertion.php" method="post" class = "form">
    
  <p> 
         <label for ="year"> annéee </label>
         <input id="year" type ="text" name="year">

  </p>
  <p> 
         <label for ="month"> mois </label>
         <input id="month" type ="text" name="month">

  </p>
  <p> 
         <label for ="indice"> indice" </label>
         <input id="indice" type ="text" name="indice">
           
  </p>
  <p> 
         <input  type ="submit" class="lol" value="enregistrer">
           
  </p>
  </form>  

</body>
</html>     