<?php
$servername="localhost";
$username="root";
$password="";
$dbname="users";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

$email=$_POST['email'];
$pass=$_POST['pass'];

$stmt=mysqli_prepare($conn,"SELECT * FROM registration WHERE Email=? AND pass=?");
mysqli_stmt_bind_param($stmt,"ss",$email,$pass);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

if(mysqli_num_rows($result)>0){
    header('Location: ../profile.html');
}else{
    echo"Invalid email or password";
}

mysqli_stmt_close($stmt);
mysqli_close($conn);


?>
