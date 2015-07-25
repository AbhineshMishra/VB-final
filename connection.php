<?php
//phpinfo();
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "root123";
$mysql_database = "vedicbaba";
$prefix = "";
//echo "connection now";
//try {
//    $conn = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_database", $mysql_user, $mysql_password);
    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 //   echo "Connected successfully"; 
 //   }
//catch(PDOException $e)
//    {
 //   echo "Connection failed: " . $e->getMessage();
  //  }
  // Try changing it to NOSQL
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

?>
