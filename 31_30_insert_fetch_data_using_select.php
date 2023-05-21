<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practical_exam";

// Create a connection
$conn =new  mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);}
else{
    echo "connection succesfully<br>";}

//insert query 
 $sql= "INSERT INTO `31table` (`ID`, `F_name`, `L_name`, `marks`)
        VALUES ('3', 'tanu', 'chavan', '88')";

$result = $conn->query($sql);
if($result)
{
    echo"inserted";
}
else{
    echo"not inserted";
}


// Select query
/*$sql = "SELECT * FROM 31table";

// Execute query
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"] . "<br>";
        echo "F_name: " . $row["F_name"] . "<br>";
        echo "L_name: " . $row["L_name"] . "<br>";
        echo "marks: " . $row["marks"] . "<br>";
        echo "<br>";
    }
} else {
    echo "0 results";
}
*/


// Close the connection
$conn->close();
?>
