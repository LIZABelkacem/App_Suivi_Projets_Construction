<?php

//fetch.php

include('database_connection.php');

if(isset($_POST["year"]))
{
 $query = "
 SELECT * FROM index_date
 WHERE year = '".$_POST["year"]."' 
 ORDER BY id ASC
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
   'month'   => $row["month"],
   'indice'  => floatval($row["indice"])
  );
 }
 echo json_encode($output);
}

?>