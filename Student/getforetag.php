<?php
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "exjobb";
class MyStruct {
    public $Name;
    public $Email;
    public $Webpage;
    public $Bio;
};
$a=array();



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Name,Email,Webpage,Bio FROM company";

$result = $conn->query($sql);
header("Content-type: text/javascript");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       $obj = new MyStruct();
        $obj->Name = $row["Name"];
        $obj->Email = $row["Email"];
        $obj->Webpage = $row["Webpage"];
        $obj->Bio = $row["Bio"];
        array_push($a, $obj);

    }
    //print_r($a);
    echo json_encode($a);
} else {
    //echo " fel";
    
}

$conn->close();
?>