
<?php
// session_start();
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "exjobb";
class MyStruct9 {
    public $ID;
    public $Username;
    public $Name;
    public $Lastname;
    public $Email;
    public $Education;
    public $Bio;
};
//$obj = new MyStruct9();
$a=array();



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT *  FROM students;";

$result = $conn->query($sql);
//header("Content-type: text/javascript");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $obj = new MyStruct9();
        $obj->ID = utf8_encode($row["ID"]);
        $obj->Username = utf8_encode($row["Username"]);
        $obj->Name = utf8_encode($row["Name"]);
        $obj->Lastname = utf8_encode($row["Lastname"]);
        $obj->Email = utf8_encode($row["Email"]);
        $obj->Education = utf8_encode($row["Education"]);
        $obj->Bio = utf8_encode($row["Bio"]);
        array_push($a, $obj);

    }
    //print_r($a);
    $res9 = json_encode($a);
    //$_SESSION["a"] = $a;
    
} else {
    echo " fel";
    
}

$conn->close();
?>