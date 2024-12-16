<?php
    $dbhost='localhost';
    $dbname='indexpop';
    $dbuser='root';
    $dbpass='';

    header('Content-Type: application/json');

    try {
        $db=new PDO("mysql:host=$dbhost; dbname=$dbname", $dbuser,$dbpass);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "data connect";
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
?>