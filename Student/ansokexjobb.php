<?php
session_start();
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "exjobb";
$id = $_SESSION["userid"];

class MyStruct {
    public $ID;
    public $description;
    public $companyID;
    public $Title;
    public $Name;
};
$a=array();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT  ID, description, companyID, Title FROM exjobslist";

$result = $conn->query($sql);
//header("Content-type: text/javascript");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       $obj = new MyStruct();
        $obj->ID = $row["ID"];
        $r = $row["ID"];
        $obj->description = utf8_encode($row["description"]);
        $obj->companyID = utf8_encode($row["companyID"]);
        $obj->Title = utf8_encode($row["Title"]);
        $sql2 = "SELECT MAX(company.Name) FROM exjobslist, company WHERE company.ID = $r";
        $result2 = $conn->query($sql2);
        if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {
        $obj->Name = $row["MAX(company.Name)"];
    }
        
      
    }
  array_push($a, $obj);
    }
    }

   // $_SESSION["a"] = $a;

if(isset($_POST['Fname']))
{
$Fname = $_POST['Fname'];
$Exarbete = $_POST['Exarbete'];
foreach ($a as &$value) {
    if($Fname == $value->Name){
    $v = $value->companyID ;
    $exid = $value->ID;
    }
}


$sql = "INSERT INTO applyings(studentID,ExjobID) VALUES ($id,$exid)";

$result = $conn->query($sql);
}

header("Location: /Student/StudentStartsida.html");

$conn->close();
?>