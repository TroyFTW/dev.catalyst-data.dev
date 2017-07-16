<?php

if( $_POST ){

    $sid = $_POST['txt_studentid'];
    $fname = $_POST['txt_fname'];
    $lname = $_POST['txt_lname'];
    $fgrade = $_POST['txt_fgrade'];
	
    
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

    $sql = "INSERT INTO `grades` (student_id, fname, lname, fgrade)
    VALUES ('$sid', '$fname', '$lname', '$fgrade')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class=\"alert alert-info\"><strong>Success!</strong> The form submitted and data was stored...</div>";
    } else {
        echo  "<div class=\"alert alert-danger\"><strong>Error!</strong> " . "<br>" . $sql . "<br>" . mysqli_error($conn) . "</div>";     
    }

    $conn->close();
?>

    <table class="table table-striped" border="0">
        <tr>
            <td><strong>Student ID</strong></td>
            <td><?php echo $sid ?></td>
        </tr>
        <tr>
            <td><strong>First Name</strong></td>
            <td><?php echo $fname ?></td>
        </tr>
        <tr>
            <td><strong>Last Name</strong></td>
            <td><?php echo $lname ?></td>
        </tr>
        <tr>
            <td><strong>Final Grade</strong></td>
            <td><?php echo $fgrade ?></td>
        </tr>
    </table>

<?php
}
?>