<?php
include "model.php";
$obj = new Query();

if (isset($_GET['type']) && $_GET['type'] === 'insert') {
    $name = mysqli_real_escape_string($obj->connect(), $_POST['name']);
    $email = mysqli_real_escape_string($obj->connect(), $_POST['email']);
    $phone = mysqli_real_escape_string($obj->connect(), $_POST['phone']);
    $designation = mysqli_real_escape_string($obj->connect(), $_POST['designation']);
    $address = mysqli_real_escape_string($obj->connect(), $_POST['address']);


    $data = array(
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'designation' => $designation,
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






?>