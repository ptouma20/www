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
if(isset($_POST['password-Student']))
{
    if($_POST['password-Student'] == $_POST['password-Student-Valid'] and isset($_POST['Mail-Student']))
    {
        $pass1 = $_POST['password-Student']; $pass2 =$_POST['password-Student-Valid']; $mail = $_POST['Mail-Student'];
        $sql = "UPDATE students SET Email = '$mail' , Password = '$pass1' WHERE ID = '$userid'";
        $result = $conn->query($sql);
        $_SESSION["pass"] = $pass1;
        $_SESSION["fel"] = "";
        }
    else
    {
      // echo "faaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaan"; 
     $_SESSION["fel"] = "LÖSENORD STÄMMER INTE ÖVERENS";
             
    }
}
header("Location: /Student/StudentProfil.html");
$conn->close();

?>

