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
$a=array($obj);
print json_encode($dbname);


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  id, Name, Email, Webpage FROM company";

$result = $conn->query($sql);





if ($result->num_rows > 0) {
   //echo "<table><tr><th>ID</th>
   //<th>Name</th><th>Password</tr><tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // $arr = array($row["id"],$row["Username"],$row["Password"],$row["Firstname"]);
       array_push($a,
        $obj->ID = $row["id"],
        $obj->name = $row["Name"],
        $obj->webpage = $row["Webpage"],
        $obj->email = $row["Email"]);
        //print_r($a);
        //echo $obj->name;
    }
    echo "</table>";
} else {
    echo " fel";
    
}
<script type="javascript">


var Fuse = require ('fuse.js');
var options = {
    shouldSort: true,
    //tokenize: true,
    //matchAllTokens: true,
    threshold: 0.6,
    location: 0,
    distance: 100,
    maxPatternLength: 32,
    minMatchCharLength: 2,
    keys: [
      "name"
  ]
  };
var fuse = new Fuse ($a, options); // "list" is the item array

var result = fuse.search("ericsson");
console.log(result);
</script>
$conn->close();
?>