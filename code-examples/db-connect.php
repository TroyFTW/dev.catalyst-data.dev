<!DOCTYPE html>
<html>
    <head>
        <title>Connect to DB</title>
    </head>
<body>

<h1>PHP connect to MySQL</h1>

<!-- 
    Step 1: set up objects and connection
    Step 2: create query and execute connection
    Step 3: loop through results and output to page
    Step 4: close connection
-->

<?php
    // Step 1
    $db = mysqli_connect('localhost','username','password','dbname')
    or die('Error connecting to MySQL server.');

    // Step 2
    $query = "SELECT * FROM `table`";
    mysqli_query($db,$query) or die('Error querying database.');

    $result = mysqli_query($db,$query);

    // Step 3
    while ($row = mysqli_fetch_array($result)){
        echo $row['column1'] . ' ' . $row['column2'] . '<br/>';
    }

    // Step 4
    mysqli_close($db);

?>

</body>
</html>