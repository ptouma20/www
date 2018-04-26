<?php 
$username = "";
$email = "";
$errors = array();


$db = mysql_connect('192.168.0.105','user','12345');
mysql_connect('192.168.0.105','user','12345');
mysql_select_db('test');
$db.mysql_select_db('test');
if($db){echo "Db connected";}

      $sql = "INSERT INTO Studenter (Namee,Pass) 
      VALUES ('popo','1234')"; 
      //$CDB = "CREATE DATABASE MM";
      mysqli_query($db, $sql);
      

 ?>