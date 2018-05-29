<?php header('Content-type: text/html; charset=utf-8'); ?>
<?php
// session_start();
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "exjobb";
class MyStruct {
    public $ID;
    public $name;
    public $webpage;
    public $email;
    public $bio;
};
//$obj = new MyStruct();
$a=array();



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  id, Name, Email, Webpage, Bio FROM company";

$result = $conn->query($sql);
//header("Content-type: text/javascript");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       $obj = new MyStruct();
        $obj->ID = $row["id"];
        $obj->name = utf8_encode($row["Name"]);
        $obj->webpage = $row["Webpage"];
        $obj->email = utf8_encode($row["Email"]);
        $obj->bio = utf8_encode($row["Bio"]);
        array_push($a, $obj);
        //$a[] = $obj;
        
        //echo $obj->name;

    }
    //print_r($a);
    $res = json_encode($a);
    //$_SESSION["a"] = $a;
    
} else {
    echo " fel";
    
}

$conn->close();
?>