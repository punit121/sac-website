<?php 
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "acell";
$var1=$_POST['email'];
 $var2=$_POST['comment'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO submit (email, comment)
VALUES ('$var1','$var2')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

 ?>
