<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
</head>
<body>

<!-- Formulaire pour permettre la recherche par mot clef  -->
<form method="post">
<table>
  
    <td>
  
        <tr><!-- ID  -->
            <label for="search">Recherche nom</label>
                <input id="nom" type="text" name="nom">
        </tr>
        <br>
  
        <tr> <!--  CODE DPT  -->
            <label for="search">Recherche par architecte</label>
                <input id="architecte" type="text" name="architecte">
        </tr>
        <br>
  
        <tr> <!--  CODE COMMUNE  -->
            <label for="search">Recherche par endroit</label>
                <input id="endroit" type="text" name="endroit">
        </tr>
        <br>
  
       
  
        <tr>
            <input type="submit" name="search" value="Rechercher">
                <input type="submit" name="reset" value="Réinitialiser">
        </tr>
        <br>
  
    </td>
</table>

</form>


</body>
</html>
<?php
$con = new PDO ('mysql:host=127.0.0.1;port=3308;dbname=espace_membre', 'root', '');
if(isset($_POST['search'])){
    /*
    Si($_POST['id'] existe et qu'il n'est pas vide, $id est égal à %$_POST['id']% sinon il est égale à rien
    */
    $nom = isset($_POST['nom']) AND !empty($_POST['nom']) ? "%".$_POST['nom']."%" : "%";
     
    $architecte =     isset($_POST['architecte'])     AND !empty($_POST['architecte'])     ? "%".$_POST['architecte']."%" : "%";
    $endroit = isset($_POST['endroit']) AND !empty($_POST['endroit']) ? "%".$_POST['endroit']."%" : "%";
     
    $req = $con->prepare("
                        SELECT nom , architecte , endroit
                        FROM clients
                        WHERE
                            nom LIKE ? AND
                            architecte ? AND
                            endroit LIKE ? 
                        ");
    $req->execute( array( $nom, $architecte, $endroit) );
    $result = $req->fetch(PDO::FETCH_OBJ);
     
    
    var_dump($result);
}