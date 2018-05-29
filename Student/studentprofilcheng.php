<?php
 session_start();
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "exjobb";
$namn = $_POST['FirstName-Student'];
$efternamn = $_POST['SecondName-Student'];
$education= $_POST['Education-Student'];
$gammalname = $_SESSION["Name"];
$userid = $_SESSION["userid"];
$Bio = $_POST['StudentBio'];
$mail = $_POST['Mail-Student'];
$pass1 = $_POST['password-Student']
$pass2 = $_POST['password-Student-Valid']
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if( $pass1 != NULL){
    
    if($pass1 == $pass2){$sql = "UPDATE students SET Email = '$mail' WHERE ID = '$userid'";
    $result = $conn->query($sql);
    $_SESSION["pass"] = $pass1;}
    if( $mail != NULL){

    $sql = "UPDATE students SET Email = '$mail' WHERE ID = '$userid'";
    $result = $conn->query($sql);
    $_SESSION["Email"] = $mail;
}
    else{
     echo "<script>alert('LÖSENORD STÄMMER INTE ÖVERENS')</script>";
    }
}
header("Location: /Student/StudentProfil.html");
?>