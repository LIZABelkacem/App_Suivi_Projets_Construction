
<?php
$objetPdo = new PDO('mysql:host=127.0.0.1;dbname=egis', 'root', '');
$pdoStat = $objetPdo -> prepare ('SELECT P.nom_projet, SCP.identifiant_sous_code, SCP.montant, sp.identifiant_surface , SP.montant_surface, P.indice_projt , I.indice , (SCP.montant DIV SP.montant_surface) AS ra, (( (SCP.montant DIV SP.montant_surface)* MAX(I.indice) )div P.indice_projt ) AS ratioac FROM surface_projet SP , sous_code_projet SCP, projet P , index_date I WHERE SP.id_projet = SCP.id_projet AND  id = :num');


$executeIsOk = $pdoStat->execute();


 
?>
<html>
<head>
<meta charset="utf-8">
<title> modification : résultat </title>

</head>
<body>
<h1> fiche ratio projet </h1>
 
<p> <?= $message ?>  </p> 
</body>
</html> 
                       
                