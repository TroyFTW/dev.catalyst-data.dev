<!DOCTYPE html>
<html>
    <head>
        <title>Add Record to DB</title>
    </head>
<body>

<h1>PHP INSERT to MySQL</h1>

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create query - example record to be inserted
$sql = "INSERT INTO `grades` (student_id, fname, lname, fgrade)
VALUES ('45654', 'Joe', 'Smith', 'D')";

// Execute SQL Query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close Connection
$conn->close();
?>

</body>
</html>