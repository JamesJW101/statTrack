<?php
    // CONNECT TO THE DATABASE SERVER

    require '/all.php';

    $option = array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_PERSISTENT => true
    );
    //check if database exists $option calls back to
    $showquery = "show databases like '".DBNAME.";";
    try{
        $DB = new PDO(DSN, DBNAME, DBPW, $option);
        $showresult = $DB->query($showquery);
        if($showresult->fetch()){
        ("USE".DBNAME."");
     }else{
         //create database if it doesnt exist
        $DB->query("CREATE DATABASE".DBNAME."");
        $DB->exec("USE".DBNAME."");
        $DB->exec(CATTABLE);
        $DB->exec(EXERCISETABLE);
     }

    }catch(PDOException $failure){
      var_dump ($failure);
    }
