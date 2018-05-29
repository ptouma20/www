<?php
session_start();
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "exjobb";




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_POST['person'] ==  "Student")
{
$student = $_POST['username'];
$pass = $_POST['password'];
$mail = $_POST['mail'];

$sql = "INSERT INTO  students (Username,Password,Name,Lastname,Email,Education,Bio) VALUES ('$student','$pass',' ',' ','$mail',' ',' ');";

$result = $conn->query($sql);

}
if($_POST['person'] == "Företag")
{
$foretag = $_POST['username'];
$pass = $_POST['password'];
$mail = $_POST['mail'];

$sql = "INSERT INTO  company (Username,Password,Name,Email,Webpage,Bio) VALUES ('$foretag','$pass',' ','$mail',' ',' ');";

$result = $conn->query($sql);
}
//print_r($_POST['person']);
header("Location: /Admin/AdminInbjudning.html");

$conn->close();
?>