<?php

// Define MongoDB connection URL and database name
$url = 'mongodb://localhost:27017';
$dbName = 'xyz';

// Connect to mongdb.Seeing th comment don't judge i'm copying code.It's for my understanding.
$client = new MongoDB\Driver\Manager("mongodb://localhost:27017");
var_dump($client);

// Get the "users" collection
$users = $client->selectCollection($dbName, 'users');

// Check if the signup form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the user data from the request body
  $userData = [
    'firstname' => $_POST['firstname'],
    'Lastname' => $_POST['Lastname'],
    'Date_of_Birth' => $_POST['Date of Birth'],
    'Name of the Organisation' => $_POST['Name of the Organisation'],
    'Educational qualification' => $_POST['Educational qualification'],
    'Year of Passing' => $_POST['Year of Passing'],
    'Mobile Number' => $_POST['Mobile Number'],
    'email' => $_POST['email'],

  ];

  // Insert the new user
  $result = $users->insertOne($userData);

  if ($result->getInsertedCount() === 1) {
    echo 'User created successfully';
  } else {
    echo 'Failed to create user';
  }
}
?>