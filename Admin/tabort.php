<?php
session_start();
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "exjobb";

$a=array();
$b=array();


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Username FROM students; ";

$result = $conn->query($sql);
//header("Content-type: text/javascript");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $Title = utf8_encode($row["Username"]);
        array_push($a, $Title);

    }}
$sql2 = "SELECT  Name FROM company;";

$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {
        $Title = utf8_encode($row["Name"]);
        array_push($b, $Title);

    }}




if($_POST['type'] ==  "tabort")
{
$T=$_POST['tabortt'];
foreach($a as $string)
{
    
    
  if(strpos($T, $string) !== false) 
  {
    $sql = "DELETE FROM students WHERE Username='$T';";
    $result = $conn->query($sql);
    break;
  }
  
}
foreach($b as $string)
{
    
  if(strpos($T, $string) !== false) 
  {
    $sql = "DELETE FROM company WHERE Name='$T';";
    $result = $conn->query($sql);
    break;
  }

  
}
}
header("Location: /Admin/AdminStartsida.html");

$conn->close();
?>