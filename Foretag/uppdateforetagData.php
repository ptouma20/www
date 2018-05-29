<?php
 session_start();
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "exjobb";
$namn = $_POST['CompanieName'];
$mail = $_POST['CompanieMail'];
$websida= $_POST['CompanieWebPage'];
$gammalname = $_SESSION["Name"];
$userid = $_SESSION["userid"];
$Bio = $_POST['CompanieDescription'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 

if($namn != NULL ){
 $sql = "UPDATE company SET  Name = '$namn' WHERE Name= '$gammalname'";
$result = $conn->query($sql);
$_SESSION["Name"] = $namn;
}
if($mail != NULL ){
 $sql = "UPDATE company SET  Email = '$mail' WHERE Name= '$gammalname'";
$result = $conn->query($sql);
$_SESSION["Email"] = $mail;
}
if($websida != NULL ){
 $sql = "UPDATE company SET  Webpage = '$websida' WHERE Name= '$gammalname'";
$result = $conn->query($sql);
$_SESSION["Webpage"] = $websida;
}
if( $Bio != NULL){

    $sql = "UPDATE students SET Bio = '$Bio' WHERE  Name= '$gammalname'";
    $result = $conn->query($sql);
    $_SESSION["Bio"] = $Bio;
}

header("Location: /Foretag/ForetagProfil.html");

$conn->close();
?>

