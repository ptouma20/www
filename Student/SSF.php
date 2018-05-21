<?php
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "exjobb";
class MyStruct2 {
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
       $obj = new MyStruct2();
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
    $res2 = json_encode($a);

    
} else {
    echo " fel";
    
}

$conn->close();
?>