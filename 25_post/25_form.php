<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form inputs
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Display the submitted values
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;
}
?>
