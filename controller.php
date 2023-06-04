<?php
include "model.php";
$obj = new Query();

if (isset($_GET['type']) && $_GET['type'] === 'insert') {
    $name = mysqli_real_escape_string($obj->connect(), $_POST['name']);
    $email = mysqli_real_escape_string($obj->connect(), $_POST['email']);
    $phone = mysqli_real_escape_string($obj->connect(), $_POST['phone']);
    $address = mysqli_real_escape_string($obj->connect(), $_POST['address']);


    $data = array(
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'address' => $address
        
    );
    $obj->insertData('form_applied', $data);
}

// Calling getData() to fetch data
$result = $obj->getData('form_applied', '*', '', 'id', 'DESC');

// Convert the result to JSON format
$jsonData = json_encode($result);

// Send the JSON response
header('Content-Type: application/json');
echo $jsonData;
?>