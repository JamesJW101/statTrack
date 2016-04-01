<?php
require '/all.php';
$option = array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_PERSISTENT => true
);
//connects and then runs instert data also sets the error mode to exception
try{
    $DB = new PDO(DSN, DBNAME, DBPW, $option);

    $DB->beginTransaction();
    $DB->exec("INSERT INTO catagory (type)
    VAULUES ('Chest')");

    // commit the transaction
     $DB->commit();
     echo "New records created successfully";
     }
 catch(PDOException $e)
     {
     // roll back the transaction if something failed
     $DB->rollback();
     echo "Error: " . $e->getMessage();
     }
