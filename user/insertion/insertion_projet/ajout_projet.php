<html>
<head>
<meta charset="utf-8">
<title> ajout projet </title>
<link rel="stylesheet" href="../css/inscrptioncss.css" media="screen" type="text/css" />


</head>
<body>
<div class = "container flex">           
    <div><img src="../css/logo.gif" alt="" ></div>  
    <div class ="item">  <?php echo '<p> <a href="javascript:history.go(-1)"> Retour</a> </p>'; ?> </div>

    <div class ="item"><?php echo '<p> <a href="deconnexion.php"> Deconnexion</a> </p>'; ?> </div>

</div>
<h1> Ajout projet </h1>

  <div id="container" align="center">
  <form action="insertion.php" method="post" class = "form">
    
  <p> 
         <label for ="nom_projet"> nom_projet </label>
         <input id="nom_projet" type ="text" name="nom_projet" >

  </p>
  <p> 
         <label for ="montant_ht_sans_frais_EG"> montant_ht_sans_frais_EG </label>
         <input id="montant_ht_sans_frais_EG" type ="text" name="montant_ht_sans_frais_EG">
             
  </p>  
  <p> 
         <label for = "montant_ht_frais_EG"> montant_ht_frais_EG </label>
         <input id="montant_ht_frais_EG" type ="text" name="montant_ht_frais_EG" >
           
  </p>
  <p> 
          <label for ="maitre_ouvrage"> maitre_ouvrage </label>
         <input id="maitre_ouvrage" type ="text" name="maitre_ouvrage">
           
  </p>
  <p> 
          <label for ="maitre_ouvrage_delegue"> maitre_ouvrage__delegue </label>
         <input id="maitre_ouvrage_delegue" type ="text" name="maitre_ouvrage_delegue" >
           
  </p>
  
  <p> 
         <label for ="architecte"> architecte </label>
         <input id="architecte" type ="text" name="architecte" >

  </p>
  <p> 
         <label for ="delais_travaux"> delais_travaux </label>
         <input id="delais_travaux" type ="text" name="delais_travaux" >

  </p>
  <p> 
         <label for ="image_projet"> image_projet </label>
         <input id="image_projet" type ="text" name="image_projet">

  </p>
  <p> 
         <label for ="date_projet"> date_projet </label>
         <input id="date_projet" type ="text" name="date_projet">

  </p>
  <p> 
         <label for ="IGH"> IGH </label>
         <input id="IGH" type ="text" name="IGH">

  </p>
  <p> 
         <label for ="nombre_niveau_infra"> nombre_niveau_infra </label>
         <input id="nombre_niveau_infra" type ="text" name="nombre_niveau_infra">

  </p>
  <p> 
         <label for ="nombre_niveau_super"> nombre_niveau_super </label>
         <input id="nombre_niveau_super" type ="text" name="nombre_niveau_super" >

  </p>  
  <p> 
         <label for ="localisation_geographique"> localisation_geographique </label>
         <input id="localisation_geographique" type ="text" name="localisation_geographique" >

  </p>
  <p> 
         <label for ="lien_excel"> lien_excel </label>
         <input id="lien_excel" type ="text" name="lien_excel">

  </p>
  <p> 
         <label for ="type_projet"> type_projet </label>
         <input id="type_projet" type ="text" name="type_projet" >

  </p>
  <p> 
         <label for ="indice_confiance"> indice_confiance </label>
         <input id="indice_confiance" type ="text" name="indice_confiance" >

  </p>
  <p> 
         <label for ="id_projet"> id_projet </label>
         <input id="id_projet" type ="text" name="id_projet" >

  </p>
  <p> 
         <input  type ="submit" class="lol" value="enregistrer">
           
  </p>
  </form>  
</body>
</html>     