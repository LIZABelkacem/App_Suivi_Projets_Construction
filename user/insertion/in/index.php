<html>
<head>
<meta charset="utf-8">
<title> ajout contact </title>
<link rel="stylesheet" href="inscrptioncss.css" media="screen" type="text/css" />


</head>
<body>
  <div id="container" align="center">
  <h1> Ajout contact </h1>
  <form action="insertion.php" method="post" class = "form">
    
  <p> 
         <label for ="nom"> nom </label>
         <input id="nom" type ="text" name="firstName">

  </p>
  <p> 
         <label for ="prenom"> Prenom </label>
         <input id="prenom" type ="text" name="lastName">
           
  </p>
  <p> 
         <label for ="tel"> Telephone </label>
         <input id="tel" type ="text" name="phone">
           
  </p>
  <p> 
          <label for ="mel"> Adresse electronique </label>
         <input id="mel" type ="email" name="mail">
           
  </p>
  <p> 
         <input  type ="submit" class="lol" value="enregistrer">
           
  </p>
  </form>  
</body>
</html>     