<?php
# require_once("C:\wamp64\www\config\database.php");
$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');
$sujets = array('Technique','Suggestion','Autre'); // Sujets possibles aux messages (pour en rajouter prenez exemple sur les 3 premiers)

# $base = Initialisation();
 
if(isset($_POST['forminscription'])) {
   $nom = htmlspecialchars($_POST['nom']);
   $id_projet = htmlspecialchars($_POST['id_projet']);
   $architecte = htmlspecialchars($_POST['architecte']);
   $annee = htmlspecialchars($_POST['annee']);
   $endroit = htmlspecialchars($_POST['endroit']);
   $sujet = htmlentities($_POST['sujet']); // Le sujet

}
   if(!empty($_POST['nom']) AND !empty($_POST['id_projet']) AND !empty($_POST['architecte']) AND !empty($_POST['annee']) AND !empty($_POST['endroit'])) {
      
              
                     $insertmbr = $bdd->prepare("INSERT INTO clients(nom, id_projet, architecte, annee , endroit) VALUES(?, ?, ?, ?, ?)");
                     $insertmbr->execute(array($nom, $id_projet, $architecte ,$annee , $endroit ));
                     $erreur = "projet ajouté !";
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
              
?>

<html>
   <head>
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Inscription</h2>
         <br /><br />
         <form method="POST" action="">
            <table>
               <tr>
                  <td align="right">
                     <label for="text">Nom :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre nom" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="text">id_projet :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="id_projet " id="id_projet" name="id_projet" value="<?php if(isset($id_projet)) { echo $id_projet; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="text"> architecte :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="architecte" id="architecte" name="architecte" value="<?php if(isset($architecte)) { echo $architecte; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="text">annee :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="annee" id="annee" name="annee" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="text">endroit</label>
                  </td>
                  <td>                     <input type="text" placeholder="endroit" id="endroit" name="endroit" />
                  </td>
               </tr>
               
               <tr>
                  <td> </td>
                  <td>
                   <select name="sujet">
                      <?php
                        for($i = 0; $i < count($sujets); $i++)
	                        {
		                        echo '<option value="' .$i. '">' .$sujets[$i]. '</option>';	
	                        }
                      ?>
                   </select>*
                  </p>
                  </td>
               </tr>  
               <tr> 
                  <td> </td>
                  <td align="center">
                     <br />
                     <input type="submit" name="forminscription" value="Je m'inscris" />
                  </td>
               </tr> 
               
            </table>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>

      </div>
    </body>
</html>


