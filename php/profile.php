<?php
require 'C:\xampp\htdocs\mongodbphp\vendor\autoload.php'; 

$client = new MongoDB\Client('mongodb://localhost:27017/');
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;

$empcollection=$client->selectCollection($companydb,'empcollection');

if(isset($_POST['submit'])){
    $userData=[
        $firstname = $_POST['firstname'],
        $Lastname= $_POST['Lastname'],
        $Date_of_Birth= $_POST['Date_of_Birth'],
        $NameoftheOrganisation = $_POST['NameoftheOrganisation'],
        $Educationalqualification = $_POST['Educationalqualification'],
        $YearofPassing = $_POST['YearofPassing'],
        $MobileNumber = $_POST['MobileNumber'],
        $email = $_POST['email']
    ];

    $result=$empcollection->insertOne($userData);

    if($result->getInsertedCount()==1){
        echo'Created successfully';
    }else{
        echo'Failed';
    }
}

?>
