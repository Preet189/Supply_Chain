// Replace 'hostname', 'username', 'password', and 'database' with your actual database credentials
<?php
$connection = mysqli_connect('localhost', 'root', '', 'supplychain');

// Check if the connection was successful
if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Connection successful
echo 'Connected successfully!';
?>