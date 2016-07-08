<!DOCTYPE html>
<html>
<body>
<?php


$servername = "capstoneskyeye.cfyrhe0diz6p.us-west-2.rds.amazonaws.com";
$username = "calvinlee708";
$password = "chwb5278";
$dbname = "capstone";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

$download=$_POST['download'];
$upload = $_POST['upload'];

$sql = "INSERT INTO capstone.capstonespeedtest (download, upload, latency,jitter,test_server,ip_address,hostname,timestamp)
VALUES ($download, $upload, 0, test, test, test,null)";

$result = mysql_query($sql);


$conn->close();
?>
</body>
</html>
