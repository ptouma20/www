
<?php
$servername = "10.22.18.59";
$username = "user";
$password = "12345";
$dbname = "Examensprojekt";
$id = $_post[id];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//$sql = "CREATE DATABASE myDB";
// sql to create table
//$sql = "CREATE TABLE MyGuests (
//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
//firstname VARCHAR(30) NOT NULL,
//lastname VARCHAR(30) NOT NULL,
//email VARCHAR(50),
//reg_date TIMESTAMP
//)";
$sql = "INSERT INTO students (username, password, firstname, lastname,email,education)
VALUES ('$id', '12345', 'oo', 'aa', 'john@ee.com', 'waw')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>