<?php
session_start();
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "exjobb";
$id = $_SESSION["id"];
class MyStruct {

    public $description;

    public $Title;
    public $id;
};
//$obj = new MyStruct();
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
       $obj = new MyStruct();
       $obj->id = utf8_encode($row["ID"]);
        $obj->description = utf8_encode($row["description"]);
        $obj->Title = utf8_encode($row["Title"]);
        array_push($a, $obj);

    }
    $res = json_encode($a);
    
} else {
    echo " fel";
    
}

$conn->close();
?>