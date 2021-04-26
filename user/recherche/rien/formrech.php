<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
</head>
<body>

<form method="post">
<label>Search</label>
<input type="text" name="nom">
<input type="text" name="architecte">
<input type="text" name="endroit">

<input type="submit" name="submit">
	
</form>

</body>
</html>

<?php
$con = new PDO ('mysql:host=127.0.0.1;port=3308;dbname=espace_membre', 'root', '');
if (isset($_POST["submit"])) {
$criteres='';
if( !empty($_POST['nom']) )
   $criteres.=" AND nom LIKE '%{$_POST['nom']}'";
if( !empty($_POST['architecte']) )
   $criteres.=" AND architecte LIKE '{$_POST['architecte']}'";
if( !empty($_POST['endroit']) )
   $criteres.=" AND endroit LIKE '".$_POST['endroit']."'";
//etc
$sql='SELECT * FROM clients
	WHERE true'
    . $criteres;
}    
?>  




