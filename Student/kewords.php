<?php
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "exjobb";
$name = $_SESSION["Name"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$a=array();

$sql = "SELECT keywords.Name from students, studentkeywords, keywords where students.Name =  '$name'
AND students.ID = studentkeywords.studentID AND studentkeywords.studentID AND studentkeywords.keywordID = keywords.ID ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($a, $row["Name"]);
    }}
$_SESSION["keywords"] = $a;
$conn->close();
?>