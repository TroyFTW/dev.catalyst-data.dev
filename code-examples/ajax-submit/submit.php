<?php

if( $_POST ){

    $variable1 = $_POST['txt_field'];
	
    
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

    $sql = "INSERT INTO `table` (column)
    VALUES ('value')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class=\"alert alert-info\"><strong>Success!</strong> The form submitted and data was stored...</div>";
    } else {
        echo  "<div class=\"alert alert-danger\"><strong>Error!</strong> " . "<br>" . $sql . "<br>" . mysqli_error($conn) . "</div>";     
    }

    $conn->close();

?>
	
    <div class="alert alert-info">
        <strong>Success !</strong> The Form Submitted...
    </div>
    	
    <table class="table table-striped" border="0">
        <tr>
            <td>Variable1 Label</td>
            <td><?php echo $variable1 ?></td>
        </tr>
    </table>

<?php
}
?>