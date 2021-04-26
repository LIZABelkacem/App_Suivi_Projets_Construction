<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

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
		$insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
        $insertmbr->execute(array($pseudo, $mail, $mdp));
        $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
			
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
  </select>
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