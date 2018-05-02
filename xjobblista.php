<?php
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "Examensprojekt";
class MyStruct {
    public $ID;
    public $name;
    public $webpage;
    public $email;
}
$obj = new MyStruct();


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  id, Name, Email, Webpage FROM company";

$result = $conn->query($sql);





if ($result->num_rows > 0) {
   echo "<table><tr><th>ID</th>
   <th>Name</th><th>Password</tr><tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // $arr = array($row["id"],$row["Username"],$row["Password"],$row["Firstname"]);
        $obj->ID = $row["id"];
        $obj->name = $row["Name"];
        $obj->webpage = $row["Webpage"];
        $obj->email = $row["Email"];
        echo $obj->name;
    }
    echo "</table>";
} else {
    echo " fel";
    
}
$conn->close();
?>