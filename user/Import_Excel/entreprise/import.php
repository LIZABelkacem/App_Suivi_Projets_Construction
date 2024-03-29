<?php
require("../config/database.php");
include '../../../admin/Import_excel/vendor/autoload.php';



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
    ':nom_entreprise'  => $row[0],
    ':identifiant_entreprise'  => $row[1]
  
   );

   $query = "
    INSERT INTO entreprise
    (nom_entreprise , identifiant_entreprise) 
    VALUES (:nom_entreprise, :identifiant_entreprise)
    ";

   $statement = $pdo->prepare($query);
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
