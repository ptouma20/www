<?php
session_start();
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "exjobb";
$userid = $_SESSION["id"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['pass1']))
{
    if($_POST['pass1'] == $_POST['pass2'] and isset($_POST['Cusername']))
    {
        $pass1 = $_POST['pass1']; $pass2 =$_POST['pass2']; $user = $_POST['Cusername'];
        $sql = "UPDATE company SET Username = '$user' , Password = '$pass1' WHERE ID = '$userid'";
        $result = $conn->query($sql);
        $_SESSION["Password"] = $pass1;
        $_SESSION["Username"] = $user;
        $_SESSION["fel"] = "";
        }
    else
    {
      // echo "faaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaan"; 
     $_SESSION["fel"] = "LÖSENORD STÄMMER INTE ÖVERENS";
             
    }
}
header("Location: /Foretag/ForetagProfil.html");
$conn->close();

?>

