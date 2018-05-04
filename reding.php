<?php
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "Examensprojekt";
$usernamee = $_POST['username1'];
$Passwordd = $_POST['password1'];
$pp = "pascal";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  id, Username, Password, Firstname, Lastname, Email, Education FROM students WHERE Firstname = '$usernamee' AND Password = $Passwordd";

$result = $conn->query($sql);





if ($result->num_rows > 0) {
   // echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "<tr><td>".$row["id"]."<tr><td>".$row["Username"]."<tr><td>".$row["Password"]."</td><td>".$row["Firstname"]." ".$row["Lastname"]."<tr><td>".$row["Email"]."<tr><td>".$row["Education"]."</td></tr>";
        //if($Firstname == $usernamee){
          //  echo "du kan komma in ";
           // breake;
        //}
        echo 'Du kan komma in ';
        header("Location: /StudentStartsida.html");
    }
    echo "</table>";
} else {
    echo '<script language="javascript">';
    echo 'alert("username eller password are fel")';
    echo '</script>';
    header("Location: /logning.html");
    
}
$conn->close();
?>