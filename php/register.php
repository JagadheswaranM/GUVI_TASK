<?php
$servername="localhost";
$username="root";
$password="";
$dbname="users";

$conn=new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    dir("Connection failed: ".$conn->connect_error);
}

$name=$_POST['Username'];
$email=$_POST['Email'];
$password=$_POST['pass'];

$stmt =$conn->prepare("INSERT INTO registration(Username,Email,pass) VALUES (?,?,?)");
$stmt->bind_param("sss", $name,$email,$password);
$stmt->execute();
$stmt->close();
$conn->close();

header("Location: http://localhost/GUVI_FINAL/login.html");
exit();

?>
