<?php 
require_once 'db_config.php';

try{
    $DB = new pdo("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
    $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
    echo 'User not authenticated';
}

#insert statement preparation
$insertQuery  = "INSERT INTO Members ( first_name, last_name, email, phone_number, marital_status, date_of_birth, health_challenge, 
address, courses, next_of_kin_first_name, next_of_kin_last_name, next_of_kin_address, next_of_kin_phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$insertStmt = $DB->prepare($insertQuery);

#select statement preparation
$selectQuery = "SELECT * FROM Members";
$selectStmt = $DB->prepare($selectQuery);

#inserter
function insertData($data)
{   
    global $insertStmt;
    try{
        $insertStmt->execute([$data['first_name'], $data['last_name'], $data['email'], 
        $data['phone_number'], $data['marital_status'], $data['date_of_birth'], $data['health_challenge'], 
        $data['address'], $data['courses'], $data['next_of_kin_first_name'], $data['next_of_kin_last_name'], 
        $data['next_of_kin_address'], $data['next_of_kin_phone']]);
    }catch(Exception $e){
        echo 'something happened';
    }

}

function selectData()
{   
    global $selectStmt;
    $data = [];
    try{
        $selectStmt->execute();
        $data = $selectStmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(Exception $e){
        echo 'something happened';
    }
    return $data;
}


?>
