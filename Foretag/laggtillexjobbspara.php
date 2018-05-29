<?php
session_start();
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "exjobb";
$state = 0;

$id = $_SESSION["id"];
$a=array();



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT  description, Title, ID FROM exjobslist WHERE companyID = '$id' ";

$result = $conn->query($sql);
//header("Content-type: text/javascript");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $Title = utf8_encode($row["Title"]);
        array_push($a, $Title);

    }}
    foreach($a as $string)
{
    $T=$_POST['exjobbt'];
    
  if(strpos($T, $string) !== false) 
  {
    $B =utf8_encode($_POST['Exjobb-Bio']);
    $sql = "Update exjobslist SET description ='$B'  WHERE Title='$T';";

    $result = $conn->query($sql);
    $state = 1;
    break;
  }
  
}


  if($state == 0 && isset($_POST['Exjobb-Bio']) && isset($_POST['exjobbt'])){
      $Title = $_POST['exjobbt'];
      $description = $_POST['Exjobb-Bio'];

      $sql = "INSERT INTO exjobslist (companyID,description, Title) VALUES ($id,'$description','$Title');";

      $result = $conn->query($sql);
  }
 header("Location: /Foretag/ForetagStartsida.html");

$conn->close();
?>