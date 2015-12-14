<html>
<body>
<?php
echo gethostname(); 

$servername = getenv("mysql_ip");
$username = "root";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>
</body>
</html>
