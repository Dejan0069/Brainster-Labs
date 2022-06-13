<?php

$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "brainster_employ";

$connection = mysqli_connect($host, $user, $pass, $db_name);

 if ($connection->connect_error) {
     echo "Connection failed";
 }


 $query = "select * from students;";
 $queryResult = $connection->query($query);
 echo "<table>";
 while ($queryRow = $queryResult->fetch_row()) {
     echo "<tr>";
     for ($i = 0; $i < $queryResult->field_count; $i++) {
         echo "<td>$queryRow[$i]</td>";
     }
     echo "</tr>";
 }
 echo "</table>";
 $connection->close();

?>