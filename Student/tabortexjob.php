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
$sql = "SELECT  * FROM exjobslist";

$result = $conn->query($sql);
//header("Content-type: text/javascript");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       $obj = new MyStruct();
        $obj->ID = $row["ID"];
        $r = $row["companyID"];
        $obj->description = utf8_encode($row["description"]);
        $obj->companyID = utf8_encode($row["companyID"]);
        $obj->Title = utf8_encode($row["Title"]);
        $sql2 = "SELECT Name FROM company, exjobslist WHERE company.ID = '$r' AND company.ID = exjobslist.companyID";
        $result2 = $conn->query($sql2);
        if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {
        $obj->Name = utf8_encode($row["Name"]);
    }
        
      
    }
  array_push($a, $obj);
    }
    }

   // $_SESSION["a"] = $a;

if(isset($_POST['Fname']))
{
$Fname = utf8_encode($_POST['Fname']);
$Exarbete = utf8_encode($_POST['Exarbete']);
foreach ($a as &$value) {
    if($Fname == $value->Name && $Exarbete == $value->Title){
    $v = $value->Name ;
    $T = $value->Title;
    $exid = $value->ID;
    }
}


$sql = "DELETE FROM applyings WHERE studentID ='$id' AND ExjobID='$exid' ;";

$result = $conn->query($sql);
}
//print_r($id);
//print_r("____________");
//print_r($exid);
//print_r("____________");
//print_r($v);
header("Location: /Student/StudentStartsida.html");

$conn->close();
?>