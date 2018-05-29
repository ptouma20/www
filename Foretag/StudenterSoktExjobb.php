<?php

$servername = "localhost";
$username = "user";
$password = "12345";
$dbname = "exjobb";
//$id = $_SESSION["id"];
class MyStruct5 {

    public $Uname;
    public $Pro;
    public $Kunskap;
    public $Bio;
    public $exjobslistID;
    public $studentemail;


};
//$obj = new MyStruct5();
$a=array();
$b=array();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT exjobslist.ID,students.Username, students.Email, students.Education, students.Bio  FROM company, exjobslist, applyings, students
WHERE company.ID = $id
AND company.ID = exjobslist.companyID
AND exjobslist.ID = applyings.ExjobID 
AND applyings.studentID = students.ID;";

$result = $conn->query($sql);
//header("Content-type: text/javascript");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       $obj = new MyStruct5();
       $obj->exjobslistID = $row["ID"];
       $obj->studentemail = $row["Email"];
        $obj->Uname = utf8_encode($row["Username"]);
        $sid=$row["Username"];
        
        $obj->Pro = utf8_encode($row["Education"]);
        //$obj->Kunskap = utf8_encode($row["description"]);
        $obj->Bio = utf8_encode($row["Bio"]);
        
        
        $sql2 = "SELECT keywords.Name from students, studentkeywords, keywords where students.Username =  '$sid'
        AND students.ID = studentkeywords.studentID AND studentkeywords.studentID AND studentkeywords.keywordID = keywords.ID ";
        $result2 = $conn->query($sql2);
        if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {
       // $obj->Kunskap = $row["Name"];
        array_push($b, utf8_encode($row["Name"]));
        
    }
    $obj->Kunskap = implode("\n",$b);
    }


        array_push($a, $obj);

    }

    //print_r($a);
    $res4 = json_encode($a);
    //$_SESSION["a"] = $a;
    

}else {
    echo " fel";
    
}

$conn->close();
?>