<?php
$servername = "capstoneskyeye.cfyrhe0diz6p.us-west-2.rds.amazonaws.com";
$username = "calvinlee708";
$password = "chwb5278";
$dbname = "capstone";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$download=$_POST['download'];
$upload = $_POST['upload'];

$sql = "INSERT INTO capstone.capstonespeedtest (download, upload, latency,jitter,test_server,ip_address,hostname,timestamp)
VALUES ($download, $upload, 0, test, test, test,null)";

$result = mysql_query($sql);
echo"<script>console.log('ayyy lmao');
</script>"
header('Content-Type: application/json; charset=utf-8');
$conn->close();
?>