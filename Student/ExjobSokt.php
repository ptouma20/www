<?php
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "exjobb";
$id = $_SESSION["userid"];
class MyStruct3 {

    public $Fname;

    public $exjobb;
    public $Bio;
};
$a=array();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "Select company.name, exjobslist.Title, exjobslist.description
FROM company, exjobslist, applyings, students 
WHERE applyings.studentID = '$id' 
AND company.ID = exjobslist.companyID 
AND exjobslist.ID = applyings.ExjobID 
AND applyings.studentID = students.ID;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       $obj = new MyStruct3();
        $obj->Fname = utf8_encode($row["name"]);
        $obj->exjobb = utf8_encode($row["Title"]);
        $obj->Bio = utf8_encode($row["description"]);
        array_push($a, $obj);
    }
    //print_r($a);
    $res3 = json_encode($a);
    
} else {
    echo " fel";
    
}

$conn->close();
?>