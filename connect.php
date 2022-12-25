<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//  get input from user
$ID = $_POST['ID'];
$fullname = $_POST['fullname'];
$class = $_POST['class'];
//  Execute query
$sql = "INSERT INTO checkatt (ID, fullname, class)
VALUES ('$ID', '$fullname', '$class')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
