<?php
include "model.php";
$obj = new Query();

if (isset($_GET['type']) && $_GET['type'] === 'contact_form') {
    $firstname = mysqli_real_escape_string($obj->connect(), $_POST['firstname']);
    $lastname = mysqli_real_escape_string($obj->connect(), $_POST['lastname']);
    $email = mysqli_real_escape_string($obj->connect(), $_POST['email']);
    $message = mysqli_real_escape_string($obj->connect(), $_POST['message']);


    $data = array(
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $email,
        'message' => $message
        
        
    );
    $obj->insertData('contact_form', $data);
}

// Calling getData() to fetch data
$result = $obj->getData('contact_form', '*', '', 'id', 'DESC');

// Convert the result to JSON format
$jsonData = json_encode($result);

// Send the JSON response
header('Content-Type: application/json');
echo $jsonData;





?>