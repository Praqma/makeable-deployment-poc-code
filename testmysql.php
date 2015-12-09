<html>
    <body>
<h2>Testing connection to mysql, please wait: </h2>
<?php
$servername = "mysql";
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
<br><marquee><===== Love my marquee tags</marquee>
    </body>
</html>
