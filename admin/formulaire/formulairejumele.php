<?php
# require_once("C:\wamp64\www\config\database.php");
$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

# $base = Initialisation();
 
if(isset($_POST['forminscription'])) {
   $projet = htmlspecialchars($_POST['projet']);
   $idprojet = htmlspecialchars($_POST['idprojet']);
   $architecte = htmlspecialchars($_POST['architecte']);
   $architecte = htmlspecialchars($_POST['annee']);
   


   
   if(!empty($_POST['projet']) AND !empty($_POST['idprojet']) AND !empty($_POST['architecte']) AND !empty($_POST['annee']) AND !empty($_POST['mdp2'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 255) {
         if($mail == $mail2) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($mdp == $mdp2) {
                     $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
                     $insertmbr->execute(array($pseudo, $mail, $mdp));
                     $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
      } else {
         $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
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
                     <label for="pseudo">Pseudo :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail">Mail :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail2">Confirmation du mail :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp">Mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp2">Confirmation du mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
                  </td>
               </tr>
               <tr>
                  <td></td>
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
//////////////////////////////////////////////////////////// 
///////////////////////////////////////////////////////////
<?php
error_reporting(E_ALL ^ E_NOTICE);

//\\ Param�tres - A mettre en haut de page

//Pour tous les param�tres -> 1 = oui ; 0 = non
$email_admin = 'webmaster@votresite.com'; // Votre email
$nom_site = 'Les Emails'; // Le nom du site o� sera install� le script
$sujets = array('Technique','Suggestion','Autre'); // Sujets possibles aux messages (pour en rajouter prenez exemple sur les 3 premiers)
$choix_urgent = 1; // Vous pouvez choisir d'activer ou non la fonction "urgent", ainsi l'internaute pourra signaler que son mail est urgent ou non
$choix_nom = 1; // Nom obligatoire ?
$votre_mail = 1; // Afficher votre adresse email directement ?

//
// Ne pas modifier ci-dessous
//

if(isset($_POST['envoyer']) && $_POST['envoyer'] == 'ok')
// Si l'on envoye quelque chose
{
	$reponse = '<br />';
	$mail = htmlentities($_POST['mail']); // On r�cup�re l'email
	$nom = htmlentities($_POST['nom']); // Le nom
	$sujet = htmlentities($_POST['sujet']); // Le sujet
	$message = nl2br(htmlentities($_POST['message'])); // Le message
	$urgent = htmlentities($_POST['urgent']); // On r�cup�re le type du message
	
	
	if($choix_nom == 1)
	// Si le nom est obligatoire
	{
		if(!empty($nom))
		// Si le champ est bien rempli on met 1
		{
			$Snom = 1;
		}
		elseif(empty($nom))
		// Sinon on met 0
		{
			$Snom = 0;
		}
	}
	else
	// Si le champ n'est pas activ� on met 1
	{
		$Snom = 1;
	}
	
	
	
	if(!empty($mail) && !empty($message) && $sujet != '' && $Snom == 1)
	// On v�rifie que l'email, le message et le sujet sont bien pr�sent et on v�rifie si tout est correct avec le nom
	{

		// L'entete du message
		$entete = "MIME-Version: 1.0\r\n";
		$entete .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$entete .= "From: <$mail>\r\n";
		$entete .= "Reply-To: $mail\r\n";
		
		$email = ''; // La variable du message a envoyer
		
		if($urgent == 1) // Si le message est urgent on le signal
			$email .= '<strong>Message urgent !!</strong><br />';
			
		if(empty($nom))
			$nom = 'NON INDIQUE';
			
		// On cr��e le message	
		$email .= 'Vous recevez ce message de votre site <u>' .$nom_site. '</u> pour une raison <strong>' .$sujets[$sujet]. '</strong>.<br />Son email est : ' .$mail. '<br /><br />';
		$email .= 'Le message de l\'utilisateur <u>' .$nom. '</u> :<br />-----<br />';
		$email .= $message;
		$email = stripslashes($email);
		
		mail($email_admin, 'Message Internaute: ' .$sujets[$sujet], $email, $entete); // Et on envoye le tout
			
		$reponse .= 'Votre message a bien �t� transf�r� au webmaster. Nous vous remercions.<br />'; // on indique que tout s'est bien d�roul�.
	}
	else
	{
		$reponse .= 'Merci de bien completer tous les champs.<br />'; // On indique une erreur
	}
}

//\\ Fin - Le texte commen�ant par "<form..." et finissant par "</form>" peut �tre plac� partout dans la page

?>

<form name="form1" method="post" action="">
<p><strong><?php echo $reponse; ?></strong></p>
<fieldset><legend>Feuille de contact</legend>
<?php 
if($votre_mail == 1) 
{ 
	echo '<p>Adresse email du webmaster : <u>' .$email_admin. '</u></p>'; 
} 
?>
<p><label>Votre email : <input type="text" name="mail">*</label></p>
<p><label>Votre nom complet : <input type="text" name="nom"><?php if($choix_nom == 1) { echo '*'; } ?></label></p>
<p>Sujet de votre message : 
  <select name="sujet">
  <?php
  	for($i = 0; $i < count($sujets); $i++)
	{
		echo '<option value="' .$i. '">' .$sujets[$i]. '</option>';	
	}
  ?>
  </select>*
</p>
<?php
if($choix_urgent == 1)
{
	echo '<p>Votre message est-il urgent ? :<br />';
	echo '<label><input type="radio" name="urgent" value="1"> Oui</label><br />';
	echo '<label><input type="radio" name="urgent" value="0" checked> Non</label><br />';
	echo '(Merci de ne pas abuser de l\'urgence)</p>';
}
?>
<p>
Votre message : <br />
<textarea name="message" cols="55" rows="10"></textarea>*
</p>
<p>
  <input type="hidden" name="envoyer" value="ok">
  <input type="submit" name="Submit" value="Envoyer">
  <input type="reset" name="Submit2" value="R&eacute;initialiser">
</p>
<p>* Champs obligatoires.
</fieldset>
</form>
<p>Created by <a href="http://www.topliens.net">M@f!eusO</a></p>