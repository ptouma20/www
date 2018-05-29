<?php
 session_start();
$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "exjobb";
$namn = $_POST['FirstName-Student'];
$efternamn = $_POST['SecondName-Student'];
$education= utf8_encode($_POST['Education-Student']);
$gammalname = $_SESSION["Name"];
$userid = $_SESSION["userid"];
$Bio = $_POST['StudentBio'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 

if($namn != NULL ){
 $sql = "UPDATE students SET  Name = '$namn' WHERE Name= '$gammalname'";
$result = $conn->query($sql);
$_SESSION["Name"] = $namn;
}
if($efternamn != NULL ){
 $sql = "UPDATE students SET  Lastname = '$efternamn' WHERE Name= '$gammalname'";
$result = $conn->query($sql);
$_SESSION["Lastname"] = $efternamn;
}
if($education != NULL ){
 $sql = "UPDATE students SET  Education = '$education' WHERE Name= '$gammalname'";
$result = $conn->query($sql);
$_SESSION["Education"] = $education;
}
if( $Bio != NULL){

    $sql = "UPDATE students SET Bio = '$Bio' WHERE ID = '$userid'";
    $result = $conn->query($sql);
    $_SESSION["Bio"] = $Bio;
}
if(isset($_POST['Robotik']) && $_SESSION["Robotik"] == ""){
        $sql = "INSERT INTO studentkeywords (studentID,keywordID) values($userid,3)";
        $result = $conn->query($sql);
    }
if(! isset($_POST['Robotik']) && $_SESSION["Robotik"] == "checked"){
        $sql = "DELETE FROM studentkeywords WHERE studentkeywords.studentID = $userid AND studentkeywords.keywordID = 3;";
        $result = $conn->query($sql);
        }
if(isset($_POST['Hårdvara']) && $_SESSION["Hårdvara"] == ""){
        $sql = "INSERT INTO studentkeywords (studentID,keywordID) values($userid,8)";
        $result = $conn->query($sql);
    }
if(! isset($_POST['Hårdvara']) && $_SESSION["Hårdvara"] == "checked"){
        $sql = "DELETE FROM studentkeywords WHERE studentkeywords.studentID = $userid AND studentkeywords.keywordID = 8;";
        $result = $conn->query($sql);
        }
////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['Databas']) && $_SESSION["Databas"] == ""){
        $sql = "INSERT INTO studentkeywords (studentID,keywordID) values($userid,1)";
        $result = $conn->query($sql);
    }
if(! isset($_POST['Databas']) && $_SESSION["Databas"] == "checked"){
        $sql = "DELETE FROM studentkeywords WHERE studentkeywords.studentID = $userid AND studentkeywords.keywordID = 1;";
        $result = $conn->query($sql);
        }

if(isset($_POST['ArtificiellIntelligens']) && $_SESSION["ArtificiellIntelligens"] == ""){
        $sql = "INSERT INTO studentkeywords (studentID,keywordID) values($userid,5)";
        $result = $conn->query($sql);
    }
if(! isset($_POST['ArtificiellIntelligens']) && $_SESSION["ArtificiellIntelligens"] == "checked"){
        $sql = "DELETE FROM studentkeywords WHERE studentkeywords.studentID = $userid AND studentkeywords.keywordID = 5;";
        $result = $conn->query($sql);
        }

if(isset($_POST['Elektronik']) && $_SESSION["Elektronik"] == ""){
        $sql = "INSERT INTO studentkeywords (studentID,keywordID) values($userid,11)";
        $result = $conn->query($sql);
    }
if(! isset($_POST['Elektronik']) && $_SESSION["Elektronik"] == "checked"){
        $sql = "DELETE FROM studentkeywords WHERE studentkeywords.studentID = $userid AND studentkeywords.keywordID = 11;";
        $result = $conn->query($sql);
        }

if(isset($_POST['Datakommunikation']) && $_SESSION["Datakommunikation"] == ""){
        $sql = "INSERT INTO studentkeywords (studentID,keywordID) values($userid,10)";
        $result = $conn->query($sql);
    }
if(! isset($_POST['Datakommunikation']) && $_SESSION["Datakommunikation"] == "checked"){
        $sql = "DELETE FROM studentkeywords WHERE studentkeywords.studentID = $userid AND studentkeywords.keywordID = 10;";
        $result = $conn->query($sql);
        }
if(isset($_POST['Webbdesign']) && $_SESSION["Webbdesign"] == ""){
        $sql = "INSERT INTO studentkeywords (studentID,keywordID) values($userid,4)";
        $result = $conn->query($sql);
    }
if(! isset($_POST['Webbdesign']) && $_SESSION["Webbdesign"] == "checked"){
        $sql = "DELETE FROM studentkeywords WHERE studentkeywords.studentID = $userid AND studentkeywords.keywordID = 4;";
        $result = $conn->query($sql);
        }
   
if(isset($_POST['MachineLearning']) && $_SESSION["MachineLearning"] == ""){
        $sql = "INSERT INTO studentkeywords (studentID,keywordID) values($userid,6)";
        $result = $conn->query($sql);
    }
if(! isset($_POST['MachineLearning']) && $_SESSION["MachineLearning"] == "checked"){
        $sql = "DELETE FROM studentkeywords WHERE studentkeywords.studentID = $userid AND studentkeywords.keywordID = 6;";
        $result = $conn->query($sql);
        }
    
if(isset($_POST['Bildbehandling']) && $_SESSION["Bildbehandling"] == ""){
        $sql = "INSERT INTO studentkeywords (studentID,keywordID) values($userid,9)";
        $result = $conn->query($sql);
    }
if(! isset($_POST['Bildbehandling']) && $_SESSION["Bildbehandling"] == "checked"){
        $sql = "DELETE FROM studentkeywords WHERE studentkeywords.studentID = $userid AND studentkeywords.keywordID = 9;";
        $result = $conn->query($sql);
        }  

if(isset($_POST['Objektorienteradprogrammering']) && $_SESSION["Objektorienteradprogrammering"] == ""){
        $sql = "INSERT INTO studentkeywords (studentID,keywordID) values($userid,2)";
        $result = $conn->query($sql);
    }
if(! isset($_POST['Objektorienteradprogrammering']) && $_SESSION["Objektorienteradprogrammering"] == "checked"){
        $sql = "DELETE FROM studentkeywords WHERE studentkeywords.studentID = $userid AND studentkeywords.keywordID = 2;";
        $result = $conn->query($sql);
        }  

if(isset($_POST['Realtidsprogrammering']) && $_SESSION["Realtidsprogrammering"] == ""){
        $sql = "INSERT INTO studentkeywords (studentID,keywordID) values($userid,7)";
        $result = $conn->query($sql);
    }
if(! isset($_POST['Realtidsprogrammering']) && $_SESSION["Realtidsprogrammering"] == "checked"){
        $sql = "DELETE FROM studentkeywords WHERE studentkeywords.studentID = $userid AND studentkeywords.keywordID = 7;";
        $result = $conn->query($sql);
        }  

header("Location: /Student/StudentProfil.html");

$conn->close();
?>

