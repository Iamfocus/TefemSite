<?php 
    require_once('db_actions.php');

    $data = selectData();
    echo json_encode($data);
     
?>