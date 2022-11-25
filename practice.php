<?php
try {
 $connString = "mysql:host=localhost;dbname=travels";
 $user = "root";
 $pass = "";
 $pdo = new PDO($connString,$user,$pass);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql = "SELECT * FROM geocountries";
 $result = $pdo->query($sql);
 while ($row = $result->fetch()) { 
 echo $row['CountryName'] . " - " . $row['Capital'] . "<br/>"; 
 }
$pdo = null;
}
catch (PDOException $e) {
 die( $e->getMessage() );
}
?>
