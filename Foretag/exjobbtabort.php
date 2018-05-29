<?php
session_start();
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "exjobb";
$id = $_SESSION["id"];




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['exjobbt']))
{
$Title = utf8_encode($_POST['exjobbt']);

$sql = "DELETE FROM exjobslist WHERE companyID = '$id' AND Title = '$Title'";

$result = $conn->query($sql);

}
header("Location: /Foretag/ForetagStartsida.html");

$conn->close();
?>