
// var mysql = require('mysql');                               /*KOPPLA UPP MOT SERVER*/

// var con = mysql.createConnection({
//   host: "85.225.250.33",          
//   user: "user",
//   password: "12345"
// });


// con.connect(function(err) {                                 /*SKAPA EN DATABAS mydb*/
//     if (err) throw err;
//     console.log("Connected!");
//     con.query("CREATE DATABASE mydb", function (err, result) {
//       if (err) throw err;
//       console.log("Database created");
//     });
//   });


var mysql = require('mysql');                       /*KOPPLA UPP MOT SERVER och databas mydb*/

var con = mysql.createConnection({
  host: "85.225.250.33",
  user: "user",
  password: "12345",
  database: "mydb"
});



// con.connect(function(err) {                                   /*skapa en tabell,*/
//   if (err) throw err;
//   console.log("Connected!");
//   //var sql = "CREATE TABLE Studenter (ID VARCHAR(50), Name VARCHAR(255), Pass VARCHAR(255), Email VARCHAR(255))";
//   //var sql = "CREATE TABLE StudentToNyckelord (ID VARCHAR(50), Nyckelord VARCHAR(255))";  
//   //var sql = "CREATE TABLE Nyckelord (ID VARCHAR(50), Kategori VARCHAR(100), Nyckelord VARCHAR(100))";  
//   con.query(sql, function (err, result) {
//     if (err) throw err;
//     console.log("Table created");
//   });
// });

// con.connect(function(err) {                                     /*lägg till nyckel i skapad tabell*/
//     if (err) throw err;
//     console.log("Connected!");
//     var sql = "ALTER TABLE Studenter ADD COLUMN ID INT AUTO_INCREMENT PRIMARY KEY";
//     con.query(sql, function (err, result) {
//       if (err) throw err;
//       console.log("Table altered");
//     });
//   });

// con.connect(function(err) {                                      /*Lägg till info i rad*/
//     if (err) throw err;
//     console.log("Connected!");
//     var sql = "INSERT INTO Studenter (ID, Name, Pass, Email) VALUES ('1', 'HELLO', 'lars', NULL)";
//     con.query(sql, function (err, result) {
//       if (err) throw err;
//       console.log("record inserted: " + result.insertId);
//     });
//   });


//   con.connect(function(err) {                                       /*ta bort info från rad*/
//     if (err) throw err;
//     var sql = "DELETE FROM Studenter WHERE ID = '1'";
//     con.query(sql, function (err, result) {
//       if (err) throw err;
//       console.log("Number of records deleted: " + result.affectedRows);
//     });
//   }); 


// con.connect(function(err) {                                   /*DELETE tabell*/
//   if (err) throw err;
//   var sql = "DROP TABLE Studenter";
//   con.query(sql, function (err, result) {
//     if (err) throw err;
//     console.log("Table deleted");
//   });
// });
