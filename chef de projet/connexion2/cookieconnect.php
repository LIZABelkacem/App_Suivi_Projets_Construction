<?php

	if(!isset($_SESSION['id']) AND isset($_COOKIE['email'],$_COOKIE['password']) AND !empty($_COOKIE['email']) AND !empty($_COOKIE['password'])) {
	   $requser = $bdd->prepare("SELECT * FROM chef_projet WHERE mail = ? AND motdepasse = ?");
	   $requser->execute(array($_COOKIE['email'], $_COOKIE['password']));
	   $userexist = $requser->rowCount();
	   if($userexist == 1)
	   {
	      $userinfo = $requser->fetch();
	      $_SESSION['id'] = $userinfo['id'];
	      $_SESSION['pseudo'] = $userinfo['pseudo'];
		  $_SESSION['mail'] = $userinfo['mail'];
	   }
	}
?>	