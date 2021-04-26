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

    if(isset($_POST['nom'])){
        $_SESSION['nom']=$_POST['nom'];
    }
    if(!isset($_SESSION['nom'])){
        $_SESSION['nom']=" "; // Permet d'avoir tous les résultats su aucune recherche n'a été effectuée
    }

            //Champ 2 = Code départemental
    if(isset($_POST['architecte'])){
    $_SESSION['architecte']=$_POST['architecte'];

    if(!isset($_SESSION['arhitecte'])){     
       $_SESSION['architecte']=" "; // Permet d'avoir tous les résultats su aucune recherche n'a été effectuée <br>        }<br>


    //Champ 3 = Code commune
    if(isset($_POST['endroit'])){
    $_SESSION['endroit']=$_POST['endroit'];
    }
    if(!isset($_SESSION['endroit'])){
    $_SESSION['endroit']=" "; // Permet d'avoir tous les résultats su aucune recherche n'a été effectuée
    }
    $requete=$con->prepare( 'SELECT nom, architecte, endroit FROM clients WHERE nom LIKE :nom AND architecte LIKE :architecte AND  endroit LIKE :endroit');
            $requete->bindValue(':nom',"%".$_SESSION['nom']."%");
            $requete->bindValue(':architecte',"%".$_SESSION['architecte']."%");
            $requete->bindValue(':endroit',"%".$_SESSION['endroit']."%");
      
            $requete->execute();
            if($requete->rowCount() > 0){
                while ($row = $requete->fetch()){
                    echo "<p>" .$row["nom"]. "</p>";
                    echo "<p>" .$row["architecte"]. "</p>";
                    echo "<p>" .$row["endroit"]. "</p>";
                    
                }

            }else {
                echo "<p> erreur </p> ";
            }
          unset($requete);
          unset($pdo);  


   
    }   
}       
}	
?>	
