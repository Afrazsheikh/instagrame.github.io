<?php 
$uname = $_POST['username'];
$pass = $_POST['password'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insta1";
// create connection
$conn = mysqli_connect ($servername , $username , $password, $dbname);
//check connection
if(!$conn){
    die("sorry we failed to connect: ".mysqli_connect_error());
}
else{
    echo "connection was succesful";
}
//create database here 
//create table here
//insertion into the table
$sql = "INSERT INTO tableinsta (username, password)
VALUES ('$uname', '$pass')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>

