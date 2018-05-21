<?php
session_start();
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "exjobb";
$userid = $_SESSION["userid"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['Exjobbcompname-Readonly']))
{
        $sql = "UPDATE students SET Email = '$mail' , Password = '$pass1' WHERE ID = '$userid'";
        $result = $conn->query($sql);
        }
    else
    {
     $_SESSION["fel"] = "LÖSENORD STÄMMER INTE ÖVERENS";
             
    }
}
header("Location: /Student/StudentProfil.html");
$conn->close();

?>

