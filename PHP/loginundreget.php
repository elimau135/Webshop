<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webshop_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sample data to be inserted
$dataColumn1 = "value1";
$dataColumn2 = "value2";
$dataColumn3 = "value3";
$dataColumn4 = "value1";
$dataColumn5 = "value2";
$dataColumn6 = "value3";
$dataColumn7 = "value2";
$dataColumn8 = "value3";

// SQL query to insert data
$sql = "INSERT INTO user (username, pw, telephone, firstname, lastname, user_date, screen_resolution, operating_system) VALUES ('$dataColumn1', '$dataColumn2', '$dataColumn3', '$dataColumn4', '$dataColumn5', '$dataColumn6', '$dataColumn7', '$dataColumn8')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
