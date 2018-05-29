<?php
session_start();
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "exjobb";
class MyStruct {
    public $ID;
    public $description;
    public $companyID;
    public $Title;
    public $Name;
};
//$obj = new MyStruct();
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
        $r = $row["companyID"];
        $obj->description = utf8_encode($row["description"]);
        $obj->companyID = utf8_encode($row["companyID"]);
        $obj->Title = utf8_encode($row["Title"]);
        $sql2 = "SELECT Name FROM company WHERE company.ID = $r";
        $result2 = $conn->query($sql2);
        if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {
        $obj->Name = $row["Name"];
    }
        

    }
    array_push($a, $obj);
    }
    //print_r($a);
    $res = json_encode($a);
    //$_SESSION["a"] = $a;
    
} else {
    echo " fel";
    
}

$conn->close();
?>