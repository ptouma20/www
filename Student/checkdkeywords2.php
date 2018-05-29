<?php
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "exjobb";
$name = $_SESSION["Name"];
$_SESSION["Elektronik"] = "";
$_SESSION["ArtificiellIntelligens"] = "";
$_SESSION["Robotik"] = "";
$_SESSION["Datakommunikation"] = "";
$_SESSION["Hårdvara"] = "";
$_SESSION["Webbdesign"] = "";
$_SESSION["MachineLearning"] = "";
$_SESSION["Bildbehandling"] = "";
$_SESSION["Databas"] = "";
$_SESSION["Objektorienteradprogrammering"] = "";
$_SESSION["Realtidsprogrammering"] = "";
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
        array_push($a, utf8_encode($row["Name"]));
    }}
$_SESSION["keywords"] = $a;

foreach($a as $string)
{
  if(strpos("Robotik", $string) !== false) 
  {
    $_SESSION["Robotik"] = "checked";
    break;
  }
}
foreach($a as $string)
{
  if(strpos("AI", $string) !== false) 
  {
    $_SESSION["ArtificiellIntelligens"] = "checked";
    break;
  }
}
foreach($a as $string)
{
  if(strpos("Realtidsprogrammering", $string) !== false) 
  {
    $_SESSION["Realtidsprogrammering"] = "checked";
    break;
  }
}
foreach($a as $string)
{
  if(strpos("Elektronik", $string) !== false) 
  {
    $_SESSION["Elektronik"] = "checked";
    break;
  }
}
foreach($a as $string)
{
  if(strpos("Datakommunikation", $string) !== false) 
  {
    $_SESSION["Datakommunikation"] = "checked";
    break;
  }
}
foreach($a as $string)
{
  if(strpos("Hårdvara", $string) !== false) 
  {
    $_SESSION["Hårdvara"] = "checked";
    break;
  }
}
foreach($a as $string)
{
  if(strpos("Maskinlarning", $string) !== false) 
  {
    $_SESSION["MachineLearning"] = "checked";
    break;
  }
}
foreach($a as $string)
{
  if(strpos("Webbdesign", $string) !== false) 
  {
    $_SESSION["Webbdesign"] = "checked";
    break;
  }
}
foreach($a as $string)
{
  if(strpos("Bildbehandling", $string) !== false) 
  {
    $_SESSION["Bildbehandling"] = "checked";
    break;
  }
}
foreach($a as $string)
{
  if(strpos("Databaser", $string) !== false) 
  {
    $_SESSION["Databas"] = "checked";
    break;
  }
}
foreach($a as $string)
{
  if(strpos("Objektorienterad programmering", $string) !== false) 
  {
    $_SESSION["Objektorienteradprogrammering"] = "checked";
    break;
  }
}
$conn->close();
?>