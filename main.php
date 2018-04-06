<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentdb";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

//check connection:
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
  //echo "connection successful";
}

/*creating a database
   $sql = "CREATE DATABASE studentdb";
   if ($conn->query($sql) === TRUE) {
      echo "Database created successfully";
     } else {
       echo "Error creating database: " . $conn->error;
     }
*/

/*
$sql = "CREATE TABLE myStudent (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(30) NOT NULL,
Subject VARCHAR(30) NOT NULL,
Total int(50),
Marks int(50),
reg_date TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

*/

/*
$sql = "INSERT INTO myStudent (Name,Subject,Total,Marks)
VALUES ('Sanjay', 'Maths', 100 ,68),
       ('Avinash', 'English', 100 ,70),
       ('Vikrant', 'Hindi', 100 ,80),
       ('Varun', 'Science', 100 ,90),
       ('Rajul', 'Physical', 100 ,91)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

*/

$sql = "SELECT id, Name, Subject, Total, Marks FROM myStudent";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["id"]. "||" . "<td></td>" . $row["Name"]  . "||" . "</td><td>" . $row["Subject"]. "||" . "</td><td>" .$row["Total"]. "||" . "</td><td>".$row["Marks"]. "||" . "</td><td>"."<br>";
    }
} else {
    echo "0 results";
}


 $conn->close();
?>
