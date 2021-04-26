<?php 
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
$pdoStat = $objetPdo -> prepare ('UPDATE projet set nom_projet = :nom_projet, montant_ht_sans_frais_EG = :montant_ht_sans_frais_EG,
                                   montant_ht_frais_EG= :montant_ht_frais_EG,
                                   maitre_ouvrage = :maitre_ouvrage , maitre_ouvrage_delegue = :maitre_ouvrage_delegue,
                                   architecte= :architecte, delais_travaux = :delais_travaux,
                                   image_projet = :image_projet,
                                   date_projet = :date_projet, IGH = :IGH,
                                   nombre_niveau_infra = :nombre_niveau_infra, nombre_niveau_super = :nombre_niveau_super,
                                   localisation_geographique = :localisation_geographique,
                                   lien_excel = :lien_excel, type_projet = :type_projet , indice_confiance = :indice_confiance 
                                    WHERE id_projet=:num LIMIT 1');

$pdoStat->bindValue(':num', $_POST['numProjet'], PDO::PARAM_INT);
$pdoStat->bindValue(':nom', $_POST['nom_projet'], PDO:: PARAM_STR);
$pdoStat->bindValue(':montant_ht_sans_frais_EG', $_POST['montant_ht_sans_frais_EG'], PDO:: PARAM_STR);
$pdoStat->bindValue(':montant_ht_frais_EG', $_POST['montant_ht_frais_EG'], PDO:: PARAM_STR);
$pdoStat->bindValue(':maitre_ouvrage', $_POST['maitre_ouvrage'], PDO:: PARAM_STR); 
$pdoStat->bindValue(':maitre_ouvrage_delegue', $_POST['maitre_ouvrage_delegue'], PDO:: PARAM_STR); 
$pdoStat->bindValue(':architecte', $_POST['architecte'], PDO:: PARAM_STR); 
$pdoStat->bindValue(':delais_travaux', $_POST['delais_travaux'], PDO:: PARAM_STR); 
$pdoStat->bindValue(':image_projet', $_POST['image_projet'], PDO:: PARAM_STR); 
$pdoStat->bindValue(':date_projet', $_POST['date_projet'], PDO:: PARAM_STR); 
$pdoStat->bindValue(':IGH', $_POST['IGH'], PDO:: PARAM_STR); 
$pdoStat->bindValue(':nombre_niveau_infra', $_POST['nombre_niveau_infra'], PDO:: PARAM_STR); 
$pdoStat->bindValue(':nombre_niveau_super', $_POST['nombre_niveau_super'], PDO:: PARAM_STR); 
$pdoStat->bindValue(':localisation_geographique', $_POST['localisation_geographique'], PDO:: PARAM_STR); 
$pdoStat->bindValue(':lien_excel', $_POST['lien_excel'], PDO:: PARAM_STR); 
$pdoStat->bindValue(':type_projet', $_POST['type_projet'], PDO:: PARAM_STR); 
$pdoStat->bindValue(':indice_confiance', $_POST['indice_confiance'], PDO:: PARAM_STR); 
 


$executeIsOk = $pdoStat->execute();
if($executeIsOk){
    $message = 'le contact a été modifié';
}
else{
  $message = "echec de la modification du contact";
}
?>
<html>
<head>
<meta charset="utf-8">
<title> modification : résultat </title>

</head>
<body>
<h1> résultat modification </h1>
 
<p> <?= $message ?>  </p> 
</body>
</html> 