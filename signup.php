<?php 
    require_once 'db_actions.php';
    foreach ($_POST as $key => $value) {
        echo $key . $value;
    }
    $acceptedData = ['first_name', 'last_name', 'email', 'phone_number', 'marital_status', 'date_of_birth', 'health_challenge', 'address',
                'next_of_kin_first_name', 'next_of_kin_last_name', 'next_of_kin_address', 'next_of_kin_phone'];
    $formData = array_filter($_POST, function($key) use ($acceptedData){
        return in_array($key, $acceptedData);
    }, ARRAY_FILTER_USE_KEY);

    $cleanData = validate($formData);
    if(empty($cleanData)){
        die('invalid form');
    }

    insertData($cleanData);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;

    
    function validate($data)
    {
        $cleanData = [];
        foreach($data as $key => $value){
            if($key == 'email'){
                $cleanData[$key] = filter_var($value, FILTER_SANITIZE_EMAIL);
                continue;
            }
            $cleanData[$key] = filter_var($value, FILTER_SANITIZE_STRING, [FILTER_FLAG_STRIP_HIGH]);
        }
        return $cleanData;
    }
?>
