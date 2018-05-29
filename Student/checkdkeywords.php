<?php
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "exjobb";
$gammalname = $_SESSION["Name"];
$userid = $_SESSION["userid"];
$_SESSION["Check"] = "checked";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
if(isset($_POST['Robotik'])){

        $sql = "insert into studentkeywords (keywordID, studentID) values (3, $userid)";
        $result = $conn->query($sql);
        
    }
    if(isset($_POST['Hårdvara'])){

        $sql = "insert into studentkeywords (keywordID, studentID) values (8, $userid)";
        $result = $conn->query($sql);
    }
    if(isset($_POST['ArtificiellIntelligens'])){

        $sql = "insert into studentkeywords (keywordID, studentID) values (5, $userid)";
        $result = $conn->query($sql);
    }
    if(isset($_POST['Elektronik'])){

        $sql = "insert into studentkeywords (keywordID, studentID) values (11, $userid)";
        $result = $conn->query($sql);
    }
    if(isset($_POST['Datakommunikation'])){

        $sql = "insert into studentkeywords (keywordID, studentID) values (10, $userid)";
        $result = $conn->query($sql);
    }
    if( isset($_POST['Webbdesign'])){

        $sql = "insert into studentkeywords (keywordID, studentID) values (4, $userid)";
        $result = $conn->query($sql);
    }
    if( isset($_POST['MachineLearning'])){

        $sql = "insert into studentkeywords (keywordID, studentID) values (6, $userid)";
        $result = $conn->query($sql);
    }
    if( isset($_POST['Bildbehandling'])){

        $sql = "insert into studentkeywords (keywordID, studentID) values (9, $userid)";
        $result = $conn->query($sql);
    }
    if( isset($_POST['Objektorienteradprogrammering'])){

        $sql = "insert into studentkeywords (keywordID, studentID) values (2, $userid)";
        $result = $conn->query($sql);
    }

$conn->close();
?>

