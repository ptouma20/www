<?php
$servername = "10.22.20.165";
$username = "user";
$password = "12345";
$dbname = "exjobb";
class MyStruct {
    public $ID;
    public $name;
    public $webpage;
    public $email;
};
//$obj = new MyStruct();
$a=array();



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  id, Name, Email, Webpage FROM company";

$result = $conn->query($sql);
header("Content-type: text/javascript");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       $obj = new MyStruct();
        $obj->ID = $row["id"];
        $obj->name = $row["Name"];
        $obj->webpage = $row["Webpage"];
        $obj->email = $row["Email"];
        array_push($a, $obj);
        //$a[] = $obj;
        
        //echo $obj->name;

    }
    //print_r($a);
    echo json_encode($a);
} else {
    echo " fel";
    
}

$conn->close();
?>