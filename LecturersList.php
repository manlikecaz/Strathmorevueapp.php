<?php
$servername = "localhost"; //server
$username = "root"; //mysql
$password = "";//mysql
$dbname = "strathmorevueapp"; //database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM Lecturers";
$result = $conn->query($sql);

if ($result->num_rows > 0) { //condition
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["LecturersID"]. " - Name: " . $row["LectuturesName"].  " Course" . $row[" Course"]. " Email Address:" . $row[" EmailAddress"]." DateOfBirth:" . $row[" DateOfBirth"]" Gender" . $row[" Gender"]." Admission Number" . $row[" AdmissionNumber"]." Phonenumber" . $row[" Phonenumber"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>