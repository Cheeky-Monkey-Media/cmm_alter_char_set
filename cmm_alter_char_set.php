<?php
// Change the following setting as needed.
$host = "localhost";
$db_name = 'dbname';
$db_username = "root";
$db_password = "root";
$convert_to = "utf8_general_ci";

try {
 $conn = new PDO("mysql:host=$host;dbname=$db_name", $db_username, $db_password);
 // set the PDO error mode to exception
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $sql = "SHOW TABLES";

 print "Following SQL Statements have been executed. <br><br>";

 foreach ($conn->query($sql) as $row) {
  	 $table_name = $row['Tables_in_' . $db_name];
  	 $sql = 'ALTER TABLE ' . $table_name . ' CONVERT TO CHARACTER SET utf8 COLLATE ' . $convert_to;
  	 $output = $sql . '<br>';

  	 print $output;
  	 $conn->query($sql);
 }

}
catch(PDOException $e)
{
 echo "Connection failed: " . $e->getMessage();
}