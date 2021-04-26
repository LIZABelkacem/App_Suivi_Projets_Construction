<?php

//import.php

include 'vendor/autoload.php';
$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

//$connect = new PDO("mysql:host=localhost;dbname=espace_membre", "root", "");

if(isset($_FILES['import_excel']))
{
 $file_name = $_FILES['import_excel']['name'];
 $allowed_extension = array('xls', 'csv', 'xlsx');
 $file_array = explode(".",$file_name);
 $file_extension = end($file_array);

 if(in_array($file_extension, $allowed_extension))
 {
  $file_name = time() . '.' . $file_extension;
  move_uploaded_file($_FILES['import_excel']['tmp_name'], $file_name);
  $file_type = \PhpOffice\PhpSpreadsheet\IOFactory::identify($file_name);
  $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($file_type);

  $spreadsheet = $reader->load($file_name);

  unlink($file_name);

  $data = $spreadsheet->getActiveSheet()->toArray();

  foreach($data as $row)
  {
   $insert_data = array(
    ':first_name'  => $row[0],
    ':last_name'  => $row[1],
    ':created_at'  => $row[2],
    ':updated_at'  => $row[3]
   );

   $query = "
   INSERT INTO sample_datas 
   (first_name, last_name, created_at, updated_at) 
   VALUES (:first_name, :last_name, :created_at, :updated_at)
   ";

   $statement = $bdd->prepare($query);
   $statement->execute($insert_data);
  }
  $message = '<div class="alert alert-success">Data Imported Successfully</div>';
   echo '<p> projet importé avec succès </p>';
   echo '<p><a href="importprojet.php">retour </a></p>';
 }
 else
 {
    echo '<p> <div class="alert alert-danger">Only .xls .csv or .xlsx file allowed</div></p>';
 }
} 
else
{
    echo '<p> <div class="alert alert-danger">Please Select File</div></p>';
}
?>





<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

