
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>page menu principal </title>
<link href="css/izane.css" rel="stylesheet">
  <script src="script.js"></script>
</head>
<body> 
<a class="toz" > Ajouter un projet </a>
    
           <form action="" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
  
   
            <div class="a">
                <label>Choose Excel
                    File</label> <input type="file" name="file"
                    id="file" accept=".xls,.xlsx">
            </div> 
           
            <div>
              
            
                <button type="submit" id="submit" name="import"
                    class="btn-submit">Import</button>
           </div>
      
        
      
        
 
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    
         
<?php
    $sqlSelect = "SELECT * FROM tbl_info";
    $result = mysqli_query($conn, $sqlSelect);

if (mysqli_num_rows($result) > 0)
{
?>
        
    <table class='tutorial-table'>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>

            </tr>
        </thead>
<?php
    while ($row = mysqli_fetch_array($result)) {
?>                  
        <tbody>
        <tr>
            <td><?php  echo $row['name']; ?></td>
            <td><?php  echo $row['description']; ?></td>
        </tr>
<?php
    }
?>
        </tbody>
    </table>
<?php 
} 
?>

         
</body>
</html>

