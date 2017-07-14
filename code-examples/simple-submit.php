<!DOCTYPE html>
<html>
    <head>
        <title>Add Record to DB</title>
    </head>
<body>

<h1>PHP INSERT to MySQL</h1>

<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Create query
//$sql = "INSERT INTO `table` (column)
//VALUES ('')";

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