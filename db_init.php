<?php 
    $isCLI = ( php_sapi_name() == 'cli' );
    if (!$isCLI){
        die('nice try');
    }
    require_once 'db_config.php';

    try{
        $DB = new pdo("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
        $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $createUsersQuery = "CREATE TABLE Members (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(100) NOT NULL,
        last_name VARCHAR(100) NOT NULL,
        email VARCHAR(30) NOT NULL,
        phone_number VARCHAR(15) NOT NULL,
        marital_status VARCHAR(15) NOT NULL,
        date_of_birth DATE NOT NULL,
        health_challenge VARCHAR(200),
        next_of_kin_first_name VARCHAR(100) NOT NULL,
        next_of_kin_last_name VARCHAR(100) NOT NULL,
        next_of_kin_address VARCHAR(100) NOT NULL,
        next_of_kin_phone VARCHAR(100) NOT NULL)";

        $DB->exec($createUsersQuery);
    }catch (PDOException $e){
        echo $e->getMessage();
    }
    $DB= null;

?>