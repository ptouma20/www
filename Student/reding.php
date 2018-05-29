<?php
 session_start();
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "exjobb";
$usernamee = $_POST['username1'];
$Passwordd = $_POST['password1'];
$_SESSION["fel"] = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT  ID, Username, Password, Name, Email, Webpage, Bio FROM company WHERE Username = '$usernamee' AND Password = '$Passwordd';";

$result = $conn->query($sql);
$sql2 = "SELECT  ID, Username, Password, Name, Lastname, Email, Education, Bio FROM students WHERE Username = '$usernamee' AND Password = '$Passwordd';";
$result2 = $conn->query($sql2);
$sql3 = "SELECT  ID, Username, Password FROM admin WHERE Username = '$usernamee' AND Password = '$Passwordd';";
$result3 = $conn->query($sql3);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        //$_SESSION["usernamee"] = $row["Name"];
        //$_SESSION["usernamee1"] = $row["Username"];
        $_SESSION["id"] = $row["ID"];
        $_SESSION["Username"] = $row["Username"];
        $_SESSION["Password"] = $row["Password"];
        $_SESSION["Name"] = $row["Name"];
        $_SESSION["Email"] = $row["Email"];
        $_SESSION["Webpage"] = $row["Webpage"];
        $_SESSION["Bio"] = utf8_encode($row["Bio"]);
        header("Location: /Foretag/ForetagStartsida.html");
    }}
    elseif ($result3->num_rows > 0) {
    while($row = $result3->fetch_assoc()) {
        $_SESSION["IDadmin"] = $row["ID"];
        $_SESSION["Usernameadmin"] = utf8_encode($row["Username"]);
        $_SESSION["Passwordadmin"] = utf8_encode($row["Password"]);
        header("Location: /Admin/AdminStartsida.html");
    }}
 

elseif ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {
         $_SESSION["userid"] = $row["ID"];
        $_SESSION["usernamee"] = $row["Name"];
        $_SESSION["usernamee1"] = $row["Username"];
        $_SESSION["Name"] = $row["Name"];
        $_SESSION["Lastname"] = $row["Lastname"];
        $_SESSION["Email"] = $row["Email"];
        $_SESSION["usernamee"] = $row["Name"];
        $_SESSION["Education"] = utf8_encode($row["Education"]);
        $_SESSION["Bio"] = utf8_encode($row["Bio"]);
        header("Location: /Student/StudentStartsida.html");
    }}

else {
    header("Location: /Student/logning.html");
    
}

$conn->close();
?>

